<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

use App\Mail\CustomerSignup;

class SignUpController extends Controller
{
    public function store(Request $request)
    {  


        $verify = validator::make($request->all(),

           [
            'name'=>'required|string|max:225',
            'lastname'=>'required|string|max:225',
            'email'=>'required',
            'phone'=>'required|min:8|max:8|integer',
            'password'=>'required|string|min:8',
            'password_confirm'=>'required|min:8|string',
            'identity'=>'sometimes|image|max:5000']
          );


        if ($request->password != $request->password_confirm) {
        	return redirect()->back();
        }


        if ($request->id_parrain != null) {
                $verify = DB::table('customers')->where('uniq_id',$request->id_parrain)->first();
                 if ($verify === null) {
                   return redirect()->back();
                 }

                 $identity = $request->file('identity')->store('public/CustomerIdentiy/image');
                 $customer = Customer::create(

              [
               'name'=>$request->name,
               'lastname'=>$request->lastname,
               'email'=>$request->email,
               'phone'=>$request->phone,
               'password'=>Hash::make($request->password),
               'token'=>Customer::getToken(60),
               'identity'=>$identity,
               'uniq_id'=>uniqid(),
               'id_parrain'=>$request->id_parrain,
               'id_parrain'=>$request->id_parrain
        ]);
         Mail::to($request->email)->send(new CustomerSignup($customer));
         return redirect()->back();
        }


    	$identity = $request->file('identity')->store('public/CustomerIdentiy/image');
    	$customer = Customer::create(

    		[
               'name'=>$request->name,
               'lastname'=>$request->lastname,
               'email'=>$request->email,
               'phone'=>$request->phone,
               'password'=>Hash::make($request->password),
               'token'=>Customer::getToken(60),
               'identity'=>$identity,
               'uniq_id'=>uniqid(),
               'id_parrain'=>$request->id_parrain
    		]);

         Mail::to($request->email)->send(new CustomerSignup($customer));



    	return redirect()->back();
    }



     public function SignUpAuthorizeMembre(Request $request, $token, $authorization)
    {
      $client = Customer::select('email', 'confirmation')->where('token', $token)->firstOrFail();
        

      if ($authorization === "confirmed" AND $client->confirmation === 0) {
            Customer::where('token', $token)->update(['confirmation' => 1]);

        $request->session()->flash('success', "Bravo votre compte a été confirmer avec succes!");
            return redirect()->route('contact.path');
      } else {
            $request->session()->flash('success', "Votre compte a dèja été confirmer");
            return redirect()->route('contact.path');
      }
    }
}

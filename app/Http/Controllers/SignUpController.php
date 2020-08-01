<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use UxWeb\SweetAlert\SweetAlert;

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
            'country'=>'required|string',
            'identity'=>'sometimes|image|max:5000']
          );


        if ($request->password != $request->password_confirm) {
          
        	return view('/layout/inscription')->withMessage(" your password is'nt equal");
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
               'country'=>$request->country,
               'identity'=>$identity,
               'uniq_id'=>uniqid(),
    		]);

         Mail::to($request->email)->send(new CustomerSignup($customer));
    	   return redirect()->back();
    }



     public function SignUpAuthorizeMembre(Request $request, $token, $authorization)
    {
      $client = Customer::select('email', 'confirmation')->where('token', $token)->firstOrFail();
        

      if ($authorization === "confirmed" AND $client->confirmation === 0) {
            Customer::where('token', $token)->update(['confirmation' => 1]);

            alert()->success("Bravo votre compte a été confirmer avec succes!",'succès')->autoclose(10000);
            return redirect()->route('contact.path');
      } else {
            alert()->info("Votre compte a dèja été confirmer")->autoclose(10000);
            return redirect()->route('contact.path');
      }
    }
}

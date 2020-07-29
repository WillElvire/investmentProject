<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Message;
use App\Models\Newletter;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;


class HomeController extends Controller
{
     public function storeMessage(Request $request)
     {
         $verify_rules = validator::make($request->all(),

         	[
         		'message'=>'required|min:10',
         		'name'=>'required',
         		'email'=>'required',
         		'subject'=>'required'
            ]);
         if ($verify_rules->fails() === 'true') {
         	return redirect()->back();
         }


         $contact = Message::create(['message'=>$request->message,'name'=>$request->name,'email'=>$request->email,'subject'=>$request->subject]);
         Mail::to('admin@gmail.com')->send(new ContactMessage($contact));
         return redirect()->back();




     }
      public function newletter(Request $request)
    {
       $this->validate($request, [
             'email' => 'required|email'    
        ]);

        $all = Newletter::where('email',$request->email)->first();

        if (empty($all))
        {
            Newletter::create(['email'=> $request->email]);
            $request->session()->flash('success', 'Votre souscription au newsletter a été prise en compte!');
            return redirect()->route('contact.path');
        }

        $request->session()->flash('danger', 'Cet email est déja utilisé!');
        return redirect()->route('contact.path');
    }
   

 }

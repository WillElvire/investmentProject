<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use \Session;

class authController extends Controller
{
    //

        public function store(Request $req){

            $verify=Customer::whereEmail($req->email)->first();
            if($verify==null):

                 return View('user/partials/connection')->withError("this email doesn't exists");

            else:

                $password_check=password_verify($req->password,$verify->password);

                    if($password_check==true):

                                //if($verify->confirmation==1):

                                    Session::put('user_id',$verify->uniq_id);
                                    return redirect('/invest/home/'.$verify->uniq_id);
                                //else:

                                    //return View('user/partials/connection')->withError("you must confirm your account before get access to your profil");
                                
                                //endif;
                    else:

                                return View('user/partials/connection')->withError("password doesn't match");

                    endif;

            endif;
           

       }
}

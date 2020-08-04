<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Customer;
use \App\Models\Investissement;
use \App\Administrateurs;
use \Carbon\Carbon;
use \Session;
class adminController extends Controller
{
    //

    public function inscrits(){


        $info=Customer::orderBy('id','desc')->paginate(10);
        

         return View("admin/partials/inscrit")->withInfo($info);

    }

    public function search(Request $req){
        $search=$req->input('search');
        $user = Customer::where('uniq_id','LIKE','%'.$search.'%')

           ->orWhere('name','LIKE','%'.$search.'%')

           ->orWhere('email','LIKE','%'.$search.'%')

           ->orWhere('phone','LIKE','%'.$search.'%')

           ->orWhere('lastname','LIKE','%'.$search.'%')

           ->orWhere('country','LIKE','%'.$search.'%')

           ->paginate('10');

           

           return View('admin/partials/recherche')->withUser($user)->withSearch($search);
         

    }

    public function paiement(){


          
          
          $paiement=Investissement::wherePayday(Date('y-m-d'))->leftJoin( 'customers','customers.uniq_id', '=', 'investissements.user_id')->orderBy('id','desc')->paginate('10');

     
          //dd($paiement);
          return View('admin/partials/payement')->withPaiement($paiement);

    }


    public function profil($id){

         $information=Customer::whereUniq_id($id)->first();
         $parrainage=Customer::whereId_parrain($id)->get();
         $invest=Investissement::whereUser_id($id)->orderBy('id','desc')->paginate(5);
         return View('admin/partials/profil')->withInfo($information)->withInvest($invest)->withParrainage($parrainage);
    }


    public function connnect(){

         return View('admin/partials/connection');
    }


    public function home(){

         return View('admin/partials/home');
    }




    

    public function authentification(Request $request){


       

        $email=$request->email;
        $mdp=$request->password;

        $verify=Administrateurs::whereEmailAndPassword($email,$mdp)->first();

        if($verify!=null):


               Session::put('verify',$verify->id);
               return redirect("/admin/home");


        else:



           return View('admin/partials/connection')->withMessage("Verifier vos informations (email ou password )");



        endif;

        


    }

    public function delete($id){

       
        $verify=Customer::whereUniq_id($id)->delete();
       
        return redirect()->back();

    }
}

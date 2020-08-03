<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Customer;
use \App\Models\Investissement;
use \App\Administrateur;
use \Carbon\Carbon;
class adminController extends Controller
{
    //

    public function inscrits(){


        $info=Customer::paginate(10);
        

         return View("admin/partials/inscrit")->withInfo($info);

    }

    public function search(){

          return View('admin/partials/recherche');

    }

    public function paiement(){


          
         
          $paiement=Investissement::wherePayday(Date('y-m-d'))->leftJoin( 'customers','customers.uniq_id', '=', 'investissements.user_id')->paginate('10');

     
          //dd($paiement);
          return View('admin/partials/payement')->withPaiement($paiement);

    }


    public function profil($id){

         return View('admin/partials/profil');
    }


    public function connnect(){

         return View('admin/partials/connection');
    }


    public function home(){

         return View('admin/partials/home');
    }


    public function authentification(Request $request){


        dd($request->all());
    }
}

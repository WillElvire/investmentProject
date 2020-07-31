<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\customer;
use \App\Models\investissement;


class investissementController extends Controller
{
    

    public function store($id,Request $req){

              
              $verify=customer::whereUniq_id($id)->first();

              if($verify==null):

                return redirect('/invest/login');

              else:


                   dd(investissement::all());

                  
              endif;
    }


}

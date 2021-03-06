<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Torann\GeoIP\Facades\GeoIP;
use \App\Models\Customer;
use \App\Models\investissement;

class profilController extends Controller
{
    //

    public function index($id){

       // $ip=geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        $information=Customer::whereUniq_id($id)->first();
        
        return View('user/partials/account')->withInformation($information);

    }



    public function getInvest($id){

         $invest=investissement::whereUser_id($id)->paginate(5);

         return View('user/partials/historique')->withHistory($invest);


    }

    public function update(){



    }
}

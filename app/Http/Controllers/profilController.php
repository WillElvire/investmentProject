<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Torann\GeoIP\Facades\GeoIP;
use \App\Models\customer;

class profilController extends Controller
{
    //

    public function index($id){

        $ip=geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        $information=customer::whereUniq_id($id)->first();
       
        return View('user/partials/account')->withIp($ip)->withInformation($information);

    }

    public function update(){



    }
}

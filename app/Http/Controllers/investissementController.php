<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\customer;
use Carbon\Carbon;
use \App\Models\investissement;
use \Datetime;
use UxWeb\SweetAlert\SweetAlert;


class investissementController extends Controller
{
    

    public function store($id,Request $req){

              
              $verify=customer::whereUniq_id($id)->first();

              if($verify==null):

                return redirect('/invest/login');

              else:

                $payday=$this->getPayDay($req->pack,$req->duree);

               
               if(investissement::create([
                   "user_id"=>$id,
                   "pack"=>$req->pack,
                   "montant"=>$req->montant,
                   "received"=>$this->getMontant($req->pack,$req->duree,$req->montant,$req->personne),
                   "person"=>$req->personne,
                   "payday"=>$payday,
                   "duree"=>$req->duree
                ]) ):


                 alert()->success('success','success Message')->persistent("Close");
                  return redirect('invest/home/'.$id);


               else:

                   
                   return redirect()->back();


               endif;
               
                
        
                  
              endif;
    }


    public function getPayDay($pack,$duree){

        $payday=null;

        if($pack=="heure"):

             $payday=new Datetime("+$duree hours");
            
        else:
 
            if($pack=="association" || $pack=="day"):

                  $payday=new Datetime("+$duree days");

            endif;

        endif;

        return $payday;
    }



    public function getMontant($pack,$duree,$montant,$person=NULL){


      $received=null;

      if($pack=='day'):

          $received=$montant*2;

      endif;


      if($pack=="association"):

          if($person=="5"):

              $received=1000000;

          endif;

          if($person=="10"):


            $received=2000000;

          endif;

          if($person=="15"):

            $received=3000000;

          endif;

          if($person=="20"):

            $received=4000000;

          endif;

          if($person=="25"):

            $received=6000000;

          endif;

      endif;



      if($pack=="heure"){


          if($montant==300000 && $duree=="6"):

             
            $received=350000;


          endif;

          if($montant==300000 && $duree=="12"):

             
            $received=375000;


          endif;


          if($montant==300000 && $duree=="24"):

             
            $received=400000;


          endif;



          if($montant==500000 && $duree=="6"):

             
            $received=600000;


          endif;


          if($montant==500000 && $duree=="12"):

             
            $received=650000;


          endif;

          if($montant==500000 && $duree=="24"):

             
            $received=700000;


          endif;


          if($montant==800000 && $duree=="6"):

             
            $received=950000;


          endif;


          if($montant==800000 && $duree=="12"):

             
            $received=1000000;


          endif;

          if($montant==800000 && $duree=="24"):

             
            $received=1100000;


          endif;


          if($montant==1200000 && $duree=="6"):

             
            $received=1400000;


          endif;


          if($montant==1200000 && $duree=="12"):

             
            $received=1450000;


          endif;



          if($montant==1200000 && $duree=="24"):

             
            $received=1600000;


          endif;


          if($montant==1500000 && $duree=="6"):

             
            $received=1750000;


          endif;


          if($montant==1500000 && $duree=="12"):

             
            $received=1800000;


          endif;

          if($montant==1500000 && $duree=="24"):

             
            $received=2000000;


          endif;


          if($montant==2000000 && $duree=="6"):

             
            $received=2300000;


          endif;


          if($montant==2000000 && $duree=="12"):

             
            $received=2500000;


          endif;

          if($montant==2000000 && $duree=="24"):

             
            $received=2600000;


          endif;



      }


       return $received;
    }


}

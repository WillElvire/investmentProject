<?php

use Illuminate\Support\Facades\Route;
use \Torann\GeoIP\Facades\GeoIP;
use \App\Models\Investissement;
use \App\Models\Customer;
use Illuminate\Support\Facades\DB;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::match ([ 'get' , 'post' ], '/ botman' , 'BotManController@handle' );

Route::get('/ref/{id}',function($id){

    
        $information=Customer::whereUniq_id($id)->first();
    // $ip=geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return View('user/partials/referal')->withInfo($information);
   
});

Route::post('/ref/{id}','SignUpController@storeReferal');


Route::group(['prefix'=>'invest'],function(){



    



     Route::get('/parrainage/{id}',function($id){

         if(\Session::has('user_id')):

            $filleuls = DB::table('customers')->where('id_parrain',$id)->get();
            return View('user/partials/parrainage',compact('filleuls'));

         else:


            return redirect('/invest/login');


         endif;
     });

      Route::get('/home/{id}',function($id){
    
          if(\Session::has('user_id')):

                $invest=investissement::whereUser_id($id)->get();
                return View('user/partials/profil')->withInvest($invest);

          else:

            return redirect('/invest/login');


          endif;
      });




      Route::get('/calculator',function(){

        if(\Session::has('user_id')):

            return View('user/partials/calculator');

        else:

            return redirect('/invest/login');

        endif;

    });

    Route::get('/investment/{id}',function($id){

        if(\Session::has('user_id')):

            return View('user/partials/investissement');

        else:

            return redirect('/invest/login');

        endif;

    });



    Route::get('/account/{id}','profilController@index');



    Route::get('/login',function(){

       
        return View('user/partials/connection');

       

    })->name('login.path');



    Route::post('/login','authController@store');



    Route::get('/deconnection',function(){


        if(session()->has('user_id')):
            session()->forget('user_id');
            return redirect('/invest/login');
        else:

            return redirect('/invest/login');

        endif;
  
    });

    Route::post('/investment/{id}','investissementController@store');

    Route::get('/history/{id}','profilController@getInvest');


    Route::delete('/history/{id}',function($id){
       

        $delete=investissement::whereId($id)->delete();
        return redirect()->back();

     
    });



});

Route::get('/', function () {
    
    //dd(geoip()->getLocation('154.0.26.70'));
    return view('layout/home');
});



Route::get('/tableaux',function(){
    
     return View('layout/tableaux');
});

Route::get('/faq',function(){
    
     return View('layout/faq');
});


Route::get('/contact',function(){

    return View('layout/contact');

})->name('contact.path');




//route action
Route::group(['prefix'=>'action'],function(){

    Route::get('/inscription',function(){
         return View('layout/inscription');
    });

    Route::post('/inscription','inscriptionController@shop');
    Route::get('/validation',function(){
          return View('layout/validation');
    });


  

    // Route::get('/inscrits',function(){
    //      return View('admin/partials/inscrits');
    // });
    Route::get('/inscrits','inscritsController@show');


    //Inscritpion d'un inverstisseur
    Route::post('/signup','SignUpController@store')->name('store.customer.path');

    Route::post('/message','HomeController@storeMessage')->name('store.message');
    Route::get('/{token}/{authorization}','SignUpController@SignUpAuthorizeMembre')->name('sigup.membre.authorize');
    Route::post('/newletter','HomeController@newletter')->name('newletter.path');

    
});


// les routes post pour le select du multilinguage

Route::post('/',function(){
    if (isset($_POST['lang'])) {
        $locale = $_POST['lang'];

        session(['locale'=>$locale]);
        
        
        return back();
    }
});

Route::post('/tableaux',function()
{
    if (isset($_POST['lang'])) {
        $locale = $_POST['lang'];

        session(['locale'=>$locale]);
        
        
        return back();
    }
});

Route::post('/faq',function()
{
    if (isset($_POST['lang'])) {
        $locale = $_POST['lang'];

        session(['locale'=>$locale]);
        
        
        return back();
    }
});

Route::post('/contact',function()
{
    if (isset($_POST['lang'])) {
        $locale = $_POST['lang'];

        session(['locale'=>$locale]);
        
        
        return back();
    }
});



Route::group(['prefix'=>'admin'],function(){



    Route::get('/home',function(){

        if(\Session::has('verify')):

                $inscrit=Customer::all();
                $paiement=Investissement::wherePayday(date('Y-m-d'))->get();

             return View('admin/partials/home')->withPaiement($paiement)->withTotal($inscrit);
        else:

            return redirect('admin/connection');
        endif;
    });

    Route::get('/recherche',function(){

        return View('admin/partials/recherche');

    });

    Route::post('/recherche','adminController@search');

    Route::get('/inscrits','adminController@inscrits'

    );

    Route::delete('/delete/{id}','adminController@delete');

    Route::post('/connection','adminController@authentification');

    Route::get('/connection',function(){
         
         return View('admin/partials/connection');
    });

    Route::get('/payement','adminController@paiement');

    Route::get('/profil/{id}','adminController@profil');

    Route::delete('/inscrits','adminController@delete');


    Route::get('/deconnection',function(){

          if(\Session::has('verify')):

             \Session::forget('verify');

             return redirect('admin/connection');

          else:

             return redirect('admin/connection');
             

          endif;
    });


    Route::get('/',function(){
        return redirect('admin/connection');
    });



    




});
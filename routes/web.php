<?php

use Illuminate\Support\Facades\Route;
use \Torann\GeoIP\Facades\GeoIP;
use \App\Models\investissement;
use \App\Models\customer;

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



Route::get('/ref/{id}',function($id){


    $information=Customer::whereUniq_id($id)->first();
    return View('user/partials/referal')->withInfo($information);

});



Route::group(['prefix'=>'invest'],function(){



    



     Route::get('/parrainage/{id}',function($id){

          return View('user/partials/parrainage');
     });



      Route::get('/home/{id}',function($id){
    
          $invest=investissement::whereUser_id($id)->get();
          return View('user/partials/profil')->withInvest($invest);
      });




      Route::get('/calculator',function(){

        return View('user/partials/calculator');

    });

    Route::get('/investment/{id}',function($id){

        return View('user/partials/investissement');

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
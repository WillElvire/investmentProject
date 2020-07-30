<?php

use Illuminate\Support\Facades\Route;
use \Torann\GeoIP\Facades\GeoIP;

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

Route::get('/{locale}', function ($locale) {
    App::setlocale($locale);
    session(['locale'=>$locale]);
    //dd(geoip()->getLocation('154.0.26.70'));
    return view('layout/home');
}); 

Route::post('/','inscriptionController@shop');

Route::get('/tableaux',function(){
     return View('layout/tableaux');
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



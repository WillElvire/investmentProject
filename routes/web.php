<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layout/home');
}); 

Route::post('/','inscriptionController@shop');

Route::get('/tableaux',function(){
     return View('layout/tableaux');
});

Route::get('/contact',function(){


    return View('layout/contact');

});


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
    
});

//route user
Route::group(['prefix'=>"user"],function(){

    Route::get('/connection',function(){
         return View('user/partials/connection');
    });
    Route::post('/connection','authentificationController@register');

    Route::get('/home/{id}','profilController@index');


    Route::get('/historique/{id}','historiqueController@index');
      Route::get('/investissement/{id}',function($id){

            if(session('id')==$id):

                return view('user/partials/investissement');
            else:

                return redirect('/user/connection');

            endif;

            
      });

      Route::post('/investissement/{id}','investissementController@register');

      Route::get('/deconnection',function(){

        if(\Session::has('id')):

           \Session::forget('id');

            return redirect('/user/connection');

         

            

        else:

             return redirect('/user/connection');

        endif;

      });
      Route::delete('/historique/{id}','investissementController@delete');
      

      Route::post('/home/{id}','profilController@redirect');
});


//route admin

Route::group(['prefix'=>'admin'],function(){

     

  Route::get('/home','adminController@admin');

  Route::post('/connection','adminController@register');

  Route::get('/connection',function(){

      return view('admin/partials/connection');
  });

  Route::post('/home','adminController@modify');

  Route::get('/confirm/{id}','adminController@confirm');

  Route::delete('/demande/{id}','adminController@delete');

  Route::post('/recherche/','adminController@seacher');

  Route::get('/demande/','adminController@demande');

  Route::get('/paiement/','adminController@payement');

  Route::get('/inscrits/','adminController@inscription');

 

  Route::get('/recherche/','adminController@search');



  Route::get('/profil/{id}','adminController@profil');


});
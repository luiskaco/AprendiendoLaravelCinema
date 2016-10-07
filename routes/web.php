<?php

use Cinema\Mail\Welcome AS WelcomeEmail;
use Illuminate\Support\Facades\Mail;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|



/** Ruta de vista Vista y controlador  */

   Route::get('/','FrontController@index');
   Route::get('contacto','FrontController@contacto');
   Route::get('reviews','FrontController@reviews');
   Route::get('admin','FrontController@admin');
   
   /*Ruta para el controlador Usuario*/
   Route::resource('usuario','UsuarioController');
   /*Ruta para el controlador Login*/
   Route::resource('log','LogController');
   /*Ruta para el controlador Genero*/
   Route::resource('genero','GeneroController');
   Route::get('generos','GeneroController@listing');
   /*Ruta para mail*/
  Route::resource('mail','MailController');

   /*Ruta para el controlador movie*/
  Route::resource('movie','MovieController');

   /**Ruta para desloquear*/
   Route::get('logout','LogController@logout');
 
  /*Ruta para recuperar contraseña */
 /* Route::get('password/email','Auth\PasswordController@getEmail');
  Route::post('password/email','Auth\PasswordController@postEmail');
*/

/** Rutas */
Route::get('prueba/', function () {
    return "Mensaje de prueba php";
});

Route::get('nombre/{nombre}', function ($nombre) {
    return "Mi nombre es :".$nombre;
});
/** @var por default [description] */
Route::get('nombre1/{nombre?}', function ($nombre = 'luis2') {
    return "Mi nombre es :".$nombre;
});


/*Ruta Prueba*/

Route::get('welcome', function(){
      Mail::to('luis@example.com','Probando')
       ->send(new WelcomeEmail());

});


/** ruta controlador  */
Route::get('controlador','PruebaController@index');
Route::get('name/{nombre}','PruebaController@nombre');

/** controlador Resourse */

/*
Route::get('/', function () {
    return view('welcome');
});
*/



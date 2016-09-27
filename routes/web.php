<?php

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
   
   /**Ruta para desloquear*/
   Route::get('logout','LogController@logout');
    
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



/** ruta controlador  */
Route::get('controlador','PruebaController@index');
Route::get('name/{nombre}','PruebaController@nombre');

/** controlador Resourse */

/*
Route::get('/', function () {
    return view('welcome');
});
*/



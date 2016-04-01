<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//admin

Route::get('/banner','controller_inicio@banner');

Route::get('usuario','controller_inicio@store');

Route::resource('categoria', 'controller_categoria');
//Route::resource('subcategoria', 'controller_subcategoria');
Route::resource('atributo', 'controller_atributo');
Route::resource('producto', 'controller_producto');
Route::resource('imagenes_banner', 'controller_imagenes_banner');

// vistas
Route::resource('/','controller_vista');
Route::get('productos/{id}',['as'=>'productos.id','uses'=>'controller_prod_detalle@index']);

//Route::get('producto/{id}', function(){
//     return 'user'.$id;
//});






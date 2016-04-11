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
Route::resource('campos', 'controller_campos');
Route::resource('producto_campos', 'controller_productos_campos');
Route::resource('imagenes_banner', 'controller_imagenes_banner');

// vistas
Route::resource('/','controller_vista');
Route::post('producto/destroy_attr/{id}',['as'=>'producto.destroy_attr','uses'=>'controller_producto@destroy_attr']);

Route::get('productos/{id}',['as'=>'prodsuctos.id','uses'=>'controller_prod_detalle@index']);
Route::resource('empresa','controller_empresa');
Route::get('contacto','controller_empresa@contacto');

//Route::get('producto/{id}', function(){
//     return 'user'.$id;
//});


//Route::get('/busca', function(){
//     return view('buscador');
////     return View::make('buscador');
//});
Route::resource('queries', 'controller_busca');

Route::resource('comparar','controller_comparar');
//Route::get('/compare', function () {
//    return'ok';
//});


//Route::post('/busca/buscador', ['uses'=>'controller_busca@buscar' ]);

//Route::post('/',function(){
//     $keyword = Input::get('keyword');
//     $products = \App\model_producto::where('nombre_producto', 'LIKE' ,'%'.$keyword.'%')->get();
//
//     var_dump('search results');
//
//     foreach($products as $product){
//          dd($product->nombre_producto);
//     }
//});






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

 Route::get('/wave', function () {
     return view('wave_new');
 });
 Route::get('/troy_s', function () {
     return view('troy_s');
 });

Route::get('/next', function () {
    return view('next');
});
 Route::get('/next_lite', function () {
     return view('next_lite');
 });
Route::get('/play', function () {
    return view('play');
});

Route::get('/onenanoHD360', function () {
    return view('one_nano_360');
});
 Route::get('/next_lite_360', function () {
     return view('next_Lite_360');
 });

Route::get('/onenanoHD', function () {
    return view('one_nano');
});
//Route::get('/next', function () {
//    return view('next_producto');
//});
//
//
//Route::get('/play', function () {
//    return view('play_producto');
//});

//admin

Route::get('/banner','controller_inicio@banner');

Route::group(['middlewares' => ['auth']], function(){
    Route::resource('usuario','create_user_controller');
    Route::resource('categoria', 'controller_categoria');
//Route::resource('subcategoria', 'controller_subcategoria');
    Route::resource('atributo', 'controller_atributo');
    Route::resource('producto', 'controller_producto');
    Route::resource('campos', 'controller_campos');
    Route::resource('producto_campos', 'controller_productos_campos');
    Route::resource('banner_chico', 'controller_imagenes_chico');
    Route::resource('imagenes_banner', 'controller_imagenes_banner');
    Route::resource('adm_descargas', 'controller_adm_descargas', ['only' => ['index', 'store', 'update']]);
    Route::resource('adm_descargas.archivos','controller_descargas_archivos');
});

Route::resource('log', 'LogController');
Route::resource('logout', 'LogController@logout');

// vistas
Route::resource('/','controller_vista');
Route::post('producto/destroy_attr/{id}',['as'=>'producto.destroy_attr','uses'=>'controller_producto@destroy_attr']);
Route::PUT('producto/update_descrip/{id}',['as'=>'producto.update_descrip','uses'=>'controller_producto@update_descrip']);

// Descargas
Route::group(['prefix' => 'descargas'], function() {
    Route::get('/', ['as' => 'descargas.index', 'uses' => 'controller_descargas@index']);
    Route::get('modelo/{modeloId}', ['as' => 'descargas.modelo', 'uses' => 'controller_descargas@modelo']);
    Route::get('{descargaId}', ['as' => 'descargas.show', 'uses' => 'controller_descargas@show']);
});

Route::get('productos/{id}',['as'=>'prodsuctos.id','uses'=>'controller_prod_detalle@index']);
Route::get('empresa', ['as' => 'empresa', 'uses' => 'controller_empresa@index']);
Route::get('contacto', ['as' => 'contacto', 'uses' => 'controller_empresa@contacto']);

//Route::get('producto/{id}', function(){
//     return 'user'.$id;
//});


//Route::get('/busca', function(){
//     return view('buscador');
////     return View::make('buscador');
//});
Route::resource('queries', 'controller_busca');
Route::resource('todos_os_produtos', 'controller_all_product');

Route::resource('comparar','controller_comparar');
Route::resource('link','controller_link_youtube');
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






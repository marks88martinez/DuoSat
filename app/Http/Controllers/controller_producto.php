<?php

namespace App\Http\Controllers;

use App\model_imagenes;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\model_producto;
use App\model_subcategoria;
use App\model_atributo;
use App\model_producto_atributo;
use Illuminate\Support\Facades\Redirect;
use Image;

class controller_producto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        $producto = model_producto::join('sub_categorias','codigo_sub_categorias','=','codigo_sub_cat')
//            ->join('imagenes','imagenes.codigo_producto','=','productos.codigo_producto')
//            ->join('atributos','atributos.codigo_atributo','=','productos.codigo_atributo')
//            ->join('producto_atributo','producto_atributo.codigo_producto','=','productos.codigo_producto')
//        ->select('producto_atributo.descripcion as attr_descrip','atributos.nombre_atributo as nombreattr','sub_categorias.nombre as nombresub','productos.codigo_producto','productos.nombre_producto','productos.descripcion','imagenes.url_imagenes as imagenes','imagenes.codigo_producto')
//
//        ->get();



        $producto = model_producto::with('subcategoria','producto_atributos.prodattr_attr','imagenes')
        ->get();

//        dd($producto);





//        **********************************
        $subcat = model_subcategoria::all();
        $subcategoria = array();

        foreach($subcat as $subcats){
            $subcategoria[$subcats->codigo_sub_categorias]= $subcats->nombre;
        }
//      ************************************
        $atributo = model_atributo::all();
        $attr = array();
        foreach($atributo as $atributos){
            $attr[$atributos->codigo_atributo]=$atributos->nombre_atributo;
        }
 //      ************************************
        $producto_producto = model_producto_atributo::all();





        return view('admin.producto',compact('subcategoria', 'attr', 'producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());



        $nombre_imagen = time().'.png';
        $imagen_final = 'admin/img/productos/'.$nombre_imagen;
        $int_imagen= Image::make($request->file('url_imagen'));
        $int_imagen->resize(600, null, function($constraint){
            $constraint->aspectRatio();
        });
        $int_imagen->save($imagen_final);


        $producto = model_producto::create([
            'nombre_producto'=>$request['nombre_producto'],
            'descripcion'=>$request['descripcion'],
            'codigo_sub_cat'=>$request['codigo_sub_cat'],


            'estado'=>1,
        ]);

        model_imagenes::create([
            'url_imagenes'=>$imagen_final,
            'codigo_producto'=>$producto->codigo_producto,
        ]);



        foreach($request->codigo_atributo as $index=>$code_attr){
            model_producto_atributo::create([
                'descripcion'=>$request->descrip_atributos[$index],
                'codigo_atributo'=>$code_attr,
                'codigo_producto'=>$producto->codigo_producto,
            ]);

        }








        return Redirect::to('producto');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

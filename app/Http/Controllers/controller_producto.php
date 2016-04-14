<?php

namespace App\Http\Controllers;

use App\model_imagenes;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\model_producto;
use App\model_subcategoria;
use App\model_atributo;
use App\model_producto_atributo;
use Illuminate\Support\Facades\Redirect;
use Image;
use App\model_categoria;
use Intervention\Image\Exception\NotReadableException;
use Session;

class controller_producto extends Controller
{
    public  function imagen($img)
    {

        $nombre_imagen = time() . '.png';
        $imagen_final = 'admin/img/productos/' . $nombre_imagen;
        $int_imagen = Image::make($img);
        $int_imagen->resize(600, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $int_imagen->save($imagen_final);

        return $imagen_final;

    }

    public function add_attr($request, $producto){


        foreach($request->codigo_atributo as $index=>$code_attr){
            model_producto_atributo::create([
                'descripcion'=>$request->descrip_atributos[$index],
                'codigo_atributo'=>$code_attr,
                'codigo_producto'=>$producto->codigo_producto,
            ]);

        }
    }

    public function index()
    {

//        $producto = model_producto::join('sub_categorias','codigo_sub_categorias','=','codigo_sub_cat')
//            ->join('imagenes','imagenes.codigo_producto','=','productos.codigo_producto')
//            ->join('atributos','atributos.codigo_atributo','=','productos.codigo_atributo')
//            ->join('producto_atributo','producto_atributo.codigo_producto','=','productos.codigo_producto')
//        ->select('producto_atributo.descripcion as attr_descrip','atributos.nombre_atributo as nombreattr','sub_categorias.nombre as nombresub','productos.codigo_producto','productos.nombre_producto','productos.descripcion','imagenes.url_imagenes as imagenes','imagenes.codigo_producto')
//
//        ->get();



        $producto = model_producto::with('producto_campos','categoria','producto_atributos.prodattr_attr','imagenes')

         ->where('estado','=',1)
         ->get();

//        dd($producto);





//        **********************************
        $categoria = model_categoria::select('codigo_categoria','nombre','descripcion','url_icon','estado')
            ->where('estado','=',1)
            ->get();
        $cat = array();

        foreach($categoria as $categorias){
            $cat[$categorias->codigo_categoria]= $categorias->nombre;
        }

//      ************************************
        $atributo = model_atributo::select('codigo_atributo','nombre_atributo','estado')
            ->where('estado','=',1)
            ->get();
        $attr = array();
        foreach($atributo as $atributos){
            $attr[$atributos->codigo_atributo]=$atributos->nombre_atributo;
        }
 //      ************************************
        $producto_producto = model_producto_atributo::all();





        return view('admin.producto',compact('cat', 'attr', 'producto'));
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





//        $nombre_imagen = time().'.png';
//        $imagen_final = 'admin/img/productos/'.$nombre_imagen;
//        $int_imagen= Image::make($request->file('url_imagen'));
//        $int_imagen->resize(600, null, function($constraint){
//            $constraint->aspectRatio();
//        });
//        $int_imagen->save($imagen_final);


        $producto = model_producto::create([
            'nombre_producto'=>$request['nombre_producto'],
            'descripcion'=>$request['descripcion'],
            'codigo_categoria'=>$request['codigo_categoria'],


            'estado'=>1,
        ]);


        try{

           $image = $this->imagen($request->file(('url_imagen')));
        }catch (NotReadableException $e){
            $image = 'admin/img/vacio.jpg';


        }
        model_imagenes::create([
            'url_imagenes'=> $image,
            'codigo_producto'=>$producto->codigo_producto,
        ]);

        $this->add_attr($request, $producto);










        Session::flash('message','Creado exitosamente');
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
        $producto = model_producto::with('producto_campos','categoria','producto_atributos.prodattr_attr','imagenes')
         ->find($id);
//        dd();

        $cat = model_categoria::select('codigo_categoria','nombre')
            ->where('estado','=',1)
            ->get();
       $categoria = array();
        foreach($cat as $cats){
            $categoria[$cats->codigo_categoria]= $cats->nombre;

        }



//        **********************************************************
//        dd($producto);

        $atributo = model_atributo::select('codigo_atributo','nombre_atributo','estado')
            ->where('estado','=',1)
            ->get();
        $attr = array();
        foreach($atributo as $atributos){
            $attr[$atributos->codigo_atributo]=$atributos->nombre_atributo;
        }




        return view('editar.edit_producto', compact('producto','categoria','attr'));
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

//        dd($request);


        $productos = model_producto::find($id);
//        dd($productos);
        $productos->fill($request->only(['nombre_producto','descripcion','codigo_categoria']));
        $productos->save();

        try{
            $imagen = $this->imagen($request->file(('url_imagen')));
            try{
                $imag = model_imagenes::where('codigo_producto','=',$id)->firstOrFail();
                $imag->url_imagenes = $imagen;
                $imag->save();

            }catch(ModelNotFoundException $e){
                model_imagenes::create([
                    'url_imagenes'=>$imagen,
                    'codigo_producto'=>$id
                ]);
            }

        }catch (NotReadableException $e){

        }

        if($request->has('codigo_atributo')){
            $this->add_attr($request , $productos);
        }











        Session::flash('message','Actulizado correctamente');
        return Redirect::to('/producto');

    }

    public function update_descrip(Request $request, $id)
    {
//        dd($request);
        $descr = model_producto_atributo::find($id);

        $descr->fill($request->all());
        $descr->save();
        Session::flash('message','Actulizado correctamente');
        return redirect()->back()->with('message','actulizado correctamente');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        model_producto::where('codigo_producto','=',$id)->update(array('estado'=>2));



        Session::flash('message','Eliminado exitosamente');
        return Redirect::to('/producto');
    }
    public function destroy_attr($id)
    {
        $destroy = model_producto_atributo::find($id);
        $destroy->delete();




        return redirect()->back()->with('message','Eliminado exitosamente');
    }
}

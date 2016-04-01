<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\model_categoria;
use Illuminate\Support\Facades\Redirect;
use Image;




class controller_categoria extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */





    public function index()
    {
      $categoria = model_categoria::select('codigo_categoria','nombre','descripcion','url_icon','estado')
          ->where('estado','=',1)
          ->get();



        return view('admin.categoria', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $nombre_imagen = time().'.png';
        $imagen_final = 'admin/img/icon/'.$nombre_imagen;
        $int_imagen= Image::make($request->file('url_imagen'));
        $int_imagen->resize(250, null, function($constraint){
            $constraint->aspectRatio();
        });
        $int_imagen->save($imagen_final);
//        Storage::disk('s3')->getDriver()->put($imagen_final, $int_imagen->encode('jpg', 75), ['visibility' => 'public', 'CacheControl' => 'public, max-age=600000']);





        model_categoria::create([
            'nombre'=>$request['nombre'],
            'descripcion'=>$request['descripcion'],
            'url_icon'=>$imagen_final,
            'estado'=>1

        ]);
//        dd($request );

        return Redirect::to('/categoria');


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

        model_categoria::where('codigo_categoria','=',$id)->update(array('estado'=>2));


       return Redirect::to('/categoria');
    }
}

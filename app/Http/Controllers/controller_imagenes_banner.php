<?php

namespace App\Http\Controllers;

use App\model_imagenes_banner;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Image;
use Session;

class controller_imagenes_banner extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public  function imagen($img){

        $nombre_imagen = time().'.png';
        $imagen_final = 'admin/img/img_banner/'.$nombre_imagen;
        $int_imagen= Image::make($img);
        $int_imagen->resize(2500, null, function($constraint){
            $constraint->aspectRatio();
        });
        $int_imagen->save($imagen_final);

        return $imagen_final;
    }
    public function index()
    {
        $banner = model_imagenes_banner::all();

       return view('admin.imagenes_banner', compact('banner'));
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




        model_imagenes_banner::create([
            'nombre_banner'=>$request['nombre_banner'],
            'url_banner'=>$this->imagen($request->file('url_banner'))
        ]);
        Session::flash('message','Creado exitosamente');
        return Redirect::to('imagenes_banner');
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
        $banner = model_imagenes_banner::find($id);

        return view('editar.edit_imagenes_banner', ['banner'=>$banner]);
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

        $banner = model_imagenes_banner::find($id);
        $banner->fill($request->all());
        $banner->url_banner = $this->imagen($request->file('url_banner'));
        $banner->save();
        Session::flash('message','Actulizado exitosamente');
        return Redirect::to('imagenes_banner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $ver = model_imagenes_banner::find($id);
        $ver->delete();
        Session::flash('message','Eliminado exitosamente');
        return Redirect::to('imagenes_banner');
    }
}

<?php

namespace App\Http\Controllers;

use App\model_imagenes_banner;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Image;

class controller_imagenes_banner extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
//        dd($request);

        $nombre_imagen = time().'.png';
        $imagen_final = 'admin/img/img_banner/'.$nombre_imagen;
        $int_imagen= Image::make($request->file('url_banner'));
        $int_imagen->resize(2500, null, function($constraint){
            $constraint->aspectRatio();
        });
        $int_imagen->save($imagen_final);

        model_imagenes_banner::create([
            'nombre_banner'=>$request['nombre_banner'],
            'url_banner'=>$imagen_final
        ]);

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

        $ver = model_imagenes_banner::find($id);
        $ver->delete();

        return Redirect::to('imagenes_banner');
    }
}

<?php

namespace App\Http\Controllers;

use App\model_imagenes_chico;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Exception\NotReadableException;

class controller_imagenes_chico extends Controller
{
    public function  __construct(){
        $this->middleware('auth');
    }
    public  function imagen($img)
    {

        $nombre_imagen = time() . '.png';
        $imagen_final = 'admin/img/productos/' . $nombre_imagen;
        $int_imagen = Image::make($img);
        $int_imagen->resize(400, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $int_imagen->save($imagen_final);

        return $imagen_final;

    }

    public function index()
    {
        $banner_chico = model_imagenes_chico::all();
        return view('admin.imagenes_banner_chico',compact('banner_chico'));
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
        $chico = model_imagenes_chico::get()->count();
        if($chico < 3){
            try{
                $image = $this->imagen($request->file(('url_imagen')));
            }catch (NotReadableException $e){
                $image = 'admin/img/vacio.jpg';
            }
            model_imagenes_chico::create([
                'nombre'=>$request['nombre'],
                'url_banner'=> $image,
                'link'=>$request['nombre'],
                'texto' => $request['texto'],
                'style_font_size' => $request['style_font_size'],
            ]);
            Session::flash('message','exitosamente ');
            return Redirect::to('banner_chico');
        }else{
            Session::flash('message-error','El numero limite de banner es '.$chico);
            return Redirect::to('banner_chico');

        }
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
       $b_chico = model_imagenes_chico::find($id);

        return view('editar.edit_imagenes_banner_chico', compact('b_chico'));
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
      $chico = model_imagenes_chico::find($id);
        $chico->fill($request->only('nombre','link', 'texto', 'style_font_size'));
        $chico->save();

        try{
            $imagen = $this->imagen($request->file(('url_imagen')));
            try{
                $imag = model_imagenes_chico::findOrFail($id);
                $imag->url_banner = $imagen;
                $imag->save();

            }catch(ModelNotFoundException $e){
                model_imagenes_chico::create([
                    'url_imagen'=>$imagen
                ]);
            }

        }catch (NotReadableException $e){
            // Mostrar error, no existe imagen
        }
        Session::flash('message','Actulizado correctamente');
        return Redirect::to('banner_chico');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $eliminar = model_imagenes_chico::find($id);
        $eliminar->delete();
        Session::flash('message','Eliminado corectamente');
        return Redirect::to('banner_chico');
    }
}

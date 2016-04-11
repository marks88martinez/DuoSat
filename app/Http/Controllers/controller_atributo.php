<?php

namespace App\Http\Controllers;

use App\model_atributo;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Session;

class controller_atributo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attr =model_atributo::select('codigo_atributo','nombre_atributo','estado')
            ->where('estado','=',1)
            ->get();
       return view('admin.atributo', compact('attr'));
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
        model_atributo::create([
            'nombre_atributo'=>$request['nombre_atributo'],
             'estado'=>1

        ]);
        Session::flash('message','Creado exitosamente');
        return Redirect::to('atributo');
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

        $atributo = model_atributo::find($id);
        return view('editar.edit_atributo',['atributo'=>$atributo]);
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
        $atributo = model_atributo::find($id);

        $atributo->fill($request->all());
        $atributo->save();


        Session::flash('message','Actulizar exitosamente');
        return Redirect::to('atributo');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        model_atributo::where('codigo_atributo','=',$id)->update(array('estado'=>2));
        Session::flash('message','Eliminado exitosamente');
        return Redirect::to('atributo');
    }
}

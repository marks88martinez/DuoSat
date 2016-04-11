<?php

namespace App\Http\Controllers;

use App\model_campos;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class controller_campos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campos = model_campos::select('codigo_campo','nombre','estado')
            ->where('estado','=',1)
            ->get();

       return view('admin.campos',compact('campos'));
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
       model_campos::create([
           'nombre'=>$request['nombre'],
           'estado'=>1
       ]);
        Session::flash('message','Creado exitosamente');
        return Redirect::to('/campos');
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
       $campos = model_campos::find($id);
        return view('editar.edit_campos', compact('campos'));
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
        $campos = model_campos::find($id);
        $campos->fill($request->all());
        $campos->save();
        return Redirect::to('campos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {



        model_campos::where('codigo_campo','=',$id)->update(array('estado'=>2));

        Session::flash('message','Eliminado exitosamente');
        return Redirect::to('campos');

    }
}

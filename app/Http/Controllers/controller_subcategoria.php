<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\model_categoria;
use App\model_subcategoria;
use Illuminate\Support\Facades\Redirect;

class controller_subcategoria extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_cat = model_subcategoria::join('categorias','categorias.codigo_categoria','=','sub_categorias.codigo_categoria')
        ->select('categorias.nombre as catnombre','sub_categorias.nombre','sub_categorias.descripcion', 'sub_categorias.codigo_sub_categorias')
        ->get();


        $categoria = model_categoria::all();

        $cat = array();
         foreach($categoria as $categorias){
             $cat[$categorias->codigo_categoria] = $categorias->nombre;
         }



        return view('admin.subcategoria', ['cat'=>$cat, 'sub_cat'=>$sub_cat]);
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

        model_subcategoria::create([
            'codigo_categoria'=>$request['categoria'],
            'nombre'=>$request['nombre'],
            'descripcion'=>$request['descripcion']



        ]);
        return Redirect::to('/subcategoria');



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

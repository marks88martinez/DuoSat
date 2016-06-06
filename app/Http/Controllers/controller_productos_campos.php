<?php

namespace App\Http\Controllers;

use App\model_campos;
use App\model_producto;
use App\model_producto_campos;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Session;

class controller_productos_campos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $campos = model_producto_campos::with('campo','producto_campo')

            ->orderBy('codigo_producto','desc')
            ->get();










        $producto = model_producto::select('codigo_producto','nombre_producto','estado', 'estado_doble')
            ->where('estado_doble','=',1)
            ->where('estado','=',1)

        ->get();
        $prod = array();
        foreach($producto as $productos){
            $prod[$productos->codigo_producto]=$productos->nombre_producto;

        }


        $campo = model_campos::select('codigo_campo','nombre')
            ->get();

        $list = array();

        foreach($campo as $new_campo){
            $list[$new_campo->codigo_campo]=$new_campo->nombre ;
        }





        return view('admin.producto_campos',compact('prod','list','campo','campos'));
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
//        dd($request->all());

       foreach ($request->checker as $index=>$campo ) {

           $checkeado = 0;

           if($request->has('chec')){
               $checkeado = (int)in_array($campo, $request->chec);

           }






            model_producto_campos::create([
                'codigo_campo'=>$campo,
                'codigo_producto'=>$request->producto,
                'descripcion'=>$request->descripcion[$index],
                'cheked'=>$checkeado

            ]);
        }

       return redirect()->back()->with(['message'=>'Creado exitosamente']);




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
        $eliminar = model_producto_campos::find($id);
         $eliminar->delete();


        return redirect()->back()->with(['message'=>'Eliminado exitosamente']);
    }
}

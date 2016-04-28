<?php

namespace App\Http\Controllers;

use App\model_descargas;
use App\model_producto;
use App\model_producto_descarga;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class controller_adm_descargas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descargas = model_descargas::select('codigo_descarga', 'titulo', 'estado')
            ->with(['productos' => function($q) {
                $q->select('codigo_producto', 'codigo_descarga');
            }, 'productos.producto' => function($q) {
                $q->select('codigo_producto', 'nombre_producto');
            }])
            ->get();
        $productos = model_producto::where('estado', '=', 1)
            ->select('codigo_producto', 'nombre_producto')
            ->get();
        return view('admin.descargas', compact('descargas', 'productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $descarga = model_descargas::create([
            'titulo' => $request->titulo
        ]);
        $this->createProductoDescarga($request, $descarga->codigo_descarga);
        return redirect()->back()->with(['message' => 'Descarga creada exitosamente']);
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
        try {
            $descarga = model_descargas::findOrFail($id);
            $descarga->titulo = $request->titulo;
            $descarga->estado = $request->has('estado') ? 1 : 0;
            $descarga->save();

            model_producto_descarga::where('codigo_descarga', '=', $id)->delete();
            $this->createProductoDescarga($request, $id);
        } catch(ModelNotFoundException $e) {
            return redirect()->back()->with(['message' => 'Código no encontrado']);
        }
        return redirect()->back()->with(['message' => 'Descarga actualizada con suceso']);
    }

    private function createProductoDescarga(Request $request, $idDescarga)
    {
        if($request->has('codigos_productos')) {
            foreach($request->codigos_productos as $codigo_producto) {
                model_producto_descarga::create([
                    'codigo_producto' => $codigo_producto,
                    'codigo_descarga' => $idDescarga
                ]);
            }
            return true;
        }
        return false;
    }
}

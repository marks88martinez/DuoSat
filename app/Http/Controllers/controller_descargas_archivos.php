<?php

namespace App\Http\Controllers;

use App\model_archivo_descarga;
use App\model_descargas;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class controller_descargas_archivos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($descargaId)
    {
        $archivos = model_archivo_descarga::where('codigo_descarga', '=', $descargaId)
            ->select('codigo_archivo_descarga', 'titulo', 'descripcion', 'version', 'size', 'link', 'estado', 'codigo_descarga')
            ->get();
        return view('admin.descargas_archivos', compact('descargaId', 'archivos'));
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
    public function store(Request $request, $descargaId)
    {
        $archivo_descarga = model_archivo_descarga::create($request->all());
        return redirect()->back()->with(['message' => 'Archivo guardado con exito']);
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
    public function update(Request $request, $descargaId, $id)
    {
        try {
            $archivo_descarga = model_archivo_descarga::findOrFail($id);
            $archivo_descarga->fill($request->all());
            $archivo_descarga->estado = $request->has('estado') ? 1 : 0;
            $archivo_descarga->save();
        } catch(ModelNotFoundException $e) {
            return redirect()->back()->with(['message' => 'Código no encontrado']);
        }
        return redirect()->back()->with(['message' => 'Archivo actualizado con exito']);
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

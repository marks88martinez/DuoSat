<?php

namespace App\Http\Controllers;

use App\model_descargas;
use App\model_producto;
use App\model_producto_descarga;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class controller_descargas extends Controller
{

    public function index()
    {
        $productos = model_producto::where('estado', '=', 1)
            ->with(['descargas' => function($q) {
                $q->select('codigo_descarga','codigo_producto')
                    ->whereHas('descarga', function($q) {
                        $q->activo();
                    });
            }, 'imagenes' => function($q) {
                $q->select('codigo_producto','url_imagenes');
            }])
            ->select('codigo_producto', 'nombre_producto')
            ->where('estado_doble','=',1)
            ->where('estado', '=', 1)
            ->get();
        return view('descargas', compact('productos'));
    }

    public function modelo($modeloId)
    {
        try {
            $producto = model_producto::select('codigo_producto', 'nombre_producto')
                ->with(['imagenes' => function($q) {
                    $q->select('codigo_producto', 'url_imagenes');
                }, 'descargas' => function($q) {
                    $q->select('codigo_producto', 'codigo_descarga');
                }, 'descargas.descarga' => function($q) {
                    $q->select('codigo_descarga', 'titulo')->activo();
                }, 'descargas.descarga.archivos' => function($q) {
                    $q->select('titulo', 'descripcion', 'version', 'size', 'link', 'estado', 'codigo_descarga', 'updated_at')->activo()->orderBy('updated_at', 'DESC');
                }])
                ->findOrFail($modeloId);
        } catch(ModelNotFoundException $e) {
            abort(404);
        }
        return view('descarga_modelo', compact('producto'));
    }

    public function show($descargaId)
    {
        //
    }

}

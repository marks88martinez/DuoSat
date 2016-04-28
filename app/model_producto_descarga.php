<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_producto_descarga extends Model
{
    protected $table = 'productos_descargas';
    protected $primaryKey = 'codigo_productos_descargas';
    protected $fillable = ['codigo_descarga','codigo_producto'];
    public  $timestamps = true;

    public function producto()
    {
        return $this->belongsTo('App\model_producto', 'codigo_producto', 'codigo_producto');
    }

    public function descarga()
    {
        return $this->belongsTo('App\model_descargas', 'codigo_descarga', 'codigo_descarga');
    }
}

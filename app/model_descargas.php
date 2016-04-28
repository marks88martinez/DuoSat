<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class model_descargas extends Model
{
    protected $table = 'descargas';
    protected $primaryKey = 'codigo_descarga';
    protected $fillable = ['titulo','estado'];
    public  $timestamps = true;

    public function scopeActivo($q)
    {
        return $q->where('estado', '=', 1);
    }

    public function archivos()
    {
        return $this->hasMany('App\model_archivo_descarga', 'codigo_descarga', 'codigo_descarga');
    }

    public function productos()
    {
        return $this->hasMany('App\model_producto_descarga', 'codigo_descarga', 'codigo_descarga');
    }

}

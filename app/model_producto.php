<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'codigo_producto';
    protected $fillable = ['nombre_producto','descripcion','codigo_categoria','codigo_atributo','codigo_imagen', 'estado','descontinuado'];
    public $timestamps = false;


    public function imagenes(){

        return $this->hasOne('App\model_imagenes','codigo_producto', 'codigo_producto');
    }

    public function producto_atributos(){
        return $this->hasMany('App\model_producto_atributo','codigo_producto', 'codigo_producto');
    }

    public function categoria(){
        return $this->belongsTo('App\model_categoria','codigo_categoria','codigo_categoria');

    }
    public function producto_campos(){
        return $this->hasMany('App\model_producto_campos','codigo_producto','codigo_producto');

    }
    public function getDescontinuadoAttribute(){
        return $this->attributes['descontinuado'] == 1 ;

    }


}

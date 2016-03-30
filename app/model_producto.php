<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'codigo_producto';
    protected $fillable = ['nombre_producto','descripcion','codigo_sub_cat','codigo_atributo','codigo_imagen', 'estado'];
    public $timestamps = false;


    public function imagenes(){

        return $this->hasOne('App\model_imagenes','codigo_producto', 'codigo_producto');
    }

    public function producto_atributos(){
        return $this->hasMany('App\model_producto_atributo','codigo_producto', 'codigo_producto');
    }

    public function subcategoria(){
        return $this->belongsTo('App\model_subcategoria','codigo_sub_cat','codigo_sub_categorias');

    }


}

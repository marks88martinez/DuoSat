<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_producto_atributo extends Model
{
   protected $table = 'producto_atributo';
   protected $primaryKey = 'codigo';
   protected $fillable = ['codigo_atributo','codigo_producto', 'descripcion'];
   public  $timestamps = false;

   public function prodattr_attr(){
      return $this->belongsTo('App\model_atributo', 'codigo_atributo', 'codigo_atributo');
   }
}

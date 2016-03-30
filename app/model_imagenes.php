<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_imagenes extends Model
{
   protected $table = 'imagenes';
   protected $primarykey = 'codigo_imagen';
   protected $fillable = ['codigo_producto','url_imagenes'];
   public  $timestamps = false;
}

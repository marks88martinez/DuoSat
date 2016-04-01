<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_imagenes_banner extends Model
{
    protected $table = 'imagenes_banner';
    protected $primaryKey = 'codigo_imagen';
    protected $fillable = ['nombre_banner','url_banner'];

    public $timestamps = false;
}

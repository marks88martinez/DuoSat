<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_categoria extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'codigo_categoria';

    public  $timestamps = false;

    protected $fillable = ['nombre','descripcion', 'url_icon'];

}

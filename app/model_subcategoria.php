<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_subcategoria extends Model
{
    protected $table = 'sub_categorias';
    protected $primaryKey = 'codigo_sub_categorias';
    protected $fillable = ['nombre','descripcion','codigo_categoria'];


    public  $timestamps = false;

}

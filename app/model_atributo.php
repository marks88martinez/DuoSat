<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_atributo extends Model
{
    protected $table = 'atributos';
    protected $primaryKey = 'codigo_atributo';
    protected $fillable = ['nombre_atributo', 'estado'];

    public  $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_campos extends Model
{
    protected $table = 'campos';
    protected $primaryKey = 'codigo_campo';
    protected $fillable = ['nombre','estado'];

    public $timestamps= false;
}

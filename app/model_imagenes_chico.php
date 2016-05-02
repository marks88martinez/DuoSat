<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_imagenes_chico extends Model
{
    protected $table = 'banner_chico';
    protected $primaryKey = 'codigo';
    protected $fillable = ['nombre','url_banner','link', 'texto'];
    public  $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;


class model_categoria extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'codigo_categoria';

    public  $timestamps = false;

    protected $fillable = ['nombre','descripcion', 'url_icon'];

    public  function productos(){
       return $this->hasMany('App\model_producto','codigo_categoria','codigo_categoria');

    }
    public  function getUrlIconAttribute(){
        return URL::to($this->attributes['url_icon']);
    }

}

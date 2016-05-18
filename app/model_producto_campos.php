<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_producto_campos extends Model
{
   protected $table = 'producto_campos';
    protected $primaryKey = 'codigo_prod_campo';
    protected $fillable = ['codigo_campo','codigo_producto','descripcion','cheked'];

    public $timestamps = false;


    public function campo(){
        return $this->belongsTo('App\model_campos','codigo_campo', 'codigo_campo');
    }

    public function producto_campo(){
        return $this->belongsTo('App\model_producto','codigo_producto', 'codigo_producto');
    }
    public function getChekedAttribute(){
        return $this->attributes['cheked']== 1;
    }

}

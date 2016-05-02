<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_imagenes_banner extends Model
{
    protected $table = 'imagenes_banner';
    protected $primaryKey = 'codigo_imagen';
    protected $fillable = ['nombre_banner','url_banner','link', 'texto', 'style_padding_bottom', 'style_right', 'style_left', 'style_font_size'];

    public $timestamps = false;
}

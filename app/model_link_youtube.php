<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_link_youtube extends Model
{
    protected $table = 'link_youtube';
    protected $primaryKey = 'codigo_link';
    protected $fillable = ['url_video'];
    public $timestamps = false;

}

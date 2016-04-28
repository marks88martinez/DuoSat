<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class model_archivo_descarga extends Model
{
    protected $table = 'archivos_descargas';
    protected $primaryKey = 'codigo_archivo_descarga';
    protected $fillable = ['titulo', 'descripcion', 'version', 'size', 'link', 'estado', 'codigo_descarga'];
    public $timestamps = true;

    public function scopeActivo($q)
    {
        return $q->where('estado', '=', 1);
    }

    public function descarga()
    {
        return $this->belongsTo('App\model_descargas', 'codigo_descarga', 'codigo_descarga');
    }

    public function getLinkAttribute($val)
    {
        return url($val);
    }

    public function setLinkAttribute($file)
    {
        $timestamp = Carbon::now();
        $name = str_slug($file->getClientOriginalName());
        $extension = $file->getClientOriginalExtension();
        $size = $file->getClientSize();
        $webPath = '/uploads/'.$timestamp->year.'/'.$timestamp->month;
        $destinationPath = public_path().$webPath;
        $finalName = $name.'.'.$extension;
        $file->move($destinationPath, $finalName);

        $this->size = $size;
        $this->attributes['link'] = $webPath.'/'.$finalName;
    }
}

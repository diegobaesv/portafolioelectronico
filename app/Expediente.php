<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable; //Linea agregada para Sluggable


class Expediente extends Model
{

    //Agregado para Sluggable

    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'ex_numero'
            ]
        ];
    }


    protected $table = "expedientes";

    protected $fillable = ['ex_numero','ex_descripcion'];


    public function diligencias()
    {
    	return $this->hasMany('App\Diligencia');

    }

    public function archivos_expedientes()
    {
    	return $this->hasMany('App\ArchivoExpediente');

    }

    public function clientes()
    {
        return $this->belongsToMany('App\Cliente')->withTimestamps();
    }


}

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


    public function scopeFiltrar($query,$filtros){

        $filtro=$filtros['filtro'];
        $query ->whereRaw("ex_numero like '%$filtro%' or ex_descripcion like '%$filtro%'");
    }

    public function diligencias()
    {
    	return $this->hasMany('App\Diligencia','ex_id','id');

    }

    public function archivosexpedientes()
    {
    	return $this->hasMany('App\ArchivoExpediente','ex_id','id');

    }


    public function clientes()
    {
        return $this->belongsToMany('App\Cliente')->withTimestamps();
    }


}

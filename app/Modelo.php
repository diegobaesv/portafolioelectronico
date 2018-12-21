<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable; 

class Modelo extends Model
{


	use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'mod_etiqueta'
            ]
        ];
    }

     protected $table = "modelos";

    protected $fillable = ['mod_etiqueta','mod_fecha'];

    public function archivosmodelos()
    {
    	return $this->hasMany('App\ArchivoModelo','mod_id','id');

    }

    public function scopeFiltrar($query,$filtros){

        if ($filtro=$filtros['filtro']) {
            $query ->whereRaw("mod_etiqueta like '%$filtro%'");
        }elseif($filtros['inicio'] and $filtros['fin']){
            $query ->whereBetween('mod_fecha',[$filtros['inicio'],$filtros['fin']] );
        }

    }
    

}

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

    public function archivos_modelos()
    {
    	return $this->hasMany('App\ArchivoModelo');

    }
    

}

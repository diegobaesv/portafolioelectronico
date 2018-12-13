<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
     protected $table = "modelos";

    protected $fillable = ['mod_etiqueta','mod_fecha'];

    public function archivos_modelos()
    {
    	return $this->hasMany('App\ArchivoModelo');

    }

    

}

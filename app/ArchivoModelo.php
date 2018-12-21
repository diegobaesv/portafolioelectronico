<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchivoModelo extends Model
{
    protected $table = "archivo_modelos";

    protected $fillable = ['armod_nombre','armod_ruta','armod_descripcion','mod_id'];


    public function modelo()
    {
    	return $this->belongsTo('App\Modelo');
    }


    public function scopeFiltrar($query,$filtros){

        $filtro=$filtros['filtro'];
        $mod=$filtros['mod'];
        $query ->whereRaw("mod_id = $mod and (armod_nombre like '%$filtro%' or armod_descripcion like '%$filtro%')");
    }
}

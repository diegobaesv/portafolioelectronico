<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchivoExpediente extends Model
{
    protected $table = "archivo_expedientes";

    protected $fillable = ['arex_nombre','arex_ruta','arex_descripcion','ex_id'];

    public function expediente()
    {
    	return $this->belongsTo('App\Expediente');
    }


public function scopeFiltrar($query,$filtros){

        $filtro=$filtros['filtro'];
        $exp=$filtros['exp'];
        $query ->whereRaw("ex_id = $exp and (arex_nombre like '%$filtro%' or arex_descripcion like '%$filtro%')");
    }

}

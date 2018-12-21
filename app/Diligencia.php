<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diligencia extends Model
{
    protected $table = "diligencias";
    protected $fillable = ['dil_nombre','dil_lugar','dil_fecha','dil_hora','ex_id'];


    public function scopeFiltrar($query,$filtros){

    	if ($filtro=$filtros['filtro']) {
    		$query ->whereRaw("dil_nombre like '%$filtro%' or dil_lugar like '%$filtro%'");
    	}elseif($filtros['inicio'] and $filtros['fin']){
    		$query ->whereBetween('dil_fecha',[$filtros['inicio'],$filtros['fin']] );
    	}

    }

    public function expediente()
    {
    	return $this->belongsTo('App\Expediente','ex_id','id');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchivoExpediente extends Model
{
    protected $table = "archivo_expedientes";

    protected $fillable = ['arex_nombre','arex_ruta','arex_descripcion','ex_id'];


	public function expedientes()
    {
    	return $this->hasMany('App\Diligencia');

    }

}

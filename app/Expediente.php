<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
     protected $table = "expedientes";

    protected $fillable = ['ex_numero','ex_descripcion'];


    public function diligencias()
    {
    	return $this->hasMany('App\Diligencia');

    }


}
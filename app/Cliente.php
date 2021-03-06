<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "cliente";

    protected $fillable = ['id','cl_appaterno','cl_apmaterno','cl_nombre','cl_sexo','cl_telefono','cl_direccion'];


    public function expedientes()
    {
    	return $this->belongsToMany('App\Expediente')->withTimestamps();
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";

    protected $fillable = ['cl_appaterno','cl_apmaterno','cl_nombre','cl_sexo','cl_telefono','cl_direccion'];
}
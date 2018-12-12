<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchivoModelo extends Model
{
    protected $table = "archivo_modelos";

    protected $fillable = ['armod_nombre','armod_ruta','armod_descripcion'];
}

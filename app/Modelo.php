<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
     protected $table = "modelos";

    protected $fillable = ['mod_etiqueta','mod_fecha','armod_id'];
}

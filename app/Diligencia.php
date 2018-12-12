<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diligencia extends Model
{
    protected $table = "diligencias"
    protected $fillable = ['dil_nombre','dil_lugar','dil_fecha','dil_hora','ex_id'];

}

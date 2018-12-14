<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expediente;

class ExpedienteController extends Controller
{
    public function view($id){

    	$expediente = Expediente::find($id);
    	dd($expediente);
    	//return view('expedientes',['expediente' => $expediente]);

    	
    }
}

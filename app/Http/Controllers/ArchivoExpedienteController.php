<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expediente;
class ArchivoExpedienteController extends Controller
{
    public function index(){
    	$archivoexpedientes = Expediente::find(15)->archivosexpedientes;

    	
    	return view('archivosexpediente.index')->with('archivoexpedientes',$archivoexpedientes);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diligencia;

class DiligenciaController extends Controller
{
    public function index(){
    	$diligencias = Diligencia::OrderBy('id','ASC')->paginate(5);
    	return view('diligencias.index')->with('diligencias',$diligencias);
    }
}

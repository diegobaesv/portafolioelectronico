<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
    	$clientes = Cliente::OrderBy('cl_appaterno','ASC')->paginate(5);
    	return view('clientes.index')->with('clientes',$clientes);
    }
}

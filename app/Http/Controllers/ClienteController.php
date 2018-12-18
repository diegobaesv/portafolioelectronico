<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function index(){
    	$clientes = Cliente::OrderBy('id','ASC')->paginate(5);
    	return view('clientes.index')->with('clientes',$clientes);
    }
}

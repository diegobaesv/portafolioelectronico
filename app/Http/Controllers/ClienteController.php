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

    public function create(){
        $clientes = Cliente::OrderBy('id','ASC')->get();
        return view('clientes.create')->with('clientes',$clientes);;
    }

    public function store(){
        Cliente::create(request(['id','cl_appaterno', 'cl_apmaterno','cl_nombre','cl_telefono','cl_direccion','cl_sexo']));
        return redirect('clientes');
    }


}

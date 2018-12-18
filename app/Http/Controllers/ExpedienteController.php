<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expediente;


class ExpedienteController extends Controller
{
    public function index(){
        $expedientes = Expediente::OrderBy('id','ASC')->paginate(10);
    	return view('expedientes.index')->with('expedientes',$expedientes);
    }


    public function create(){
    	return view('expedientes.create');
    }


    public function store(){
    	Expediente::create(request(['ex_numero', 'ex_descripcion']));
        return redirect('expedientes');
    }
    

    public function destroy($id){
        $expediente = Expediente::find($id);
        $expediente->delete();
        
        return redirect()->back();
    }
}

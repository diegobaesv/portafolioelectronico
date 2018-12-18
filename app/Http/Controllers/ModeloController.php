<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo;

class ModeloController extends Controller
{
     public function index(){
        $modelos = Modelo::OrderBy('id','ASC')->paginate(5);
    	return view('modelos.index')->with('modelos',$modelos);
    }


    public function create(){
    	return view('modelos.create');
    }


    public function store(){
    	Modelo::create(request(['mod_etiqueta', 'mod_fecha']));
        return redirect('modelos');
    }


    public function destroy($id){
        $modelo = Modelo::find($id);
        $modelo->delete();
        
        return redirect()->back();
    }
}

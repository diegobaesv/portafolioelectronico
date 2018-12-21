<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo;

class ModeloController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
     public function index(){



         $inicio=request('inicio');
        $fin=request('fin');
        $filtro=request('filtro');


        $modelos = Modelo::OrderBy('id','ASC')
                    ->filtrar(compact('inicio','fin','filtro'))
                    ->paginate(5);
    	return view('modelos.index',compact('inicio','fin','filtro','modelos'));
    }


    public function create(){
    	return view('modelos.create');
    }


    public function store(){
    	Modelo::create(request(['mod_etiqueta', 'mod_fecha']));
        return redirect('modelos');
    }

 public function update(Modelo $modelo){
        $this->validate(request(), [
            'mod_etiqueta' => 'required',
        ]);
         $modelo->fill(request(['mod_etiqueta', 'mod_fecha']));
        $modelo->save();
        return redirect('modelos');
    }

    public function edit($id){
        $modelo = Modelo::find($id);
        return view('modelos.show')->with('modelo',$modelo);
    }

    public function destroy($id){
        $modelo = Modelo::find($id);
        $modelo->delete();
        
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expediente;


class ExpedienteController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index(){
        $filtro=request('filtro');

        $expedientes = Expediente::OrderBy('id','ASC')
                        ->filtrar(compact('filtro'))
                        ->paginate(10);

        return view('expedientes.index',compact('expedientes','filtro'));
    	
    }

    


    public function create(){
    	return view('expedientes.create');
    }


    public function store(){
    	Expediente::create(request(['ex_numero', 'ex_descripcion']));
        return redirect('expedientes');
    }
    
    public function edit($id){
        $expediente = Expediente::find($id);
        return view('expedientes.show')->with('expediente',$expediente);
    }

    public function update(Expediente $expediente){
        $this->validate(request(), [
            'ex_numero' => 'required',
        ]);
         $expediente->fill(request(['ex_numero', 'ex_descripcion']));
        $expediente->save();
        return redirect('expedientes');
    }

    public function destroy($id){
        $expediente = Expediente::find($id);
        $expediente->delete();
        
        return redirect()->back();
    }
}

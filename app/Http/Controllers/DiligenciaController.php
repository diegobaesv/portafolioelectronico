<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diligencia;
use App\Expediente;
use Carbon\Carbon;

class DiligenciaController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $inicio=request('inicio');
        $fin=request('fin');
        $filtro=request('filtro');
        $exp=null;
        $diligencias = Diligencia::OrderBy('dil_fecha','ASC')
                        ->filtrar(compact('inicio','fin','filtro','exp'))
                        ->paginate(10);
    	return view('diligencias.index',compact('inicio','fin','filtro','diligencias','exp'));
    }

    public function showExpediente($expediente){
        $inicio=null;
        $fin=null;
        $filtro=null;
        $exp=Expediente::find($expediente);
        $diligencias=$exp->diligencias;
        return view('diligencias.index',compact('inicio','fin','filtro','diligencias','exp'));
    }

    public function create(){
        $expedientes = Expediente::OrderBy('id','ASC')->get();
        return view('diligencias.create')->with('expedientes',$expedientes);;
    }


    public function store(){
    	Diligencia::create(request(['dil_nombre', 'dil_lugar','dil_fecha','dil_hora','ex_id']));
        return redirect('diligencias');
    }


    public function destroy($id){
        $diligencia = Diligencia::find($id);
        $diligencia->delete();
        
        return redirect()->back();
    }


    public function edit($id){
        $diligencia = Diligencia::find($id);
        $expedientes = Expediente::all();
        return view('diligencias.show',compact('diligencia','expedientes'));
    }

        public function update(Diligencia $diligencia){
        $this->validate(request(), [
            'dil_nombre' => 'required',
        ]);
         $diligencia->fill(request(['dil_nombre', 'dil_lugar','dil_fecha','dil_hora','ex_id']));
        $diligencia->save();
        return redirect('diligencias');
    }

}

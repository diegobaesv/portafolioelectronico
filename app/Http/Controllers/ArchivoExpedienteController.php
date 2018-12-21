<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expediente;
use App\ArchivoExpediente;
class ArchivoExpedienteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Expediente $expediente){
        $filtro=request('filtro');
        $exp = $expediente->id;
    	$archivoexpedientes = ArchivoExpediente::where('ex_id',$expediente->id)
                                ->filtrar(compact('filtro','exp'))
                                ->paginate(10);

    	return view('archivosexpediente.index',compact('archivoexpedientes','expediente','filtro'));


    }


    public function create(Expediente $expediente){
        return view('archivosexpediente.create',compact('expediente'));
    }
 
    public function store (Request $request){ 
        if ($request->hasFile('arex_ruta')) {
            $file = $request->file('arex_ruta');
            $name = time().$file->getClientOriginalName();
            $ruta_nueva= public_path().'/files/';
            $file->move($ruta_nueva,$name);

            
        }
        
        $archivo = new ArchivoExpediente();
        $archivo->arex_nombre=request('arex_nombre');
        $archivo->arex_descripcion=request('arex_descripcion');
        $archivo->ex_id=request('ex_id');
        $archivo->arex_ruta=$name;
        $archivo->save();

        return redirect('/archivosexpediente/'.request('ex_id'));
    }



    public function destroy($id){
        $archivoexpediente = ArchivoExpediente::find($id);
        $archivoexpediente->delete();
        
        return redirect()->back();
    }



}

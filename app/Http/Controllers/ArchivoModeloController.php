<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo;
use App\ArchivoModelo;

class ArchivoModeloController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Modelo $modelo){
        $filtro=request('filtro');
        $mod = $modelo->id;
    	$archivomodelos = ArchivoModelo::where('mod_id',$modelo->id)
                                ->filtrar(compact('filtro','mod'))
                                ->paginate(10);

    	return view('archivosmodelo.index',compact('archivomodelos','modelo','filtro'));


    }


    public function create(Modelo $modelo){
        return view('archivosmodelo.create',compact('modelo'));
    }
 
    public function store (Request $request){ 
        if ($request->hasFile('armod_ruta')) {
            $file = $request->file('armod_ruta');
            $name = time().$file->getClientOriginalName();
            $ruta_nueva= public_path().'/files/';
            $file->move($ruta_nueva,$name);

            
        }
        
        $archivo = new ArchivoModelo();
        $archivo->armod_nombre=request('armod_nombre');
        $archivo->armod_descripcion=request('armod_descripcion');
        $archivo->mod_id=request('mod_id');
        $archivo->armod_ruta=$name;
        $archivo->save();

        return redirect('/archivosmodelo/'.request('mod_id'));
    }



    public function destroy($id){
        $archivomodelo = ArchivoModelo::find($id);
        $archivomodelo->delete();
        
        return redirect()->back();
    }


}

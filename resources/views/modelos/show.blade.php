@extends('layouts.master')

@section('title', 'Editar Modelo ' . $modelo->mod_etiqueta) 

@section('titulo','Editar Modelo '. $modelo->mod_etiqueta)

@section('content')


<div class="col-sm-8">
    
    <form action ="/modelos/{{ $modelo->id }}" method="post">
    	{{ method_field('PATCH') }}
        {{csrf_field()}}
      
        <div class="form-group">
            <label for="mod_etiqueta">Etiqueta Modelo</label>
            <input type="text" class="form-control" id="mod_fecha" name="mod_etiqueta" placeholder="Etiqueta Modelo" value="{{ $modelo->mod_etiqueta }}" required>
        </div>
        
         <div class="form-group">
            <label for="mod_fecha">Fecha</label>
            <input type="date" class="form-control"
            id="mod_fecha" name="mod_fecha" required
            value="{{ $modelo->mod_fecha }}">
        </div>

       <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>

    </form>
</div>




@endsection
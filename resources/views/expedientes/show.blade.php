@extends('layouts.master')

@section('title', 'Editar Expediente ' . $expediente->ex_numero) 

@section('titulo','Editar Expediente '. $expediente->ex_numero)

@section('content')


<div class="col-sm-8">
    
    <form action ="/expedientes/{{ $expediente->id }}" method="post">
    	{{ method_field('PATCH') }}
        {{csrf_field()}}
        <div class="form-group">
            <label for="ex_numero">Número expediente</label>
            <input type="text" class="form-control" id="ex_numero" name="ex_numero" placeholder="Número expediente" value="{{ $expediente->ex_numero }}" required>
        </div>
        <div class="form-group">
            <label for="ex_descripcion">Descripción</label>
            <input type="text" class="form-control" id="ex_descripcion" name = "ex_descripcion"placeholder="Descripción" value="{{ $expediente->ex_descripcion }}" required>

        </div>
        
        
         <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>



    </form>
</div>




@endsection

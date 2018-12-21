@extends('layouts.master')

@section('title', 'Subir Archivo Expediente a '. $expediente->ex_numero) 

@section('titulo','Subir Archivo Expediente a '. $expediente->ex_numero)

@section('content')


<div class="col-sm-8">

    <form action ="/archivosexpediente/{{$expediente->id}}" method="post" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        {{csrf_field()}}
        
        <div class="form-group">

            <div class="form-group">
                <label for="arex_ruta">Archivos</label>
                <input type="file"  id="arex_ruta" name = "arex_ruta"placeholder="Archivo" required >

            </div>


            <label for="arex_nombre">Nombre</label>
            <input type="text" class="form-control" id="arex_nombre" name="arex_nombre" placeholder="Nombre" required>
        </div>

        <div class="form-group">
            <label for="arex_descripcion">Descripcion</label>
            <input type="text" class="form-control" id="arex_descripcion" name="arex_descripcion" placeholder="Descripción" required>
        </div>
        

        <input type="hidden" name = "ex_id" value ="{{$expediente->id}}">
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>

    </form>
</div>

@endsection



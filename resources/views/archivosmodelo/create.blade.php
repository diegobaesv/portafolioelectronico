@extends('layouts.master')

@section('title', 'Subir Archivo Modelo a '. $modelo->mod_etiqueta) 

@section('titulo','Subir Archivo Modelo a '. $modelo->mod_etiqueta)

@section('content')


<div class="col-sm-8">

    <form action ="/archivosmodelo/{{$modelo->id}}" method="post" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        {{csrf_field()}}
        
        <div class="form-group">

            <div class="form-group">
                <label for="armod_ruta">Archivos</label>
                <input type="file"  id="armod_ruta" name = "armod_ruta"placeholder="Archivo" required >

            </div>


            <label for="armod_nombre">Nombre</label>
            <input type="text" class="form-control" id="armod_nombre" name="armod_nombre" placeholder="Nombre" required>
        </div>

        <div class="form-group">
            <label for="armod_descripcion">Descripcion</label>
            <input type="text" class="form-control" id="armod_descripcion" name="armod_descripcion" placeholder="Descripción" required>
        </div>
        

        <input type="hidden" name = "mod_id" value ="{{$modelo->id}}">
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>

    </form>
</div>

@endsection



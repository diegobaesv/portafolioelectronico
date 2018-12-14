@extends('layouts.master');

@section('title', 'Registrar Expediente') 

@section('content')


<div class="col-sm-8">
    <h2>Registrar Expediente</h2>
    <form action ="/expedientes" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="ex_numero">Número expediente</label>
            <input type="text" class="form-control" id="ex_numero" name="ex_numero" placeholder="Número expediente" required>
        </div>
        <div class="form-group">
            <label for="ex_descripcion">Descripción</label>
            <input type="text" class="form-control" id="ex_descripcion" name = "ex_descripcion"placeholder="Descripción" required>

        </div>
        
        
        <div class="form-group">
            <label for="exampleFormControlFile1">Subir documento</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>



    </form>
</div>




@endsection

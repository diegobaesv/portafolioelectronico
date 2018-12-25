@extends('layouts.master')

@section('title', 'Editar Cliente') 

@section('titulo','Editar Cliente')

@section('content')


<div class="col-sm-8">
    
    <form action ="/clientes/{{$clientes->id}}" method="post">
        {{ method_field('PATCH') }}
        {{csrf_field()}}
        
        
        <div class="form-group">
            <label for="id">DNI</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="Documento Identidad" required>
        </div>

        <div class="form-group">
            <label for="cl_appaterno">Apellido Paterno</label>
            <input type="text" class="form-control" id="cl_appaterno" name="cl_appaterno" placeholder="Apellido Paterno" required>
        </div>

        <div class="form-group">
            <label for="cl_apmaterno">Apellido Materno</label>
            <input type="text" class="form-control" id="cl_apmaterno" name="cl_apmaterno" placeholder="Apellido Materno" required>
        </div>

          <div class="form-group">
            <label for="cl_nombre">Nombres</label>
            <input type="text" class="form-control" id="cl_nombre" name="cl_nombre" placeholder="Nombres" required>
        </div>

         <div class="form-group">
            <label for="cl_sexo">Sexo</label>
           <select name="cl_sexo" id="cl_sexo" class="col custom-select" required>
            <option value="" disabled selected hidden>Seleccionar</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
               
            </select>
        </div>

        <div class="form-group">
            <label for="cl_telefono">Telefono</label>
            <input type="text" class="form-control" id="cl_telefono" name="cl_telefono" placeholder="Telefono" required>
        </div>

        <div class="form-group">
            <label for="cl_direccion">Direccion</label>
            <input type="text" class="form-control" id="cl_direccion" name="cl_direccion" placeholder="Direccion" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>



    </form>
</div>

@endsection

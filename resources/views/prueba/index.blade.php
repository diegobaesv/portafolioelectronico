@extends('layouts.master')

@section('title', 'Registrar Expediente') 

@section('titulo','Prueba SI 2')

@section('content')



 <div class="form-group">
            <label for="ex_numero">Ingrese año</label>
            <input type="text" class="form-control" id="ex_numero" name="ex_numero" placeholder="Número expediente" required>
        </div>
<div class="form-group">
	<a href="/expedientes/create">
		<button type="button" class="btn btn-success" name="nuevo">Calcular</button>
	</a>

</div>
        @endsection
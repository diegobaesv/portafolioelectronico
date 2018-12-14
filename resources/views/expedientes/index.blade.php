@extends('layouts.master')

@section('title', 'Expedientes') 

@section('botones')
<div class="form-group">
	<a href="/expedientes/create">
		<button type="button" class="btn btn-success" name="nuevo">Nuevo</button>
	</a>

</div>
@endsection

@section('titulo','Expedientes')

@section('content')

<table class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Numero</th>
		<th>Descripcion</th>
		<th>Archivos</th>
		<th>Accion</th>
	</thead>

	<tbody>
		@foreach($expedientes as $expediente)
		<tr>
			<td>{{$expediente->id}}	</td>
			<td>{{$expediente->ex_numero}}	</td>
			<td>{{$expediente->ex_descripcion}}	</td>
			<td>	</td>
			<td>	
				<a href="" class="btn btn-info btn-sm">Mostrar</a>
				<a href="" class="btn btn-warning btn-sm">Editar</a>
				<a href="" class="btn btn-danger btn-sm">Eliminar</a>

			</td>
		</tr>

		@endforeach
	</tbody>
</table>

@endsection



@extends('layouts.master')

@section('title', 'Modelos') 

@section('titulo', 'Modelos') 

@section('botones')
<div class="form-group">
	<a href="/modelos/create">
		<button type="button" class="btn btn-success" name="nuevo">Registrar Modelo</button>
	</a>

</div>
@endsection


@section('content')

<table class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Etiqueta</th>
		<th>Fecha</th>
		<th>Archivos</th>
		<th>Accion</th>
	</thead>

	<tbody>
		@foreach($modelos as $modelo)
		<tr>
			<td>{{$modelo->id}}	</td>
			<td>{{$modelo->mod_etiqueta}}	</td>
			<td>{{$modelo->mod_fecha}}	</td>
			<td>
				<a href="" class="btn btn-info btn-sm">Ver</a>
			</td>

			<td>	

				
				<a href="" class="btn btn-warning btn-sm">Editar</a>
				<a href="/modelos/{{ $modelo->id }}/eliminar" onclick="return confirm('¿Seguro que deseas eliminar?')" class="btn btn-danger btn-sm">Borrar</a>

			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection

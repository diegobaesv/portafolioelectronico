@extends('layouts.master')

@section('title', 'Expedientes') 

@section('botones')
<div class="form-group">
	
	
	<form class="form-inline mt-2 mt-md-0 mb-2" action="/expedientes" method="get" autocomplete="off">
		<input class="form-control mr-sm-2" type="text" placeholder="Numero/Descripcion" name="filtro" value="{{$filtro}}">

		<button class="btn btn-outline-primary my-2 my-sm-0 mr-2" type="submit">Buscar</button>
		<a href="/expedientes">
		<button  type="button" class="close mr-2" aria-label="Close"> 
			<span aria-hidden="true">&times;</span>
		</button>
		</a>
	</form>

	<hr>
	
	<a href="/expedientes/create">
		<button type="button" class="btn btn-success" name="nuevo">Registrar Expediente</button>
	</a>

</div>
@endsection

@section('titulo','Expedientes')


@section('content')

<table class="table table-striped ">
	<thead>
		<th>ID</th>
		<th>Numero</th>
		<th>Descripcion</th>
		<th>Diligencias</th>
		<th>Archivos</th>
		<th>Accion</th>
	</thead>

	<tbody>
		@foreach($expedientes as $expediente)
		<tr>
			<td>{{$expediente->id}}	</td>
			<td>{{$expediente->ex_numero}}	</td>
			<td>{{$expediente->ex_descripcion}}	</td>
			<td>
				<a href="/diligencias/{{$expediente->id}}" class="btn btn-dark btn-sm {{count($expediente->diligencias)>0?"":"disabled"}}">Ver ({{count($expediente->diligencias)}})</a>
			</td>
			<td>	
				<a href="/archivosexpediente/{{ $expediente->id }}" class="btn btn-info btn-sm">Ver ({{count($expediente->archivosexpedientes)}})</a>
			</td>
			<td>	
				<a href="/expedientes/{{ $expediente->id }}/editar" class="btn btn-warning btn-sm">Editar</a>
				<a href="/expedientes/{{ $expediente->id }}/eliminar" onclick="return confirm('¿Seguro que deseas eliminar?')" class="btn btn-danger btn-sm">Borrar</a>

			</td>
		</tr>

		@endforeach
	</tbody>
</table>

@endsection

@section('footer')

<script>
	var link= document.getElementById('nav-Expedientes');
	link.setAttribute('class','nav-link active');
</script>

@endsection



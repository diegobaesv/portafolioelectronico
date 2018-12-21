@extends('layouts.master')

@section('title', 'Modelos') 

@section('titulo', 'Modelos') 

@section('botones')

	<form class="form-inline mt-2 mt-md-0 mb-2" action="/modelos" method="get" autocomplete="off">
		<input class="form-control mr-sm-2" type="text" placeholder="Etiqueta" name="filtro"  value="{{$filtro?$filtro:""}}">
		<button class="btn btn-outline-primary my-2 my-sm-0 mr-2" type="submit">Buscar</button>
		<a href="/modelos">
		<button  type="button" class="close mr-2 " aria-label="Close"> 
			<span aria-hidden="true">&times;</span>
		</button>
		</a>
	</form>

	<form class="form-inline mt-2 mt-md-0" action="/modelos" method="get">
		<label class="mr-2" for="inicio">Desde</label>
		<input class="form-control mr-3" type="date" name="inicio" value="{{$inicio?$inicio:""}}">
		<label class="mr-2" for="fin">Hasta</label>
		<input class="form-control mr-2" type="date" name="fin" value="{{$fin?$fin:""}}">
		<button class="btn btn-outline-primary my-2 my-sm-0 mr-2" type="submit">Buscar</button>
		<a href="/modelos">
		<button  type="button" class="close mr-2 " aria-label="Close"> 
			<span aria-hidden="true">&times;</span>
		</button>
		</a>
	</form>
<hr>
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
				<a href="/archivosmodelo/{{ $modelo->id }}" class="btn btn-info btn-sm">Ver ({{count($modelo->archivosmodelos)}})</a>
			</td>

			<td>	

				
				<a href="/modelos/{{ $modelo->id }}/editar" class="btn btn-warning btn-sm">Editar</a>
				<a href="/modelos/{{ $modelo->id }}/eliminar" onclick="return confirm('¿Seguro que deseas eliminar?')" class="btn btn-danger btn-sm">Borrar</a>

			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection

@section('footer')

<script>
	var link= document.getElementById('nav-Modelos');
	link.setAttribute('class','nav-link active');
</script>

@endsection
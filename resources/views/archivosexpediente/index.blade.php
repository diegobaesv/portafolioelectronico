@extends('layouts.master')


@section('titulo','Archivos Expedientes de ' .$expediente->ex_numero) 
@section('title', 'Archivos Expedientes de ' .$expediente->ex_numero) 

@section('botones')

<form class="form-inline mt-2 mt-md-0 mb-2" action="/archivosexpediente/{{$expediente->id}}" method="get" autocomplete="off">
	<input class="form-control mr-sm-2" type="text" placeholder="Nombre/Descripcion" name="filtro" value="{{$filtro}}">

	<button class="btn btn-outline-primary my-2 my-sm-0 mr-2" type="submit">Buscar</button>
	<a href="/archivosexpediente/{{$expediente->id}}">
		<button  type="button" class="close mr-2" aria-label="Close"> 
			<span aria-hidden="true">&times;</span>
		</button>
	</a>
</form>

<hr>
<div class="form-group">
	<a href="/archivosexpediente/{{$expediente->id}}/create">
		<button type="button" class="btn btn-success" name="nuevo">Subir Archivo</button>
	</a>
	

</div>
@endsection

@section('content')

<table class="table table-striped ">
	<thead>
		<th>Nombre</th>
		
		<th>Descripcion</th>
		<th>Accion</th>
	</thead>

	<tbody>
		@foreach($archivoexpedientes as $archivoexpediente)

		<tr>
			<td>{{$archivoexpediente->arex_nombre}}	</td>
			
			<td>{{$archivoexpediente->arex_descripcion}}	</td>
			<td>
				<a href="/files/{{$archivoexpediente->arex_ruta}}" target=”_blank” class="btn btn-info btn-sm" >Ver</a>
				<a href="/files/{{$archivoexpediente->arex_ruta}}" class="btn btn-primary btn-sm" download>Descargar</a>
				<a href="/archivosexpediente/{{ $archivoexpediente->id }}/eliminar" onclick="return confirm('¿Seguro que deseas eliminar?')" class="btn btn-danger btn-sm">Borrar</a>

			</td>
		</tr>

		@endforeach
	</tbody>
</table>
@endsection
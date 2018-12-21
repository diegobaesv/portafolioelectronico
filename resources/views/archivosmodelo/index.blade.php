@extends('layouts.master')


@section('titulo','Archivos Modelo de ' .$modelo->mod_etiqueta) 
@section('title', 'Archivos Modelo de ' .$modelo->mod_etiqueta) 

@section('botones')

<form class="form-inline mt-2 mt-md-0 mb-2" action="/archivosmodelo/{{$modelo->id}}" method="get" autocomplete="off">
	<input class="form-control mr-sm-2" type="text" placeholder="Nombre/Descripcion" name="filtro" value="{{$filtro}}">

	<button class="btn btn-outline-primary my-2 my-sm-0 mr-2" type="submit">Buscar</button>
	<a href="/archivosmodelo/{{$modelo->id}}">
		<button  type="button" class="close mr-2" aria-label="Close"> 
			<span aria-hidden="true">&times;</span>
		</button>
	</a>
</form>

<hr>
<div class="form-group">
	<a href="/archivosmodelo/{{$modelo->id}}/create">
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
		@foreach($archivomodelos as $archivomodelo)

		<tr>
			<td>{{$archivomodelo->armod_nombre}}	</td>
			
			<td>{{$archivomodelo->armod_descripcion}}	</td>
			<td>
				<a href="/files/{{$archivomodelo->armod_ruta}}" target=”_blank” class="btn btn-info btn-sm" >Ver</a>
				<a href="/files/{{$archivomodelo->armod_ruta}}" class="btn btn-primary btn-sm" download>Descargar</a>
				<a href="/archivosmodelo/{{ $archivomodelo->id }}/eliminar" onclick="return confirm('¿Seguro que deseas eliminar?')" class="btn btn-danger btn-sm">Borrar</a>

			</td>
		</tr>

		@endforeach
	</tbody>
</table>
@endsection
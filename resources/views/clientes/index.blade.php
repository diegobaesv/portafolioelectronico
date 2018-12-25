@extends ('layouts.master')

@section('title','Clientes')

@section('titulo','Clientes')


@section('botones')

<form class="form-inline mt-2 mt-md-0 mb-2" action="/proformas" method="get" autocomplete="off">
		<input class="form-control mr-sm-2" type="text" placeholder="Datos Generales" name="codigo">
		<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
	</form>

<hr>

<div class="form-group">
	<a href="/clientes/create">
		<button type="button" class="btn btn-success" name="nuevo">Registrar Cliente</button>
	</a>
	
</div>
@endsection

@section('content')

<table class="table table-striped">
	<thead>
		<th>DNI</th>
		<th>Apellido Paterno</th>
		<th>Apellido Materno</th>
		<th>Nombres</th>
		<th>Sexo</th>
		<th>Telefono</th>
		<th>Direccion</th>
		<th>Accion</th>
	</thead>

	<tbody>
		@foreach($clientes as $cliente)
		<tr>
			<td>{{$cliente->id}}	</td>
			<td>{{$cliente->cl_appaterno}}	</td>
			<td>{{$cliente->cl_apmaterno}}	</td>
			<td>{{$cliente->cl_nombre}}	</td>
			<td>
			@if($cliente->cl_sexo=='F')
				Femenino
			@else
				Masculino
			@endif
			</td>
			<td>{{$cliente->cl_telefono}}	</td>
			<td>{{$cliente->cl_direccion}}	</td>
			<td>	
				<a href="" class="btn btn-warning btn-sm">Editar</a>
				<a href="#" onclick="return confirm('¿Seguro que deseas eliminar?')" class="btn btn-danger btn-sm">Borrar</a>
			</td>
		</tr>

		@endforeach
	</tbody>
</table>

@endsection

@section('footer')

<script>
	var link= document.getElementById('nav-Clientes');
	link.setAttribute('class','nav-link active');
</script>

@endsection
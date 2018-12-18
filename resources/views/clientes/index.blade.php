@extends ('layouts.master')

@section('title','Clientes')

@section('titulo','Clientes')


@section('botones')
<div class="form-group">
	<a href="#">
		<button type="button" class="btn btn-success" name="nuevo">Registrar Usuario</button>
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
			<td>	</td>
			<td>{{$cliente->cl_apmaterno}}	</td>
			<td>{{$cliente->cl_nombre}}	</td>
			<td>{{$cliente->cl_sexo}}	</td>
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
@extends ('layouts.master')

@section('title','Diligencias')

@section('titulo','Diligencias')


@section('botones')
<div class="form-group">
	<a href="#">
		<button type="button" class="btn btn-success" name="nuevo">Registrar Diligencia</button>
	</a>
	<a href="#">
		<button type="button" class="btn btn-info" name="nuevo">Ver Calendario</button>
	</a>

</div>
@endsection

@section('content')

<table class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Expediente</th>
		<th>Lugar</th>
		<th>Fecha</th>
		<th>Hora</th>
		<th>Accion</th>
	</thead>

	<tbody>
		@foreach($diligencias as $diligencia)
		<tr>
			<td>{{$diligencia->id}}	</td>
			<td>{{$diligencia->dil_nombre}}	</td>
			<td>	</td>
			<td>{{$diligencia->dil_lugar}}	</td>
			<td>{{$diligencia->dil_fecha}}	</td>
			<td>{{$diligencia->dil_hora}}	</td>
			<td>	
				<a href="" class="btn btn-warning btn-sm">Editar</a>
				<a href="#" onclick="return confirm('¿Seguro que deseas eliminar?')" class="btn btn-danger btn-sm">Borrar</a>
			</td>
		</tr>

		@endforeach
	</tbody>
</table>

@endsection
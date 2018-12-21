@extends ('layouts.master')
@if($exp)
@section('title','Diligencias de Expediente ' .$exp->ex_numero) 
@section('titulo','Diligencias de Expediente ' .$exp->ex_numero) 
@else
@section('title','Diligencias') 
@section('titulo','Diligencias') 
@endif

@section('botones')


<form class="form-inline mt-2 mt-md-0 mb-2" action="/diligencias" method="get" autocomplete="off">
	<input class="form-control mr-sm-2" size="30" type="text" placeholder="Nombre/Lugar/Expediente" name="filtro" value="{{$filtro?$filtro:""}}">
	
	<button class="btn btn-outline-primary my-2 my-sm-0 mr-2" type="submit">Buscar</button>
	<a 
	@if($exp)
	href="/diligencias/{{$exp->id}}"
	@else
	href="/diligencias"
	@endif

>
	<button  type="button" class="close mr-2 " aria-label="Close"> 
		<span aria-hidden="true">&times;</span>
	</button>
</a>

</form>

<form class="form-inline mt-2 mt-md-0" action="/diligencias" method="get">
	<label class="mr-2" for="inicio">Desde</label>
	<input class="form-control mr-3" type="date" name="inicio"  value="{{$inicio?$inicio:""}}">
	<label class="mr-2" for="fin">Hasta</label>
	<input class="form-control mr-2" type="date" name="fin" value="{{$fin?$fin:""}}">
	<button class="btn btn-outline-primary my-2 my-sm-0 mr-2" type="submit">Buscar</button>
	<a href="/diligencias">
		<button  type="button" class="close mr-2" aria-label="Close"> 
			<span aria-hidden="true">&times;</span>
		</button>
	</a>
</form>

<hr>

<div class="form-group">
	<a href="/diligencias/create">
		<button type="button" class="btn btn-success" name="nuevo">Registrar Diligencia</button>
	</a>
	

</div>
@endsection

@section('content')

<table class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Lugar</th>
		<th>Fecha</th>
		<th>Hora</th>
		<th>Expediente</th>
		<th>Accion</th>
	</thead>

	<tbody>
		@foreach($diligencias as $diligencia)
		<tr>
			<td>{{$diligencia->id}}	</td>
			<td>{{$diligencia->dil_nombre}}	</td>
			<td>{{$diligencia->dil_lugar}}	</td>
			<td>{{$diligencia->dil_fecha}}	</td>
			<td>{{$diligencia->dil_hora}}	</td>
			<td>{{$diligencia->expediente->ex_numero}}	</td>
			<td>	
				<a href="/diligencias/{{ $diligencia->id }}/editar" class="btn btn-warning btn-sm">Editar</a>
				<a href="/diligencias/{{ $diligencia->id }}/eliminar" onclick="return confirm('¿Seguro que deseas eliminar?')" class="btn btn-danger btn-sm">Borrar</a>
			</td>
		</tr>

		@endforeach
	</tbody>
</table>

@endsection

@section('footer')

<script>
	var link= document.getElementById('nav-Diligencias');
	link.setAttribute('class','nav-link active');
</script>

@endsection
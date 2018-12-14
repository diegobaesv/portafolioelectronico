@extends('layouts.master')

@section('title', 'Expedientes') 

@section('botones')
<div class="form-group">
	<a href="/expedientes/create">
		<button type="button" class="btn btn-success" name="nuevo">Nuevo</button>
	</a>

</div>
@endsection


@section('content')

<table class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Numero</th>
		<th>Descripcion</th>
		<th>Archivos</th>
	</thead>

	<tbody>
		@foreach($expedientes as $expediente)
		<tr>
			<td>{{$expediente->id}}	</td>
			<td>{{$expediente->ex_numero}}	</td>
			<td>{{$expediente->ex_descripcion}}	</td>
			<td>	</td>
		</tr>

		@endforeach
	</tbody>
</table>

@endsection


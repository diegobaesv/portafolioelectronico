@extends('layouts.master')

@section('title', 'Archivos Expedientes')
@section('titulo','Archivos Expedientes') 

@section('botones')

@endsection



@section('content')

<div class="list-group">
	@foreach($archivoexpedientes as $archivoexpediente)
	<a href="#" class="list-group-item list-group-item-action flex-column 	align-items-start ">
		<div class="d-flex w-100 justify-content-between">
			<h5 class="mb-1">{{$archivoexpediente->arex_nombre}}</h5>
			<small>jk</small>
		</div>
		<p class="mb-1">{{$archivoexpediente->ex_descripcion}}</p>
		<small>Donec id elit non mi porta.</small>
	</a>
	@endforeach
	
	

</div>
@endsection

@extends('layouts.master');

@section('title', 'Registrar Modelo') 

@section('titulo','Registrar Modelo')

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

@section('content')


<div class="col-sm-8">

	<form action ="/modelos" method="post">
		{{csrf_field()}}
		<div class="form-group">
			<label for="mod_etiqueta">Etiqueta modelo</label>
			<input type="text" class="form-control" id="mod_etiqueta" name="mod_etiqueta" placeholder="Número expediente" required>
		</div>
	
		<div class="form-group">
			<label for="mod_fecha">Fecha</label>
			<input type="date" class="form-control"
			id="mod_fecha" name="mod_fecha" required
			value = "{{Carbon\Carbon::now()->toDateString()}}">
		</div>

		<div class="form-group">
			<label for="exampleFormControlFile1">Subir documento</label>
			<input type="file" class="form-control-file" id="exampleFormControlFile1">
		</div>


		<div class="form-group">
			<button type="submit" class="btn btn-primary">Guardar cambios</button>
		</div>



	</form>
</div>




@endsection

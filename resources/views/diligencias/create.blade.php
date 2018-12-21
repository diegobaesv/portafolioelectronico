@extends('layouts.master')

@section('title', 'Registrar Diligencia') 

@section('titulo','Registrar Diligencia')

@section('content')


<div class="col-sm-8">
    
    <form action ="/diligencias" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="dil_nombre">Nombre Diligencia</label>
            <input type="text" class="form-control" id="dil_nombre" name="dil_nombre" placeholder="Nombre Diligencia" required>
        </div>
        <div class="form-group">
            <label for="dil_lugar">Lugar</label>
            <input type="text" class="form-control" id="dil_lugar" name = "dil_lugar"placeholder="Lugar" required>

        </div>

         <div class="form-group">
            <label for="dil_fecha">Fecha</label>
            <input type="date" class="form-control"
            id="dil_fecha" name="dil_fecha" required
            value = "{{Carbon\Carbon::now()->toDateString()}}">
        </div>

         <div class="form-group">
            <label for="dil_hora">Hora</label>
            <input type="time" class="form-control"
            id="dil_hora" name="dil_hora" 
             required>
        </div>
        <div class="form-group">
            <label for="ex_id">Expediente</label>
           <select name="ex_id" id="ex_id" class="col custom-select" required>
            <option value="" disabled selected hidden>Seleccionar</option>
                @foreach($expedientes as $expediente)
                <option value="{{$expediente->id}}">{{$expediente->ex_numero}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>



    </form>
</div>




@endsection
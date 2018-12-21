@extends('layouts.master')

@section('title', 'Editar Diligencia ' . $diligencia->dil_nombre) 

@section('titulo','Editar Diligencia '. $diligencia->dil_nombre)

@section('content')


<div class="col-sm-8">
    
    <form action ="/diligencias/{{ $diligencia->id }}" method="post">
    	{{ method_field('PATCH') }}
        {{csrf_field()}}
      

        <div class="form-group">
            <label for="dil_nombre">Nombre Diligencia</label>
            <input type="text" class="form-control" id="dil_nombre" name="dil_nombre" placeholder="Nombre Diligencia" value="{{ $diligencia->dil_nombre }}" required>
        </div>
        <div class="form-group">
            <label for="dil_lugar">Lugar</label>
            <input type="text" class="form-control" id="dil_lugar" name = "dil_lugar"placeholder="Lugar" value="{{ $diligencia->dil_lugar }}" required>

        </div>

         <div class="form-group">
            <label for="dil_fecha">Fecha</label>
            <input type="date" class="form-control"
            id="dil_fecha" name="dil_fecha" required
            value="{{ $diligencia->dil_fecha }}">
        </div>

         <div class="form-group">
            <label for="dil_hora">Hora</label>
            <input type="time" class="form-control"
            id="dil_hora" name="dil_hora" 
            
            value="{{ $diligencia->dil_hora }}" required>
        </div>
        <div class="form-group">
            <label for="ex_id">Expediente</label>
           <select name="ex_id" id="ex_id" class="col custom-select" required>
            
                @foreach($expedientes as $expediente)
                <option @if($expediente->id==$diligencia->ex_id)
                    selected
                    @endif 

                value="{{$expediente->id}}">{{$expediente->ex_numero}}</option>
                @endforeach

               
            </select>
        </div>
        
        
         <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>



    </form>
</div>




@endsection
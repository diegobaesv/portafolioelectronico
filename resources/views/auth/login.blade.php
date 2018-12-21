@extends('layouts.master')

@section('title', 'Login') 

@section('content')
 <div class="container">

      <form class="form-signin" action="/login" method="post">
          {{ csrf_field() }}
        <h2 class="form-signin-heading">Inicio de sesión</h2>

        <label for="nombre_usuario" >Nombre Usuario:</label>
        <input type="text" id="nombre_usuario" name="nombre_usuario" class="form-control" placeholder="Nombre Usuario" required autofocus maxlength="15" value="{{old('nombre_usuario')}}">
        

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>

        <hr>


        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>

        @include('layouts.errors')
      </form>

    </div>
@endsection

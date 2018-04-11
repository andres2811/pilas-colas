@extends('master')

@section('content')
    <h2 class="text-center">Bienvenido</h2>
    <div class="container">
		<ul class="nav justify-content-center">
		  <li class="nav-item">
		    <a type="button" class="btn btn-primary" href="{{ URL::to('registroUsuario')}}">Registro de usuario</a>
		  </li>

		  <li class="nav-item">
		    <a type="button" class="btn btn-primary"" href="{{ URL::to('ingreso')}}">ingreso</a>
		  </li>
		  
		</ul>
	</div>

@stop
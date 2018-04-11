@extends('master')

@section('content')
    

    <div class="row">
	  <div class="col-6 col-md-4"></div>
	  <div class="col-6 col-md-4"><h2>Listado de usuarios</h2></div>
	  <div class="col-6 col-md-4"></div>
	</div>

	<div class="row">
	  <div class="col-6 col-md-4"></div>
	  <div class="col-6 col-md-4">
	  		@if($mensaje!='')
	  			<div class="alert alert-success" role="alert">
				 {{$mensaje}}
				</div>
	  		@endif
	  </div>
	  <div class="col-6 col-md-4"></div>
	</div>


	<div class="row">
	  <div class="col-6 col-md-2"></div>
	  <div class="col-6 col-md-10">
	  			
	  		<table class="table table-dark">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nombre</th>
			      <th scope="col">Apellido</th>
			      <th scope="col">Usuario</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@if(Session::has('matrizUsuario'))

		  			@foreach(Session::get('matrizUsuario') as $datos)
		  				<tr>
					      <th scope="row">1</th>
					      <td>{{$datos['nombre']}}</td>
					      <td>{{$datos['apellido']}}</td>
					      <td>{{$datos['usuario']}}</td>
					    </tr>
		  			@endforeach

		  		@endIf
			    
			  </tbody>
			</table>

	  		
	  </div>
	  <div class="col-6 col-md-1"></div>
	</div>

	 <div class="container">
		<ul class="nav justify-content-center">
		  <li class="nav-item">
		    <a class="nav-link active" href="{{ URL::to('registroUsuario')}}">Registro de usuario</a>
		  </li>

		  <li class="nav-item">
		    <a class="nav-link" href="{{ URL::to('ingreso')}}">ingreso</a>
		  </li>
		 
		</ul>
	</div>
    

@stop
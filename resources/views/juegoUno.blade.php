@extends('master')

@section('content')
       
   	 <div class="container bg-secondary py-3 text-light">
  		<div class="container bg-dark text-white py-2 ">    
  		<p  class="display-4">Systema de citas</p>
  		</div>
	</div> 

	<ul>
		<li class="nav-item">
		    <a typebr="button" class="btn btn-primary"" href="{{ URL::to('formulario_citas')}}">formulario de citas</a>
		</li>

		<li class="nav-item">
		    <a typebr="button" class="btn btn-primary"" href="{{ URL::to('master_ingreso')}}">cajeros de citas</a>
		</li>

		<li class="nav-item">
			    <a typebr="button" class="btn btn-primary"" href="{{ URL::to('master_ingreso')}}">reportes de citas</a>
		</li>
	</ul>



	<li class="nav-item">
		    <a type="button" class="btn btn-primary"" href="{{ URL::to('master_ingreso')}}">regresar a opciones programa</a>
	</li>

@stop
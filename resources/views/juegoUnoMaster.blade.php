<!DOCTYPE html>
<html>
<head>
	<title>Sistema Registro</title>

	<!-- Css Boostrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- JavaScript-->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
       
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
		    <a typebr="button" class="btn btn-primary"" href="{{ URL::to('cajeros_citas')}}">cajeros de citas</a>
		</li>

		<li class="nav-item">
			    <a typebr="button" class="btn btn-primary"" href="{{ URL::to('reporte_citas')}}">reportes de citas</a>
		</li>
	</ul>

	<div class="container">
		@yield('cont')
	</div>


	<li class="nav-item">
		    <a type="button" class="btn btn-primary"" href="{{ URL::to('opcion_juego')}}">regresar a opciones programa</a>
	</li>

</body>
</html>
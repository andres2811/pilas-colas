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


	<!--Menu de mi master-->
	<ul class="nav justify-content-center">
		  <li class="nav-item">
		    <a type="button" class="btn btn-primary" href="{{ URL::to('juegoDos')}}">torres de hanoy</a>
		  </li>

		  <li class="nav-item">
		    <a type="button" class="btn btn-primary"" href="{{ URL::to('juegoUno')}}">systema de citas</a>
		  </li>
		  
		</ul>


	<!--Contenedor-->
	<div class="container">
		@yield('contenido')
	</div>


	<div class="container">
		@yield('formulario')
	</div>


</body>
</html>
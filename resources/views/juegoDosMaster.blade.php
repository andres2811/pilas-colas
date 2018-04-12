<!DOCTYPE html>
<html>
<head>
	<title>Torres de hanoi</title>

	<!-- Css Boostrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- JavaScript-->

	<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
</head>


<body class="bg-dark">

     <div class="container bg-light py-3 text-light"> <!--marco exterior del ttulo-->
  		<div class="container bg-info text-white py-1 "> <!--marco interior del titulo-->    
  		<p class="display-3" align="center">Torres de hanoi</p>
  		</div>
	</div> 
	<br>
	<center>
	<img src="../public/imagenes/hanoi.jpeg" width="350" class="rounded-circle">
	</center>



	<br><br>
    <li class="nav-item">
    	<div class="modal-footer"> <!--modal-footer corre el boton a la parte derecha y le pone una linea arriba-->
		    <a typebr="button" class="btn btn-danger"" href="{{ URL::to('opcion_juego')}}">regresar a opciones programa</a>
	    </div>
	</li>

	<!--Contenedor-->
	<!--<div class="container">
		@yield('contenido')
	</div>


	<div class="container">
		@yield('formulario')
	</div>

>>>>>>> Stashed changes:resources/views/master_ingreso.blade.php

</body>
</html>
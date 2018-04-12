<!DOCTYPE html>
<html>
<head>
	<title>sistema de citas</title>

	<!-- Css Boostrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	

	<!-- JavaScript-->

	<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
</head>


<body class="bg-dark">
       
   	 <div class="container bg-light py-3"> <!--marco exterior del titulo-->
  		<div class="container bg-info text-white py-1 "> <!--marco interior del titulo-->    
  		<p  class="display-3">Sistema de citas</p>
  		</div>
	</div> 
    <br>
    
<section style="display: flex;">
	<ul style="margin-top: 90px;margin-left: 100px;">
		<li class="nav-item">
		    <a typebr="button" class="btn btn-primary"" href="{{ URL::to('formulario_citas')}}">formulario de citas</a>
		</li>

		<br>

		<li class="nav-item">
		    <a typebr="button" class="btn btn-primary"" href="{{ URL::to('cajeros_citas')}}">cajeros de citas</a>
		</li>

		<br>

		<li class="nav-item">
			<a typebr="button" class="btn btn-primary"" href="{{ URL::to('reporte_citas')}}">reportes de citas</a>
		</li>
	</ul>


		<center style="width:500px;height: 300px;margin-top: 50px;margin-left: 500px;">
    		<img src="../public/imagenes/citas.jpeg" width="400">
    	</center>

</section>
<br><br>

		<div class="modal-footer">
			<li class="nav-item">
		    <a typebr="button" class="btn btn-danger"" href="{{ URL::to('opcion_juego')}}">regresar a opciones programa</a>
	</li>		
		</div>
	

	<div class="container">
		@yield('cont')
	</div>


	

</body>
</html>
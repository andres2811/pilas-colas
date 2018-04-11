@extends('master')

@section('content')
 
	    <body class="container bg-dark">
	      	<div class="modal-body">
	        	<div class="col-6 col-md-6">
				  <div class="form-group">
				    <font color="white"><label for="exampleInputPassword1">Usuario</label></font>
				    <input type="text" class="form-control" id="exampleInputPassword1" name="usuario_in" placeholder="Nombre de usuario">
				  </div>
				</div>

				<div class="col-6 col-md-6">
				  <div class="form-group">
				    <font color="white"><label for="exampleInputPassword1">Contraseña</label></font>
				    <input type="password" class="form-control" id="exampleInputPassword1" name="contrasena_in" placeholder="Contraseña de usuario">
				  </div>
				</div>

			 </div>
		
		
	      <div class=""><!--modal-footer-->
	        <a type="button" class="btn btn-primary"" href="{{ URL::to('opcion_juego')}}">INGRESAR</a>
	      </div>
	      <br>

	      <div class="modal-footer">
	        <a type="button" class="btn btn-primary"" href="{{ URL::to('')}}">REGRESAR</a>
	      </div>
	      <center>
	      	<img src="../public/imagenes/login.png" width="250">
	      </center>
	    </body>
	      
	      
@stop
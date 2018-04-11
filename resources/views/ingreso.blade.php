@extends('master')

@section('content')
 
	      	<div class="modal-body">
	        	<div class="col-6 col-md-6">
				  <div class="form-group">
				    <label for="exampleInputPassword1">Usuario</label>
				    <input type="text" class="form-control" id="exampleInputPassword1" name="usuario_in" placeholder="Usuario de usuario">
				  </div>
				</div>

				<div class="col-6 col-md-6">
				  <div class="form-group">
				    <label for="exampleInputPassword1">Contraseña</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" name="contrasena_in" placeholder="Contraseña de usuario">
				  </div>
				</div>

			 </div>
		
		
	      <div class="modal-footer">
	        <a type="button" class="btn btn-primary"" href="{{ URL::to('opcion_juego')}}">INGRESAR</a>
	      </div>

	      <div class="modal-footer">
	        <a type="button" class="btn btn-primary"" href="{{ URL::to('')}}">REGRESAR</a>
	      </div>
	      
	      
@stop
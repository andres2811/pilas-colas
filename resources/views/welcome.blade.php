@extends('master')

@section('content')


<body class="container bg-dark">
    <font color="white"><h2 class="text-center">Bienvenido</h2></font>
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
	<center><img src="../public/imagenes/hola.png" width="1000" class="rounded-circle" alt="Cinque Terre"></center>

</body>
</html>

@stop
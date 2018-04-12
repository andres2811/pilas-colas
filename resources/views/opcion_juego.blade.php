@extends('master')

@section('content')


	<!--Menu de mi master-->
<body class="container bg-dark">
    <nav class="navbar navbar-expand-sm bg-danger">
    	<font color="black"><h3 align="center">ELIGE UNA OPCION</h3></font>
    	<hr>
		<ul class="nav justify-content-center">
		  <li class="nav-item">
		  	<a class="nav-link" href=juegoDosMaster><font color="white">torres de hanoy</font></a>
		    <!--<a type="button" class="btn btn-primary" href="{{ URL::to('juegoDosMaster')}}">torres de hanoy</a>-->
		  </li>

		  <li class="nav-item">
		  	<a class="nav-link" href="juegoUnoMaster"><font color="white">sistema de citas</font></a>
		    <!--<a type="button" class="btn btn-primary"" href="{{ URL::to('juegoUnoMaster')}}">sistema de citas</a>-->
		  </li>
		  
		</ul>
	</nav>
	<br>
	<center>
		<img src="../public/imagenes/elige.jpg" width="600" class="rounded-circle">
	</center>
</body>

@stop
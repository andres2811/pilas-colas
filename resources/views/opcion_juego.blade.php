@extends('master')

@section('content')


	<!--Menu de mi master-->
	<ul class="nav justify-content-center">
		  <li class="nav-item">
		    <a type="button" class="btn btn-primary" href="{{ URL::to('juegoDosMaster')}}">torres de hanoy</a>
		  </li>

		  <li class="nav-item">
		    <a type="button" class="btn btn-primary"" href="{{ URL::to('juegoUnoMaster')}}">systema de citas</a>
		  </li>
		  
		</ul>

@stop
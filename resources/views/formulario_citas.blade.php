@extends('master')

@section('content')

<div class="container bg-secondary py-3 text-light">
  <div class="container bg-dark text-white py-2 ">    
  <p  class="display-4">Registro de ingreso:</p>
  </div>
</div> 
  <form action="{{ url('registroClientes')}}" method="POST">
      {{ csrf_field()}}
     <div class="container py-4 bg-white  text-dark"> 
        <h1>Datos del cliente:</h1><br>
      <div class="form-row">
        <div class="col">
        <b>Nombres:</b><input type="text" name="nombres">
        </div>
        <div class="col">
        <b>Apellidos:</b><input type="text" name="apellidos">
        </div>
        <div class="col">
        <b>Edad:</b><input type="text" name="edad">
        </div>
      </div>
      <br><br>
     <center><div class="container.fluid">
         <b>Cédula:</b><input type="text" name="cedula">
       <b>Ciudad de expedición:</b><input type="text"  name="ciudad">  
     </div></center>
     <br><br>


    <div class="form-row"> 
      <div class="col">
        <h5>Prioridad:</h5>
        <p>1-mujer embarazada</p>
        <p>2-persona de tercera edad</p>
        <p>3-discapacitado</p>
        <p>4-mujer</p>
        <p>5-hombre</p>
        <select class="form-control" name="prioridad">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
        </select>
      </div>
       <div class="col">
        <h5>Tipo de turno:</h5>
           <select class="form-control" name="turno">
                <option>consignación</option>
                <option>retiro</option>
                <option>consulta administrativa</option>
          </select>
       </div>
    </div>
    <center><br><br><button type="submit" class="btn btn-primary">Registrar ingreso</button></center>
       </form><br>
       <hr/>  
</div>




@stop
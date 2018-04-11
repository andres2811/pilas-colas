<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;//Usar la clas Validator
use \Session;

class formRegistroController extends Controller
{
    //

    public function index(){
    	return view('formRegistroUsuario');
    }

  	public function store(Request $request){
  		//Validacion de los campos

  		$v= Validator::make($request->all(),
  			[
  				//Van los name de los campos requeridos en el form
  				//Son los campos que va hacer obligatorios en mi form
  				'usuario'=>'required',
  				'contrasena'=>'required',
  				'nombre'=>'required',
  				'apellido'=>'required',
  				'direccion'=>'required',
  				'telefono'=>'required|numeric',
  				'email'=>'required|e-mail',
  				'edad'=>'required|numeric',


  			]
  		);

  		//Valido si algun campo esta vacio

  		if($v->fails()){ //Si trae campos vacios returna un true 
  			return redirect()->back()->withErrors($v->errors());
  			//Esta linea o sentencia retorna los errores a nuestra pagina o vista
  		}else{

  			//Si no hay errores, creamos un metodo para crear el listado de usuarios

  			$mensaje=$this->crearUsuario($request);

        $datos=[
          'mensaje'=>$mensaje,
        ];

        return view('listadoUsuarios',$datos);

  		}

  	}

  	public function crearUsuario(Request $request){


  		if(Session::has('matrizUsuario')){

        $dataRegistrada=Session::get('matrizUsuario');

        $dataRegistrada[]=array(
          'nombre'=> $request->nombre,
          'apellido'=> $request->apellido,
          'direccion'=> $request->direccion,
          'telefono'=> $request->telefono,
          'email'=> $request->email,
          'telefono'=> $request->edad,
          'usuario'=> $request->usuario,
          'contrasena'=> $request->contrasena,
        );
        Session::put('matrizUsuario',$dataRegistrada);
      
      }
      else{
        $matrizUsuario[]=array(
    			'nombre'=> $request->nombre,
    			'apellido'=> $request->apellido,
    			'direccion'=> $request->direccion,
    			'telefono'=> $request->telefono,
    			'email'=> $request->email,
    			'telefono'=> $request->edad,
    			'usuario'=> $request->usuario,
    			'contrasena'=> $request->contrasena,
    		);

    		Session::put('matrizUsuario',$matrizUsuario);
      }

  		$mensaje="Usuario registrado con exito!!!";

      return $mensaje;

  	}


}

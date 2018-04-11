<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class juegoUnoController extends Controller
{
    //

    public function index(){

    	return view('juegoUno');

    }


    public function ingresoClientes() {

    	return view('formulario_citas');


    }

}


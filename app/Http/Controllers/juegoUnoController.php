<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class juegoUnoController extends Controller
{
    //

    public function index(){

    	return view('juegoUnoMaster');

    }


    public function ingresoClientes() {

    	return view('formulario_citas');


    }

    public function cajeros() {

    	return view('cajeros_citas');


    }

    public function reporte() {

    	return view('reporte_citas');


    }

}


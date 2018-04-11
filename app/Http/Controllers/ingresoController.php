<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ingresoController extends Controller
{
    //

    public function index(){

    	return view('ingreso');

    }

    public function menu(){

    	return view('master_ingreso');

    }


}


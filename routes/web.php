<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/juegoUno','juegoUnoController@index');
Route::get('/juegoDos','juegoDosController@index');
;

//Registro de usuario

Route::get('/registroUsuario','formRegistroController@index');
Route::any('/registro','formRegistroController@store');

//ingreso usuario
Route::any('/ingreso','ingresoController@index');
Route::any('/master_ingreso','ingresoController@menu');


//citas
Route::any('/formulario_citas','juegoUnoController@ingresoClientes');






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

//controladores de juegos

Route::get('/juegoUnoMaster','juegoUnoController@index');
Route::get('/juegoDosMaster','juegoDosController@index');

//Registro de usuario

Route::get('/registroUsuario','formRegistroController@index');
Route::any('/registro','formRegistroController@store');

//ingreso usuario
Route::any('/ingreso','ingresoController@index');
Route::any('/opcion_juego','ingresoController@menu');


//citas
Route::any('/formulario_citas','juegoUnoController@ingresoClientes');

Route::any('/cajeros_citas','juegoUnoController@cajeros');
Route::any('/reporte_citas','juegoUnoController@reporte');






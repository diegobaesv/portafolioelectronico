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
	return view('layouts/index');
});




Route::get('/expedientes', 'ExpedienteController@index');
Route::get('/expedientes/create', 'ExpedienteController@create');
Route::post('/expedientes', 'ExpedienteController@store');
Route::get('/expedientes/{expediente}/eliminar', 'ExpedienteController@destroy');

Route::get('/archivosexpediente/{expediente}', 'ArchivoExpedienteController@index');

Route::get('/modelos', 'ModeloController@index');
Route::get('/modelos/create', 'ModeloController@create');
Route::post('/modelos', 'ModeloController@store');
Route::get('/modelos/{modelo}/eliminar', 'ModeloController@destroy');

Route::get('/diligencias', 'DiligenciaController@index');

Route::get('/clientes', 'ClienteController@index');

Route::get('/prueba', function () {
	return view('prueba/index');
});
Route::get('/login', function () {
	return view('login/login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

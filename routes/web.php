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


Route::get('/', 'HomeController@index');


Route::get('/expedientes', 'ExpedienteController@index');
Route::get('/expedientes/create', 'ExpedienteController@create');
Route::post('/expedientes', 'ExpedienteController@store');
Route::get('/expedientes/{expediente}/eliminar', 'ExpedienteController@destroy');
Route::get('/expedientes/{expediente}/editar', 'ExpedienteController@edit');
Route::patch('/expedientes/{expediente}', 'ExpedienteController@update');

Route::get('/archivosexpediente/{expediente}', 'ArchivoExpedienteController@index');
Route::patch('/archivosexpediente/{expediente}', 'ArchivoExpedienteController@store');
Route::get('/archivosexpediente/{expediente}/create', 'ArchivoExpedienteController@create');
Route::get('/archivosexpediente/{archivoexpediente}/eliminar', 'ArchivoExpedienteController@destroy');



Route::get('/archivosmodelo/{modelo}', 'ArchivoModeloController@index');
Route::patch('/archivosmodelo/{modelo}', 'ArchivoModeloController@store');
Route::get('/archivosmodelo/{modelo}/create', 'ArchivoModeloController@create');
Route::get('/archivosmodelo/{archivomodelo}/eliminar', 'ArchivoModeloController@destroy');

Route::get('/modelos', 'ModeloController@index');
Route::get('/modelos/create', 'ModeloController@create');
Route::post('/modelos', 'ModeloController@store');
Route::patch('/modelos/{modelo}', 'ModeloController@update');
Route::get('/modelos/{modelo}/editar', 'ModeloController@edit');
Route::get('/modelos/{modelo}/eliminar', 'ModeloController@destroy');

Route::get('/diligencias', 'DiligenciaController@index');
Route::get('/diligencias/create', 'DiligenciaController@create');
Route::get('/diligencias/{diligencia}/eliminar', 'DiligenciaController@destroy');
Route::post('/diligencias', 'DiligenciaController@store');
Route::get('/diligencias/{diligencia}/editar', 'DiligenciaController@edit');	
Route::get('/diligencias/{expediente}', 'DiligenciaController@showExpediente');
Route::patch('/diligencias/{diligencia}', 'DiligenciaController@update');

Route::get('/clientes', 'ClienteController@index');

Route::get('/prueba', function () {
	return view('prueba/index');
});
Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::post('/login', 'Auth\LoginController@store');
Route::get('/logout', 'Auth\LoginController@logout');

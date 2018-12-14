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

Route::get('/expedientes', function () {
	return view('expedientes');
});



Route::group(['prefix'=> 'expedientes'],function()
{

	Route::get('/',function(){
		return view('expedientes');

	});


	Route::get('view/{id}',[
		'uses' => 'ExpedienteController@view',
		'as'   =>  'expedienteView'
	]);

	
});
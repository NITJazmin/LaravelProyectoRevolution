<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layouts', function () {
    return view('layouts.empresa');
});


Route::get('/revolution/coordinador/inicio', ['uses'=> 'CoordinadorRevController@post_Login', 'as'=>'coordinador']);
Route::get('/revolution/analista/inicio', ['uses'=> 'AnalistaController@post_Login', 'as'=>'analista']);
Route::get('/revolution/reclutador/inicio', ['uses'=> 'ReclutadorController@post_Login', 'as'=>'reclutador']);
Route::get('/cliente/inicio', ['uses'=>'EmpleadoController@post_Login', 'as'=>'cliente']);

Route::get('/revolution', function () {
    return view('revolution.construccion');
});
	
Route::get('/pdf',function() {
	$pdf = PDF::loadView('pdf.invoice');
	return $pdf->stream('archivo.pdf');
});

Route::resource('revolution/analista','AnalistaController');
Route::resource('revolution/coordinador','CoordinadorRevController');
Route::resource('revolution/empleado','EmpleadoController'); 
Route::resource('revolution/empresa','EmpresaController');
Route::resource('revolution/peticion','PeticionController');
Route::resource('revolution/reclutador','ReclutadorController');
Route::resource('cliente/peticion','PeticionController');
Route::resource('cliente/empleado','EmpleadoController');
Route::resource('revolution/prueba','PeticionController');
Route::resource('revolution/perfilador','PerfiladorController');
Route::resource('revolution/estudios','EstudiosController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@authenticated');
Route::get('auth/logout', ['uses' => 'Auth\AuthController@getLogout','as' => 'Cerrarsesion']);
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

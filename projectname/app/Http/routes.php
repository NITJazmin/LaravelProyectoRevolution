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
Route::get('/layouts/perfil', function () {
    return view('layouts.perfil');
});

Route::get('/revolution', function () {
    return view('revolution.construccion');
});

Route::resource('revolution/analista','AnalistaController');
Route::resource('revolution/coordinador','CoordinadorRevController');
Route::resource('revolution/empleado','EmpleadoController'); 
Route::resource('revolution/empresa','EmpresaController');
Route::resource('revolution/peticion','PeticionController');



// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', [
	'uses' => 'Auth\AuthController@getLogout',
	'as' => 'Cerrarsesion'
]);
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('prueba', function(){
	
	$cliente = new Cliente;

	$cliente->email = "prueba@prueba.com";

	$cliente->real_name = "hola";
	$cliente->password = "prueba";

	$cliente->save();

	return $cliente;
});

Route::controller('clientes','ClienteController');

Route::get('login', 'AuthController@getLogin');

Route::post('login','AuthController@postLogin');

Route::get('logout', 'AuthController@getLogout');
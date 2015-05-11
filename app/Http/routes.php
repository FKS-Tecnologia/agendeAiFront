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

Route::get('/', 'WelcomeController@index');

Route::group(['prefix' => 'associado'], function()
{
    Route::resource('info', 'Associate\InfoController');
    Route::resource('clientes', 'Associate\ClientController');
    Route::resource('servicos', 'Associate\ServicesController');
    Route::controller('usuarios', 'Associate\UserController');
    Route::controller('/', 'Associate\AssociateController');
});


Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

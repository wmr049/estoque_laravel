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

Route::get('/', function()
{
  return 'Primeira lógica com Laravel';
});

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id?}', 'ProdutoController@mostra')->where('id', '[0-9]+');


Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

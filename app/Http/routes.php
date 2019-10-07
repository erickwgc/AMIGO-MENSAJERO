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
/* /
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', "PaginasController@inicio");

Route::get('/inicio', "PaginasController@inicio");

/*Route::get('/carta', "PaginasController@carta");*/

Route::resource('/carta', "CartasController");
Route::get('/boletin', "PaginasController@boletin");

/*Route::post('/guardarCarta', "CartasController@store");*/

Route::resource('/usuarios',"UsuariosController");
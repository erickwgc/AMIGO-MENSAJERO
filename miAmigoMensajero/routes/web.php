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

/**
 * Route::get('/', function () {
    return view('welcome');
});

Route::get('/carta', function () {
    return wiew('carta');
});

Route::get('/boletin/{id}/{nombre}', function ($id, $nombre) {
    return "Vista de los boletines, Este es el boletín n° " . $id . " publicado por " . $nombre;
})->where('nombre','[a-zA-Z]+');
 */

Route::get('/', "PaginasController@inicio");

Route::get('/inicio', "PaginasController@inicio");

Route::get('/carta', "PaginasController@carta");

Route::get('/boletin', "PaginasController@boletin");

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

Route::get('/documentos', 'DocumentoController@index')->name('documentos.index');

Route::get('/contacto', 'PaginasController@contacto');

Route::get('/acerca-de', 'PaginasController@info');
Route::get('/team', 'PaginasController@equipo')->name('equipo');

Route::get('/bienvenida/{nombre}/{apellido?}', 'PaginasController@bienvenida');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); //recibe la ruta home y llama al controlador HomeController / @index ejecuta el metodo index




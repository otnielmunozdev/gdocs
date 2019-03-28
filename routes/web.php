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

Route::get('/inicio', function () {
    return view('inicio');
});

Route::resource('/dependencias','DependenciaController'); //sustituye lo de abajo por crearlo con el comando

/*Route::get('/dependencia', 'DependenciasController@index'); // primero se muestra con get , se rllena el formulario y con post se manda
Route::get('/dependencia/create', 'DependenciasController@create');
Route::post('/dependencia/create', 'DependenciasController@store');
Route::get('/dependencia/{id}', 'DependenciasController@show');
Route::get('/dependencia/edit', 'DependenciasController@edit');
Route::post('/dependencia/edit', 'DependenciasController@update');
Route::post('/dependencia/delete', 'DependenciasController@delete');*/

Route::resource('/documentos', 'DocumentoController');

Route::get('/contacto', 'PaginasController@contacto');

Route::get('/acerca-de', 'PaginasController@info');
Route::get('/team', 'PaginasController@equipo')->name('equipo');

Route::get('/bienvenida/{nombre}/{apellido?}', 'PaginasController@bienvenida');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); //recibe la ruta home y llama al controlador HomeController / @index ejecuta el metodo index




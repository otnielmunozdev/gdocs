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

Route::get('/contacto', function () {
    return view('paginas/contacto');
});

Route::get('/info', function () {
    return view('paginas.informacion');
});

Route::get('/bienvenida/{nombre}/{apellido?}', function($nombre, $apellido= null){ // '/bienvdida/{nombre de la variable que guradara informacion}' , el ?variable es para puede resivir el parametro o no 
    //return $nombre . " " . $apellido;    
    return view('paginas.bienvenida' , compact('nombre' , 'apellido')) //sustituye el arreglo de ->with 
    ->with([
        'nombre_completo' => $nombre . " " . $apellido
    ]);   
    /* ->with([ //devuelve la vista con nombre y apellido
            'nombre'=> $nombre,
            'apellido' => $apellido
        ]);*/
        

});


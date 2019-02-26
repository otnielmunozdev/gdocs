<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function info(){
        return view('paginas.informacion');
    }

    public function contacto()
    {
        return view('paginas/contacto');
    }

    public function equipo()
    {
        return view('paginas.equipo');
    }

    public function bienvenida($nombre,$apellido=null)
    {
        //function($nombre, $apellido= null){ // '/bienvdida/{nombre de la variable que guradara informacion}' , el ?variable es para puede resivir el parametro o no 
            //return $nombre . " " . $apellido;    
            return view('paginas.bienvenida' , compact('nombre' , 'apellido')) //sustituye el arreglo de ->with 
            ->with([
                'nombre_completo' => $nombre . " " . $apellido
            ]);   
            /* ->with([ //devuelve la vista con nombre y apellido
                    'nombre'=> $nombre,
                    'apellido' => $apellido
                ]);*/
        
        }
}

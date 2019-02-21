<?php

namespace App\Http\Controllers; //carga las clases , donde esta ubicado elk nuevo archivo 

use Illuminate\Http\Request;

class HomeController extends Controller //es clase que se extiende a el controlador 
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth'); //protege las rutas para todo el controlador necesitas estar logeado
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home'); //seejecuta la vista home
    }
}

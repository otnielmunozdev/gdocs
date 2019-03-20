<?php

namespace App\Http\Controllers;

use App\Dependencia;
use Illuminate\Http\Request;

class DependenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dependencias = Dependencia::all();
        return view('dependencias.dependenciaIndex', compact('dependencias')); //'carpeta','nombrevista'
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dependencias.dependenciaForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd('Entra a metodo storage');
       // dd($request->all());
       $dep = new Dependencia();
       $dep->dependencia = $request->input('dependencia');//trae la informacion del formualrio del campo llamado dependencia
       $dep->clave = $request->clave; //es lo mismo
       $dep->estatus = $request->estatus;
       $dep->save();
       return redirect()->route('dependencias.index'); //redirige a la ruta en el route list no de la vista 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dependencia  $dependencia
     * @return \Illuminate\Http\Response
     */

     //Dependencia $dependencia
    public function show(Dependencia $dependencia)
    {
        //ver detalles 
        //$dependencia = Dependencia::find($id); //busca la tabla deacuerdo al id es el equivalente a los parametros de ahorita
        return view('dependencias.dependenciaShow',compact('dependencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dependencia  $dependencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Dependencia $dependencia)
    {
        return view('dependencias.dependenciaForm', compact('dependencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dependencia  $dependencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dependencia $dependencia)
    {
       $dependencia->dependencia = $request->input('dependencia');//trae la informacion del formualrio del campo llamado dependencia
       $dependencia->clave = $request->clave; //es lo mismo
       $dependencia->estatus = $request->estatus;
       $dependencia->save();
       return redirect()->route('dependencias.show',$dependencia->id); //redirige a la ruta en el route list no de la vista 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dependencia  $dependencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dependencia $dependencia)
    {
        $dependencia->delete();//->onDelete('cascade');
        return redirect()->route('dependencias.index');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Documento;
use App\User;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentos = Documento::all();
        return view('documentos.documentosIndex', compact('documentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::all();
        //dd($usuarios);
        return view('documentos.documentoForm',compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $documento = new Documento;
        //$documento->user_id = Auth::id(); //recupera la info del usuario $request->user()->id;
        $documento->user_id = $request->user_id; //user()->id;
        $documento->envia = $request->envia;
        $documento->no_oficio = $request->no_oficio;
        $documento->fecha_oficio = $request->fecha_oficio;
        $documento->recibido = \Carbon\Carbon::now()->toDateTimeString();//maneja tiempo de este momento y lo conveirte a una cadena para el formato que MySQL lo necesita


        $documento->save();

        return redirect()->route('documentos.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function show(Documento $documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function edit(Documento $documento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documento $documento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documento $documento)
    {
        //
    }
}

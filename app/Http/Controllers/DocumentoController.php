<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Documento;
use App\Funcionario;
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
       //para traerme los docuementos del usaurio 3
      // $user = User::find(3);
       //$documentos = $user->documentos;
      // $documentos = \Auth::user()->documentos;
       //()
       //->where('no_oficio','34342')->get();
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
        $funcionarios = Funcionario::all();
        //dd($usuarios);
        return view('documentos.documentoForm',compact('usuarios','funcionarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge([
            'recibido'=> \Carbon\Carbon::now()->toDateTimeString()//aqui se pueden calcular los totales de algunpedido
        ]);
        /* 1 forma de guardar 
        $documento = new Documento;
        //$documento->user_id = Auth::id(); //recupera la info del usuario $request->user()->id;
        $documento->user_id = $request->user_id; //user()->id;
        $documento->envia = $request->envia;
        $documento->no_oficio = $request->no_oficio;
        $documento->fecha_oficio = $request->fecha_oficio;
        $documento->recibido = \Carbon\Carbon::now()->toDateTimeString();//maneja tiempo de este momento y lo conveirte a una cadena para el formato que MySQL lo necesita
        $documento->save();*/
        
        /*2 forma
        dd($request->all());
        $documento = new Documento([
        'envia'=>$request->envia,
        'no_oficio'=>$request->no_oficio,
        'fecha_oficio'=>$request->fecha_oficio,
        'recibido'=>\Carbon\Carbon::now()->toDateTimeString()
        ]);*/
        //$doc = Documento::create($request->all());
        $doc = Documento::create($request->except('funcionarios_id'));
        $doc->funcionarios()->attach($request->funcionarios_id);//adjunta a documentos los sig funcionarios

        /*3 forma
        $documento = new Documento($request->all());//si desprotego en el modelo el id_usuario no necesitos lasdps lineas de abajo
        $user = User::find($request->user_id);
       // \Auth::user()->user->documentos()->save($documento);//se relaciona con el id de la sesion 
        $user->documentos()->save($documento);//aqui se asigna de forma automatica el user_id*/

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
        $usuarios = User::all();
        return view('documentos.documentoForm',compact('usuarios'));
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
        $documento->update($request->all());
        return redirect()->route('documento.index');
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

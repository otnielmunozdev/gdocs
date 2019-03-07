<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\DB; cuando de crea el modelo se quita esto y se agrega:
use App\Documento;
use Illuminate\Http\Request;


class DocumentoController extends Controller
{
    public function index()
    {
        
        //$docs = DB::table('documentos')->get();
        $docs = Documento::all(); //Documento::where() tambien se pueden utilizar select etc.
        //->where('id', '>' ,'1')
        //->where('envia','pedro');

        //dd($docs);
        //return $docs;
        return view('documentos.documentoIndex', compact('docs'));
        //->with(['docs'=> $docs]);
    }
}

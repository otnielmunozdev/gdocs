<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class DocumentoController extends Controller
{
    public function index()
    {
        
        $docs = DB::table('documentos')->get();
        //->where('id', '>' ,'1')
        //->where('envia','pedro');

        //dd($docs);
        //return $docs;
        return view('documentos.documentoIndex', compact('docs'));
        //->with(['docs'=> $docs]);
    }
}

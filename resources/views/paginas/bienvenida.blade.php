@extends('layouts.app')

@section('content')



    <h1>Bienvenida</h1>
    <p>
        Hola! {{ $nombre }} {{ $apellido }} <!--enves de <?php //echo $nombre?>-->
        <br>
        Nombre completo: {{$nombre_completo}}
    </p>
        
@endsection
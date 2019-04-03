@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-8 offset-2">
    <h1>Documentos de {{ session('apodo') }}</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>envia</th>
                    <th>no Oficio</th>
                    <th>Fecha Oficio</th>
                    <th>Fecha Recibido</th>

                    <th>Usuario Recibe</th>
                    <th>Funcionario </th>
                </tr>
            </thead>
            <tbody>
               {{-- {{ dd($docs)}}  para verificar que se manda el json--}}

               @foreach ($documentos as $doc)
                <tr>
                    <td>{{ $doc->id }}</td>
                    <td>{{ $doc->envia }}</td>
                    <td>{{ $doc->no_oficio }}</td>
                    <td>{{ $doc->fecha_oficio }}</td>
                    <td>{{ $doc->recibido }}</td>
                <td>{{$doc->user->nombre}} ({{$doc->user->email}})</td>
                <td>
                    
                    <ul>
                        @foreach ($doc->funcionarios as $funcionario)
                            <li>{{$funcionario->nombre}} </li>
                        @endforeach
                    </ul>
                </td>
                <td>
                <a href="{{route('documentos.edit',$doc->id)}}" class="btn btn-sm btn-danger" >Editar</a>
                </td>
                </tr>
               @endforeach
            </tbody>

        </table>
    </div>
</div>
    
@endsection
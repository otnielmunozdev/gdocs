@extends('layouts.tabler')

@section('contenido')

<div class="page-header">
    <div class="page-title">
    LISTADO DE DEPENDENCIAS
</div>
</div>
<div class="card">
<div class="card-header">
    <h3 class="card-title">Listado de dependencias</h3>
</div>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Dependencia</th>
                        <th>Clave</th>
                        <th>Status</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        @foreach ($dependencias as $depen)
                            <tr>
                                <td>{{$depen->id}}</td>
                                <td>{{$depen->dependencia}}</td>
                                <td>{{$depen->clave}}</td>
                                <td>{{$depen->estatus}}</td>
                                <td>
                                <a href="{{route('dependencias.show',$depen->id)}}" class="btn btn-info btn-sm">Detalle</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
    
@endsection
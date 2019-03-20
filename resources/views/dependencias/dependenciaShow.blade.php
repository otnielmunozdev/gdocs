@extends('layouts.tabler')

@section('contenido')

<div class="page-header">
    <div class="page-title">
    INFORMACION DE DEPENDENCIAS
</div>
</div>
<div class="card">
<div class="card-header">
    <h3 class="card-title">Detalle de dependencia</h3>
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
                            <tr>
                                <td>{{$dependencia->id}}</td> 
                                <td>{{$dependencia->dependencia}}</td>
                                <td>{{$dependencia->clave}}</td>
                                <td>{{$dependencia->estatus}}</td>
                            <td>
                            <a href="{{route('dependencias.edit',$dependencia->id) }}" class="btn btn-warning btn-sm">Editar</a>

                                <form action="{{route('dependencias.destroy',$dependencia->id)}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">  {{--se manda un input oculto para que laravel sepa que hacer DELETE / PUT / PATCH--}}
                                    <button  class="btn btn-danger btn-sm">Borrar</button>
                                {{--<a href="{{route('dependencias.show',$depen->id)}}" class="btn btn-info btn-sm">Detalle</a>--}}
                                </form>
                            </td>

                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
    
@endsection
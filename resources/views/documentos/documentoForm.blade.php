@extends('layouts.tabler')

@section('contenido')

<div class="page-header">
    <div class="page-title">
        AGREGAR DOCUMENTO
    </div>
</div>
<div class="card">
    
<div class="card-header">
    <h3 class="card-title">Capturar documento</h3>
</div>
  <div class="card-body">


        <div class="col-md-8 offset-md-2 col-sm-12 ">

            @if (isset($documentos))
                <form action="{{ route('documentos.update',$dependencia->id)}} " method="POST">{{--Para que lo enviae a la URL la info del formulario--}}
                <input type="hidden" name="_method" value="PATCH">{{--cuando se remplaza algunas columnas del registro en la BD/ PUT remplaza todo--}}
            @else
                <form action="{{ route('documentos.store')}} " method="POST">{{--Para que lo enviae a la URL la info del formulario--}}  
            @endif

            @csrf {{--valida que el formulario eeste dentro de la app , crea un token , si se quita la sesion expira--}}
                <div class="form-group">
                    <label class="form-label">Usuario que Envia</label>
                    <input type="text" class="form-control"  placeholder="envia" value="" name="envia" >{{-- variable ?? '' evalua si esta setiado lo juetra si es nulo o no existe ?? --}}
                </div>

                <div class="form-group">
                    <label class="form-label">Usuario que recibe</label>
                    <select name="user_id" class="form-control" id="">
                        @foreach ($usuarios as $usuario)
                            <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">No oficio</label>
                    <input type="text" class="form-control"  placeholder="oficio" value=""name="no_oficio" >{{--old('') regresa o mantiene lo que ya habia escrito--}}
                
                </div>
                <div class="form-group">
                        <label class="form-label">fecha oficio</label>
                        <input type="date" class="form-control"  placeholder="" value=""name="fecha_oficio" min="2019-01-01" max="2019-05-30" >{{--old('') regresa o mantiene lo que ya habia escrito--}}
                    
                    </div>
                    
                            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                </form> 

            </div>
  </div>
</div>
    
@endsection
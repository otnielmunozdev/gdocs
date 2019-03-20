@extends('layouts.tabler')

@section('contenido')

<div class="page-header">
    <div class="page-title">
        AGREGAR DEPENDENCIA
    </div>
</div>
<div class="card">
    
<div class="card-header">
    <h3 class="card-title">Capturar dependencias</h3>
</div>
  <div class="card-body">


        <div class="col-md-8 offset-md-2 col-sm-12 ">

            @if (isset($dependencia))
                <form action="{{ route('dependencias.update',$dependencia->id)}} " method="POST">{{--Para que lo enviae a la URL la info del formulario--}}
                <input type="hidden" name="_method" value="PATCH">{{--cuando se remplaza algunas columnas del registro en la BD/ PUT remplaza todo--}}
            @else
                <form action="{{ route('dependencias.store')}} " method="POST">{{--Para que lo enviae a la URL la info del formulario--}}  
            @endif

            @csrf {{--valida que el formulario eeste dentro de la app , crea un token , si se quita la sesion expira--}}
                <div class="form-group">
                    <label class="form-label">Dependencia</label>
                <input type="text" class="form-control"  placeholder="Nombre de la dependencia" value="{{$dependencia->dependencia ?? ''}}" name="dependencia" required>{{-- variable ?? '' evalua si esta setiado lo juetra si es nulo o no existe ?? --}}
                  </div>
                  <div class="form-group">
                        <label class="form-label">Clave</label>
                  <input type="text" class="form-control"  placeholder="Clave" value="{{isset($dependencia) ? $dependencia->clave : ''}}"name="clave" required>
                      </div>
                      <div class="form-group">
                            <label class="form-label">estatus</label>
                            <select name="estatus" class="form-control">
                                <option value="Activa">Activa</option>
                                <option value="Inactiva">Inactiva</option>
                            </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                </form> 

            </div>
  </div>
</div>
    
@endsection
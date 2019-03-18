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
        <form action="{{ route('dependencias.store')}} " method="POST">{{--Para que lo enviae a la URL la info del formulario--}}
            @csrf {{--valida que el formulario eeste dentro de la app , crea un token , si se quita la sesion expira--}}
                <div class="form-group">
                    <label class="form-label">Dependencia</label>
                    <input type="text" class="form-control"  placeholder="Nombre de la dependencia" value=""name="dependencia" required>
                  </div>
                  <div class="form-group">
                        <label class="form-label">Clave</label>
                        <input type="text" class="form-control"  placeholder="Clave" value=""name="clave" required>
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
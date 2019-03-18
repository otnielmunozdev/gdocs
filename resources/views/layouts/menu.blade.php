<ul class="nav nav-tabs border-0 flex-column flex-lg-row">
        <li class="nav-item">
          <a href="{{ url('/') }}" class="nav-link active"><i class="fe fe-home"></i> Inicio</a>
        </li>
        
        <li class="nav-item">
          <a href="documentos" class="nav-link"><i class="fe fe-file-text"></i> Documentos</a>
        </li>

        <li class="nav-item dropdown">
          <a  class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dependencias
            </a>    
          <div  class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
            <a href="{{ route('dependencias.index') }}" class="dropdown-item ">Listado de Dependencias</a>
            <a href="{{ route('dependencias.create') }}" class="dropdown-item ">Crear Nueva Dependencia</a>
          </div>
        </li>
        
           
      </ul>
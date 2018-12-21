<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Estudio Juridico</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/" id="nav-Inicio">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/expedientes" id="nav-Expedientes">Expedientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/diligencias" id="nav-Diligencias">Diligencias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/modelos" id="nav-Modelos">Modelos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/clientes" id="nav-Clientes">Clientes</a>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ayuda
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Tutorial</a>
          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Acerca de</a>
        </div>
      </li>

    </ul>

    @if(Auth::user())

    <ul class="navbar-nav">

                <li class="nav-item active">
                    <div class="dropdown show">
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             {{ Auth::user()->primer_nombre }} {{ Auth::user()->apellido_paterno}} | {{ Auth::user()->nombre_usuario }} 
                        </a>


                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Ajustes</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout">Cerrar sesión</a>
                        </div>
                    </div>
                </li>
            </ul>

            @endif
   
  </div>
</nav>
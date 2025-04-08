<!-- Navbar con diseño estilo Halo -->
<nav class="navbar navbar-expand-lg navbar-dark halo-navbar fixed-top">
  <div class="container">
    <!-- Logo con borde redondeado y efecto de resplandor -->
    <a class="navbar-brand d-flex align-items-center" href="{{ route('inicio') }}">
      <img src="{{ asset('img/halo.jpeg') }}" alt="Logo Halo" class="halo-logo">
      <span class="halo-title ms-2">Halo </span>
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Abrir menú de navegación">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link halo-text" href="{{ route('inicio') }}">
            <i class="bi bi-house-door"></i> Inicio
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link halo-text" href="noticias">
            <i class="bi bi-newspaper"></i> Noticias
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle halo-text" href="#" id="navbarDropdown" role="button" 
            data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-controller"></i> Juegos
          </a>
          <ul class="dropdown-menu halo-dropdown" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item halo-text" href="{{ route('halo1') }}">
              <i class="bi bi-controller"></i> Halo: Combat Evolved</a></li>
            <li><a class="dropdown-item halo-text" href="{{ route('halo2') }}">
              <i class="bi bi-controller"></i> Halo 2</a></li>
            <li><a class="dropdown-item halo-text" href="{{ route('halo3') }}">
              <i class="bi bi-controller"></i> Halo 3</a></li>
            <li><a class="dropdown-item halo-text" href="{{ route('halo4') }}">
              <i class="bi bi-controller"></i> Halo 4</a></li>
            <li><a class="dropdown-item halo-text" href="{{ route('halo5') }}">
              <i class="bi bi-controller"></i> Halo 5: Guardians</a></li>
          </ul>
        </li>
      </ul>
      
      <form class="d-flex ms-3" role="search">
        <input class="form-control me-2 halo-search" type="search" placeholder="Buscar..." aria-label="Buscar">
        <button class="btn btn-outline-success halo-btn" type="submit">
          <i class="bi bi-search"></i>
        </button>
      </form>
    </div>
  </div>
</nav>

<!-- Agregar Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<!-- CSS Personalizado -->
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

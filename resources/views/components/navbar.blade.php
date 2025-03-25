<!-- Navbar con diseño estilo Halo -->
<nav class="navbar navbar-expand-lg navbar-dark halo-navbar">
  <div class="container">
    <!-- Logo con borde redondeado y efecto de resplandor -->
    <img src="{{ asset('img/halo.jpeg') }}" alt="Logo Halo" class="halo-logo">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <a class="navbar-brand halo-text" href="#">Halo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Abrir menú de navegación">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link halo-text" aria-current="page" href="inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link halo-text" href="noticias">Noticias</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle halo-text" href="#" id="navbarDropdown" role="button" 
            data-bs-toggle="dropdown" aria-expanded="false">
            Juegos
          </a>
          <ul class="dropdown-menu halo-dropdown" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item halo-text" href="halo1">Halo 1</a></li>
            <li><a class="dropdown-item halo-text" href="halo2">Halo 2</a></li>
            <li><a class="dropdown-item halo-text" href="halo3">Halo 3</a></li>
            <li><a class="dropdown-item halo-text" href="halo4">Halo 4</a></li>
            <li><a class="dropdown-item halo-text" href="halo5">Halo 5</a></li>
          </ul>
        </li>
      </ul>
      
      <form class="d-flex" role="search">
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


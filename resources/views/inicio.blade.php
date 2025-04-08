@extends('plantilla')

@section('contenido')

<!-- Estilos locales -->
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<!-- Hero Section -->
<header class="hero position-relative text-white text-center">
    <div class="overlay"></div>
    <div class="container position-relative py-5">
        <div class="hero-content">
            <h1 class="hero-title display-4 text-white">HALO </h1>
            <p class="hero-subtitle lead fs-4 mb-5">¡Únete a la batalla por el futuro de la humanidad en Halo Infinite!
            </p>
            <p class="hero-text mb-5">Embárcate en una aventura épica como el legendario Master Chief, enfrentándote a
                enemigos alienígenas en una guerra galáctica que decidirá el destino de la galaxia. Con una jugabilidad
                intensa, gráficos impresionantes y una historia que te mantendrá al borde de tu asiento, Halo no es solo
                un juego, ¡es una experiencia!</p>
            <div class="d-flex justify-content-center gap-3 mt-4 flex-wrap">
                <a href="#trailer" class="btn btn-primary btn-lg px-4 py-2">
                    <i class="fas fa-play-circle me-2"></i> Ver Tráiler
                </a>
                <a href="#game-modes" class="btn btn-outline-light btn-lg px-4 py-2">
                    <i class="fas fa-gamepad me-2"></i> Modos de Juego
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Modos de Juego -->
<section id="game-modes" class="section game-modes py-5 bg-dark text-white">
    <div class="container">
        <h2 class="section-title text-center mb-5">Modos de Juego</h2>
        <div class="row g-4">
            <!-- Modo 1 -->
            <div class="col-md-6 col-lg-4">
                <article class="mode-card h-100 shadow-lg">
                    <img src="{{ asset('img/campaña.jpeg') }}" alt="Campaña Cooperativa" class="img-fluid"
                        loading="lazy">
                    <div class="mode-card-body p-4">
                        <h3 class="h4">Campaña Cooperativa</h3>
                        <p class="mb-0">Explora el anillo Halo más grande jamás creado en una experiencia de mundo
                            abierto que puedes disfrutar con amigos.</p>
                    </div>
                </article>
            </div>

            <!-- Modo 2 -->
            <div class="col-md-6 col-lg-4">
                <article class="mode-card h-100 shadow-lg">
                    <img src="{{ asset('img/multi.jpeg') }}" alt="Multijugador" class="img-fluid" loading="lazy">
                    <div class="mode-card-body p-4">
                        <h3 class="h4">Multijugador</h3>
                        <p class="mb-0">Batallas intensas 4v4 y emocionantes Big Team Battle con nuevos mapas, armas y
                            mecánicas mejoradas.</p>
                    </div>
                </article>
            </div>

            <!-- Modo 3 -->
            <div class="col-md-6 col-lg-4">
                <article class="mode-card h-100 shadow-lg">
                    <img src="{{ asset('img/mapa.jpeg') }}" alt="Forge" class="img-fluid" loading="lazy">
                    <div class="mode-card-body p-4">
                        <h3 class="h4">Forge</h3>
                        <p class="mb-0">Crea, personaliza y comparte tus propios mapas con las herramientas más potentes
                            y versátiles hasta la fecha.</p>
                    </div>
                </article>
            </div>

            <!-- Modo 4 -->
            <div class="col-md-6 col-lg-4">
                <article class="mode-card h-100 shadow-lg">
                    <img src="{{ asset('img/tiro.jpeg') }}" alt="Tiroteo" class="img-fluid" loading="lazy">
                    <div class="mode-card-body p-4">
                        <h3 class="h4">Tiroteo (Firefight)</h3>
                        <p class="mb-0">Modo cooperativo donde tú y tus amigos deben defenderse de oleadas de enemigos
                            cada vez más desafiantes.</p>
                    </div>
                </article>
            </div>

            <!-- Modo 5 -->
            <div class="col-md-6 col-lg-4">
                <article class="mode-card h-100 shadow-lg">
                    <img src="{{ asset('img/campa.jpeg') }}" alt="Campaña" class="img-fluid" loading="lazy">
                    <div class="mode-card-body p-4">
                        <h3 class="h4">Campaña Individual</h3>
                        <p class="mb-0">Vive la épica historia del Jefe Maestro en una aventura llena de acción,
                            misterio y descubrimientos.</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="mode-card h-100 shadow-lg">
                    <img src="{{ asset('img/cap.jpeg') }}" alt="Multijugador " class="img-fluid" loading="lazy">
                    <div class="mode-card-body p-4">
                        <h3 class="h4">Multijugador de Halo 2</h3>
                        <p class="mb-0">El Multijugador de Halo 2 permite a los amigos encontrarse, jugar juntos y
                            avanzar por el mundo Halo 2 como un grupo. Puedes jugar partidas multijugador con tus amigos
                            mediante de pantalla dividida</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

            <!-- Características principales -->
<div class="container my-5">
    <section id="features" class="section">
        <h2 class="mb-5 text-center">Características principales</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card p-4 text-center shadow-lg rounded">
                    <i class="bi bi-person-check fs-1 mb-3"></i>
                    <h3 class="h5">Multijugador Épico</h3>
                    <p>Intensas batallas con nuevos mapas y modos de juego.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card p-4 text-center shadow-lg rounded">
                    <i class="bi bi-book fs-1 mb-3"></i>
                    <h3 class="h5">Historia Inmersiva</h3>
                    <p>Una de las narrativas más ambiciosas del universo Halo.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card p-4 text-center shadow-lg rounded">
                    <i class="bi bi-arrow-repeat fs-1 mb-3"></i>
                    <h3 class="h5">Actualizaciones Constantes</h3>
                    <p>Nuevos contenidos cada temporada para mantener la acción.</p>
                </div>
            </div>
        </div>
    </section>
</div>


<!-- Sección del Tráiler -->
<section id="trailer" class="py-5 bg-black text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="text-center mb-5">Tráiler Oficial</h2>
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/PyMlV5_HRWk?rel=0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
     <img src="{{ asset('img/pelica.ico') }}"  alt="Pelicade Halo" class="floating-image">
</section>

   
    



@endsection
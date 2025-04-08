@extends('plantilla')

@section('contenido')
<div class="container">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo: The Master Chief Collection</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Hero Section -->
    <div class="halo-simple-hero">
        <div class="hero-content text-center text-md-left">
            <h1 class="hero-title display-4 text-white">Halo: The Master Chief Collection</h1>
            <h2 class="hero-subtitle h3 text-white mb-4">La Conclusión de la Saga</h2>
            <p class="hero-description lead text-white mb-4">
                El siguiente capítulo, donde el Jefe Maestro enfrenta una nueva amenaza alienígena conocida como el
                Promethean, mientras descubre más sobre su propio origen.
            </p>
            <div class="halo-cta-buttons">
                <a href="#" class="btn btn-primary btn-lg">Ver Tráiler</a>
                <a href="#" class="btn btn-outline-light btn-lg ml-3">Más Info</a>
            </div>
        </div>


        <div class="col-lg-6 mt-4">
            <img src="{{ asset('img/halo4.jpeg') }}" alt="Halo: The Master Chief Collection"
                class="img-fluid rounded shadow-lg">
        </div>

    </div>
</div>
<!-- Game Features Section -->
<div class="game-features container text-center mt-5">
    <h3 class="section-title mb-4">Características Principales</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="feature-card p-4 text-center">
                <div class="feature-icon">🎮</div>
                <h4>Modo Campaña</h4>
                <p>Historia épica jugable en cooperativo para 2 jugadores.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card p-4 text-center">
                <div class="feature-icon">⚔️</div>
                <h4>Multijugador</h4>
                <p>Modos competitivos innovadores que definieron el género.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card p-4 text-center">
                <div class="feature-icon">🦖</div>
                <h4>Doble Historia</h4>
                <p>Juega como el Jefe Maestro y el Arbiter en campañas entrelazadas.</p>
            </div>
        </div>
    </div>
</div>
<img src="{{ asset('img/pelica.ico') }}" alt="Pelicade Halo" class="floating-image">
@endsection
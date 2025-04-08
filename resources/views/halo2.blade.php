@extends('plantilla')

@section('contenido')
<div class="container">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo 2</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Hero Section -->
    <div class="halo-simple-hero d-flex flex-column flex-md-row align-items-center text-center text-md-left">
        <div class="hero-content">
            <h1 class="display-4 text-white">Halo 2</h1>
            <h2 class="h3 text-white mb-4">La Guerra Continúa</h2>
            <p class="lead text-white mb-4">
                Lucha para salvar la humanidad y descubre el destino del Covenant en la épica secuela de Halo.
            </p>


            <div class="halo-cta-buttons">
                <a href="#" class="btn btn-primary btn-lg">Ver Tráiler</a>
                <a href="#" class="btn btn-outline-light btn-lg ml-3">Más Info</a>
            </div>
        </div>
        <div class="col-lg-6">
            <img src="{{ asset('img/halo21.jpeg') }}" alt="Halo 2" class="img-fluid rounded shadow-lg">
        </div>
    </div>
    <img src="{{ asset('img/pelica.ico') }}" alt="Película de Halo" class="floating-image">
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
@endsection
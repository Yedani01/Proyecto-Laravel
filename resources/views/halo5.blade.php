@extends('plantilla')

@section('contenido')
<div class="container">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo: The Master Chief Collection</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Hero Section -->
    <div class="halo-simple-hero d-flex flex-column flex-md-row align-items-center text-center text-md-left">
        <div class="hero-content">
            <h1 class="display-4 text-white">Halo: The Master Chief Collection</h1>
            <h2 class="h3 text-white mb-4">La Experiencia Definitiva</h2>
            <p class="lead text-white mb-4">
                La colección completa de la saga del Jefe Maestro, remasterizada y unificada. Incluye Halo: Reach, Halo: CE Anniversary, Halo 2: Anniversary, Halo 3, Halo 3: ODST y Halo 4.
            </p>
            <div class="halo-cta-buttons">
                <a href="#" class="btn btn-primary btn-lg">Ver Tráiler</a>
                <a href="#" class="btn btn-outline-light btn-lg ml-3">Más Info</a>
            </div>
        </div>
        <div class="col-lg-6">
            <img src="{{ asset('img/halo5.jpeg') }}" alt="Halo: The Master Chief Collection" class="img-fluid rounded shadow-lg">
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
                <h4>6 Juegos en 1</h4>
                <p>Toda la saga principal de Halo en una sola colección, con más de 120 mapas multijugador.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card p-4 text-center">
                <div class="feature-icon">🔄</div>
                <h4>Remasterizaciones</h4>
                <p>Halo 1 y 2 con gráficos 4K/60FPS y opción de cambiar entre clásico y remasterizado.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card p-4 text-center">
                <div class="feature-icon">🏆</div>
                <h4>Contenido Unificado</h4>
                <p>Logros, estadísticas y progreso compartidos entre todos los títulos.</p>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('plantilla')

@section('contenido')
<div class="container">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo 3: ODST</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Hero Section -->
    <div class="halo-simple-hero d-flex flex-column flex-md-row align-items-center text-center text-md-left">
        <div class="hero-content">
            <h1 class="display-4 text-white">Halo 3: ODST</h1>
            <p class="lead text-white mb-4">
                Halo 3 es un videojuego de disparos en primera persona desarrollado por Bungie y publicado por Microsoft
                en 2007 para Xbox 360. Es la tercera entrega de la trilogía original de Halo y continúa la historia de
                Halo 2, con el Jefe Maestro como protagonista.
            </p>
            <p class="lead text-white mb-4">En esta entrega, la humanidad se encuentra al borde de la extinción debido a la guerra contra el
                Covenant, una alianza de razas alienígenas fanáticas que buscan activar los anillos Halo para provocar
                un exterminio masivo. Mientras tanto, los Flood, una plaga parasitaria, se extienden amenazando con
                consumir toda la galaxia.</p>

            <p class="lead text-white mb-4">El Jefe Maestro, acompañado por el Sargento Johnson, el Inquisidor y otros aliados, debe evitar que el
                Covenant active el anillo Halo en la Tierra y frenar la propagación de los Flood. La historia culmina en
                la instalación Halo 04B, donde el protagonista arriesga todo para destruir a los Flood y detener la
                amenaza de los anillos.</p>
            <div class="halo-cta-buttons">
                <a href="#" class="btn btn-primary btn-lg">Ver Tráiler</a>
                <a href="#" class="btn btn-outline-light btn-lg ml-3">Más Info</a>
            </div>
        </div>
        <div class="col-lg-6">
            <img src="{{ asset('img/halo3.jpg') }}" alt="Halo 3: ODST" class="img-fluid rounded shadow-lg">
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
                <div class="feature-icon">🪂</div>
                <h4>Campaña ODST</h4>
                <p>Una experiencia más táctica y narrativa con los soldados de élite.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card p-4 text-center">
                <div class="feature-icon">🌃</div>
                <h4>Nueva Mombasa Nocturna</h4>
                <p>Explora la ciudad devastada con un ambiente único y misterioso.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card p-4 text-center">
                <div class="feature-icon">🎵</div>
                <h4>Banda Sonora</h4>
                <p>Partitura jazzística inolvidable que define la atmósfera del juego.</p>
            </div>
        </div>
    </div>
</div>
@endsection
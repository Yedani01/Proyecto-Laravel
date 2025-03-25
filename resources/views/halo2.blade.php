@extends('plantilla')

@section('contenido')
<div class="container">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo 2</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Halo 2</h1>
            <h2 class="hero-subtitle">La Guerra Continúa</h2>
            <p class="hero-description">Lucha para salvar la humanidad y descubre el destino del Covenant en la épica
                secuela de Halo. Únete al Jefe Maestro y el Arbiter en una batalla por el futuro de la galaxia.</p>
        </div>
        <div class="hero-image">
            <img src="{{ asset('img/halo21.jpeg') }}">
        </div>
    </div>
</div>

@endsection

@extends('plantilla')

@section('contenido')
<div class="container">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo: The Master Chief Collection</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Halo: The Master Chief Collection</h1>
            <h2 class="hero-subtitle">La Conclusión de la Saga</h2>
            <p class="hero-description">
            El siguiente capítulo, donde el Jefe Maestro enfrenta una nueva amenaza alienígena conocida como el Promethean, mientras descubre más sobre su propio origen.
            </p>
        </div>
        <div class="hero-image">
            <img src="{{ asset('img/halo4.jpeg') }}" alt="Halo: The Master Chief Collection" class="img-fluid">
        </div>
    </div>
</div>

@endsection

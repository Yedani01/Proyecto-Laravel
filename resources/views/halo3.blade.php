@extends('plantilla')

@section('contenido')
<div class="container">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo 3</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-content">
            <h1 class="hero-title"> Halo 3: ODST</h1>
            <h2 class="hero-subtitle">La Conclusión de la Saga</h2>
            <p class="hero-description">El destino de la humanidad está en juego. Únete al Jefe Maestro y al resto de la resistencia en una lucha épica contra el Covenant y las fuerzas del Flood para salvar la galaxia.</p>
        </div>
        <div class="hero-image">
            <img src="{{ asset('img/halo3.jpg') }}" alt="Halo 3" class="img-fluid">
        </div>
    </div>
</div>

@endsection

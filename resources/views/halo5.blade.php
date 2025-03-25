@extends('plantilla')

@section('contenido')
<div class="container">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo 5: Guardians</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Halo 5: Guardians</h1>
            <h2 class="hero-subtitle">El Regreso del Jefe Maestro</h2>
            <p class="hero-description">  La historia se centra en la desaparición del Jefe Maestro y la misión para encontrarlo.</p>

              
        </div>
        <div class="hero-image">
            <img src="{{ asset('img/halo5.jpeg') }}" alt="Halo 5: Guardians" class="img-fluid">
        </div>
    </div>
</div>

@endsection

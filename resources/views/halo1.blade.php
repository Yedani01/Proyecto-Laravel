@extends('plantilla')

@section('contenido')
<div class="container">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo: Combat Evolved</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Halo: Combat Evolved</h1>
            <h2 class="hero-subtitle">Campaña Clásica</h2>
            <p class="hero-description">Revive la aventura que lo inició todo. Enfréntate al Covenant en el misterioso mundo de Halo y descubre sus secretos.</p>
            
        </div>
        <div class="hero-image">
            <img src="{{ asset('img/halo123.jpeg') }}" alt="Halo: Combat Evolved" class="img-fluid">
        </div>
    </div>
</div>

@endsection


  
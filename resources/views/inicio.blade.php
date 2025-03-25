@extends('plantilla')

@section('contenido')

<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300;700&display=swap"
    rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<!-- Hero Section -->
<div class="hero">
    <div class="overlay"></div>
    <div class="content">
        <h1 class="display-3">HALO</h1>
        <p class="lead">¡Únete a la batalla por el futuro de la humanidad en Halo! Embárcate en una aventura épica como
            el legendario Master Chief, enfrentándote a enemigos alienígenas en una guerra galáctica que decidirá el
            destino de la galaxia. Con una jugabilidad intensa, gráficos impresionantes y una historia que te mantendrá
            al borde de tu asiento, Halo no es solo un juego, ¡es una experiencia! Prepárate para salvar el universo,
            personaliza tu armamento y demuestra tu valía en el campo de batalla. ¡La guerra está en marcha, y el futuro
            está en tus manos!</p>

    </div>
</div>

<!-- Características principales -->
<div class="container">
    <section id="features" class="section">
        <h2 class="mb-5 text-center">Características principales</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card">
                  
                    <h3>Multijugador Épico</h3>
                    <p>Intensas batallas con nuevos mapas y modos de juego.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                   
                    <h3>Historia Inmersiva</h3>
                    <p>Una de las narrativas más ambiciosas del universo Halo.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                  
                    <h3>Actualizaciones Constantes</h3>
                    <p>Nuevos contenidos cada temporada para mantener la acción.</p>
                </div>
            </div>
        </div>
    </section>
</div>



<!-- Tráiler Oficial -->
<div class="container my-5">
    <h2 class="text-center mb-4">Tráiler Oficial</h2>
    <div class="video-container">
        <iframe src="https://www.youtube.com/embed/PyMlV5_HRWk" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

@endsection
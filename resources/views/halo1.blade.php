@extends('plantilla')

@section('contenido')


<div class="halo-simple-container">
    <!-- Hero Section Simple -->
    <section class="halo-simple-hero">
        <div class="halo-hero-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="halo-hero-content">
                        <h1 class="hero-title display-4 text-white">HALO: COMBAT EVOLVED</h1>
                        <p class="halo-subtitle">La leyenda comienza aquí</p>
                        <p class="halo-description">Revive el juego que revolucionó los shooters en primera persona. Enfrenta al Covenant y descubre los secretos del anillo Halo.</p>
                        
                        <div class="halo-cta-buttons">
                            <a href="#" class="btn btn-primary btn-lg">Ver Tráiler</a>
                            <a href="#" class="btn btn-outline-light btn-lg ml-3">Más Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="halo-hero-image">
                        <img src="{{ asset('img/cover.jpeg') }}" alt="Halo Cover" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="halo-features py-5">
        <div class="container">
        <h3 class="section-title mb-4 ">Características Principales</h3>
            
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="feature-card p-4 text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="feature-icon">🏕️</div>
                        <h3>Campaña Épica</h3>
                        <p>10 misiones llenas de acción y narrativa inmersiva.</p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="feature-card p-4 text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-gun"></i>
                        </div>
                        <div class="feature-icon">🗡️</div>
                        <h3>Armas Icónicas</h3>

                        <p>Desde la Pistola M6D hasta la Espada Energética.</p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="feature-card p-4 text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="feature-icon">⚔️</div>
                        <h3>Multijugador</h3>
                       
                        <p>Batallas clásicas en mapas memorables.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<img src="{{ asset('img/pelica.ico') }}"  alt="Pelicade Halo" class="floating-image">

   
@endsection
@extends('layouts.app')

@section('content')
<!-- Carrusel Principal -->
<div class="container-fluid px-0 mb-5 rounded-3 overflow-hidden shadow-sm">
    <div id="homeCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            
            <div class="carousel-item active" data-bs-interval="5000">
                <div class="position-relative" style="height: 500px;">
                    <div class="w-100 h-100 bg-dark opacity-50 position-absolute top-0 start-0 z-1"></div>
                    <img src="https://cloudfront-us-east-1.images.arcpublishing.com/elespectador/NWP7GPUFRRAMFJ6MG2SR3E6X5Q.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Sena Tecnologico">
                </div>
                <div class="carousel-caption d-none d-md-block z-2 mb-4">
                    <h1 class="display-4 fw-bold text-uppercase" style="color: #39a900; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Admin SENA</h1>
                    <p class="fs-4 fw-medium text-white" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.8);">Bienvenido al Panel de Administración y Gestión de Procesos Académicos.</p>
                    <a href="/area/create" class="btn btn-light fw-bold px-4 py-2 mt-2">Comenzar Registro</a>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="5000">
                <div class="position-relative" style="height: 500px;">
                    <div class="w-100 h-100 bg-dark opacity-50 position-absolute top-0 start-0 z-1"></div>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ14fZqlK0d5MU4DCczAlaz2GSEbXVkR933WT-Ww10Ofg&s=10" class="d-block w-100 h-100 object-fit-cover" alt="Formacion Profesional">
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="5000">
                <div class="position-relative" style="height: 500px;">
                    <div class="w-100 h-100 bg-dark opacity-50 position-absolute top-0 start-0 z-1"></div>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-y3IrIQrXYSMyTjMB_PfP8wVQyjqpJ7aqJ_gI7uKVMw&s=10" class="d-block w-100 h-100 object-fit-cover" alt="Gestion de Aprendices">
                </div>
            </div>

        </div>

        <button class="carousel-control-prev z-3" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next z-3" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>

<!-- Sección de Anuncios / Módulos debajo del Carrusel -->
<div class="container my-5">
    <div class="row text-center mb-4">
        <div class="col-12">
            <h2 class="fw-bold text-success">Módulos del Sistema</h2>
            <p class="text-muted fs-5">Accede rápidamente a las secciones principales de gestión académica</p>
        </div>
    </div>

    <div class="row g-4">
        <!-- Tarjeta 1: Áreas -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 rounded-3">
                <div class="card-body text-center p-4">
                    <div class="bg-success-subtle text-success rounded-circle d-inline-flex p-3 mb-3">
                        <i class="bi bi-grid-fill fs-3"></i>
                    </div>
                    <h4 class="fw-bold text-dark">Gestión de Áreas</h4>
                    <p class="text-muted small">Administra las diferentes áreas y dependencias institucionales disponibles en el centro.</p>
                    <a href="#" class="btn btn-outline-success btn-sm fw-semibold mt-2">Ver Áreas</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta 2: Centros -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 rounded-3">
                <div class="card-body text-center p-4">
                    <div class="bg-success-subtle text-success rounded-circle d-inline-flex p-3 mb-3">
                        <i class="bi bi-building fs-3"></i>
                    </div>
                    <h4 class="fw-bold text-dark">Centros de Formación</h4>
                    <p class="text-muted small">Controla la información y la ubicación de los centros vinculados a la red.</p>
                    <a href="#" class="btn btn-outline-success btn-sm fw-semibold mt-2">Ver Centros</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta 3: Instructores -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 rounded-3">
                <div class="card-body text-center p-4">
                    <div class="bg-success-subtle text-success rounded-circle d-inline-flex p-3 mb-3">
                        <i class="bi bi-people-fill fs-3"></i>
                    </div>
                    <h4 class="fw-bold text-dark">Instructores y Equipos</h4>
                    <p class="text-muted small">Gestiona el personal docente a cargo de los procesos formativos y técnicos.</p>
                    <a href="#" class="btn btn-outline-success btn-sm fw-semibold mt-2">Ver Instructores</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
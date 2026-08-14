@extends('layouts.app')

@section('content')
<!-- Banner de Encabezado -->
<div class="bg-success text-white py-5 mb-5 shadow-sm">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-2">¿Quiénes Somos?</h1>
        <p class="fs-5 opacity-90 mb-0">Servicio Nacional de Aprendizaje - SENA</p>
    </div>
</div>

<div class="container mb-5">
    <!-- Resumen Institucional -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10 text-center">
            <h2 class="fw-bold text-success mb-3">Formando el Futuro de Colombia</h2>
            <p class="lead text-secondary">
                El SENA es un establecimiento público encargado de invertir en el desarrollo técnico y tecnológico de los trabajadores colombianos, ofreciendo y ejecutando la formación profesional integral para la incorporación de las personas en actividades productivas que contribuyan al desarrollo social, económico y tecnológico del país.
            </p>
        </div>
    </div>

    <!-- Misión y Visión (Tarjetas Destacadas) -->
    <div class="row g-4 mb-5">
        <!-- Misión -->
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm rounded-3">
                <div class="card-body p-4 border-start border-5 border-success">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-success-subtle text-success rounded-circle p-3 me-3">
                            <i class="bi bi-compass-fill fs-3"></i>
                        </div>
                        <h3 class="fw-bold text-dark mb-0">Misión</h3>
                    </div>
                    <p class="text-muted fs-6 lh-lg mb-0">
                        El SENA está encargado de cumplir la función que le corresponde al Estado de invertir en el desarrollo técnico y tecnológico de los trabajadores colombianos; ofreciendo y ejecutando la formación profesional integral, para la incorporación y el desarrollo de las personas en actividades productivas que contribuyan al desarrollo social, económico y tecnológico del país.
                    </p>
                </div>
            </div>
        </div>

        <!-- Visión -->
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm rounded-3">
                <div class="card-body p-4 border-start border-5 border-success">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-success-subtle text-success rounded-circle p-3 me-3">
                            <i class="bi bi-eye-fill fs-3"></i>
                        </div>
                        <h3 class="fw-bold text-dark mb-0">Visión</h3>
                    </div>
                    <p class="text-muted fs-6 lh-lg mb-0">
                        En el año 2026, el SENA será una organización de conocimiento para todos los colombianos, innovadora en sus procesos formativos y de emprendimiento, altamente alineada con las necesidades de los sectores productivos y del trabajo, contribuyendo a la productividad, competitividad y equidad social del país.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Valores Institucionales -->
    <div class="bg-light rounded-3 p-4 p-md-5 mb-5 shadow-sm">
        <div class="text-center mb-4">
            <h3 class="fw-bold text-success">Valores Institucionales</h3>
            <p class="text-muted">Principios fundamentales que guían nuestras acciones diarias</p>
        </div>

        <div class="row g-4 text-center">
            <div class="col-md-3 col-6">
                <div class="p-3">
                    <i class="bi bi-shield-check text-success fs-1 mb-2"></i>
                    <h5 class="fw-bold text-dark">Respeto</h5>
                    <small class="text-muted">Reconocimiento del valor de la persona y de la comunidad.</small>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="p-3">
                    <i class="bi bi-award-fill text-success fs-1 mb-2"></i>
                    <h5 class="fw-bold text-dark">Honestidad</h5>
                    <small class="text-muted">Actuamos siempre con coherencia, transparencia y verdad.</small>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="p-3">
                    <i class="bi bi-check-circle-fill text-success fs-1 mb-2"></i>
                    <h5 class="fw-bold text-dark">Compromiso</h5>
                    <small class="text-muted">Cumplimos con responsabilidad los objetivos institucionales.</small>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="p-3">
                    <i class="bi bi-lightbulb-fill text-success fs-1 mb-2"></i>
                    <h5 class="fw-bold text-dark">Innovación</h5>
                    <small class="text-muted">Promovemos la creatividad y la adaptación tecnológica constante.</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Red de Formación e Innovación -->
    <div class="row g-4 align-items-center">
        <div class="col-lg-6">
            <h3 class="fw-bold text-success mb-3">Red de Formación y Sennova</h3>
            <p class="text-muted lh-lg">
                El SENA no solo brinda educación gratuita en programas técnicos y tecnológicos, sino que a través del Sistema de Investigación, Desarrollo Tecnológico e Innovación (SENNOVA), impulsa la capacidad investigativa de aprendices e instructores en todo el territorio nacional.
            </p>
            <ul class="list-unstyled">
                <li class="mb-2 text-dark"><i class="bi bi-check-lg text-success fw-bold me-2"></i> Presencia en 32 departamentos de Colombia.</li>
                <li class="mb-2 text-dark"><i class="bi bi-check-lg text-success fw-bold me-2"></i> Formación adaptada a las necesidades de la industria local.</li>
                <li class="mb-2 text-dark"><i class="bi bi-check-lg text-success fw-bold me-2"></i> Fomento al emprendimiento a través del Fondo Emprender.</li>
            </ul>
        </div>
    </div>
</div>
@endsection
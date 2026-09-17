@extends('layouts.app')

@section('content')

<!-- =========================================================
     1. HERO PRINCIPAL
========================================================= -->

<div class="container-fluid px-0 mb-5">

    <div id="homeCarousel"
         class="carousel slide carousel-fade shadow-sm"
         data-bs-ride="carousel">

        <!-- INDICADORES -->
        <div class="carousel-indicators">

            <button type="button"
                    data-bs-target="#homeCarousel"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1">
            </button>

            <button type="button"
                    data-bs-target="#homeCarousel"
                    data-bs-slide-to="1"
                    aria-label="Slide 2">
            </button>

            <button type="button"
                    data-bs-target="#homeCarousel"
                    data-bs-slide-to="2"
                    aria-label="Slide 3">
            </button>

        </div>


        <!-- CARRUSEL -->
        <div class="carousel-inner">

            <!-- SLIDE 1 -->
            <div class="carousel-item active"
                 data-bs-interval="5000">

                <div class="position-relative"
                     style="height: 500px;">

                    <div class="w-100 h-100 bg-dark opacity-50 position-absolute top-0 start-0 z-1">
                    </div>

                    <img src="https://cloudfront-us-east-1.images.arcpublishing.com/elespectador/NWP7GPUFRRAMFJ6MG2SR3E6X5Q.jpg"
                         class="d-block w-100 h-100 object-fit-cover"
                         alt="Sena Tecnologico">

                </div>


                <div class="carousel-caption d-none d-md-block z-2 mb-4">

                    <h1 class="display-4 fw-bold text-uppercase"
                        style="color: #39a900;
                               text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">

                        Admin SENA

                    </h1>

                    <p class="fs-4 fw-medium text-white"
                       style="text-shadow: 1px 1px 3px rgba(0,0,0,0.8);">

                        Bienvenido al Panel de Administración y
                        Gestión de Procesos Académicos.

                    </p>

                    <a href="/area/create"
                       class="btn btn-light fw-bold px-4 py-2 mt-2">

                        Comenzar Registro

                    </a>

                </div>

            </div>


            <!-- SLIDE 2 -->
            <div class="carousel-item"
                 data-bs-interval="5000">

                <div class="position-relative"
                     style="height: 500px;">

                    <div class="w-100 h-100 bg-dark opacity-50 position-absolute top-0 start-0 z-1">
                    </div>

                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ14fZqlK0d5MU4DCczAlaz2GSEbXVkR933WT-Ww10Ofg&s=10"
                         class="d-block w-100 h-100 object-fit-cover"
                         alt="Formacion Profesional">

                </div>

            </div>


            <!-- SLIDE 3 -->
            <div class="carousel-item"
                 data-bs-interval="5000">

                <div class="position-relative"
                     style="height: 500px;">

                    <div class="w-100 h-100 bg-dark opacity-50 position-absolute top-0 start-0 z-1">
                    </div>

                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-y3IrIQrXYSMyTjMB_PfP8wVQyjqpJ7aqJ_gI7uKVMw&s=10"
                         class="d-block w-100 h-100 object-fit-cover"
                         alt="Gestion de Aprendices">

                </div>

            </div>

        </div>


        <!-- BOTÓN ANTERIOR -->
        <button class="carousel-control-prev z-3"
                type="button"
                data-bs-target="#homeCarousel"
                data-bs-slide="prev">

            <span class="carousel-control-prev-icon"
                  aria-hidden="true">
            </span>

            <span class="visually-hidden">
                Anterior
            </span>

        </button>


        <!-- BOTÓN SIGUIENTE -->
        <button class="carousel-control-next z-3"
                type="button"
                data-bs-target="#homeCarousel"
                data-bs-slide="next">

            <span class="carousel-control-next-icon"
                  aria-hidden="true">
            </span>

            <span class="visually-hidden">
                Siguiente
            </span>

        </button>

    </div>

</div>



<!-- =========================================================
     2. BIENVENIDA / RESUMEN
========================================================= -->

<div class="container mb-5">

    <div class="row align-items-center">

        <div class="col-lg-8">

            <span class="badge bg-success px-3 py-2 mb-2">
                ADMIN SENA
            </span>

            <h2 class="fw-bold text-dark">
                Panel de Gestión Académica
            </h2>

            <p class="text-muted fs-5 mb-0">

                Administra de manera organizada la información
                relacionada con áreas, centros, cursos, programas,
                aprendices, instructores y demás procesos académicos.

            </p>

        </div>


        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">

            <a href="/programa/create"
               class="btn btn-success px-4 py-2 fw-bold">

                <i class="bi bi-plus-lg me-2"></i>

                Nuevo Programa

            </a>

        </div>

    </div>

</div>



<!-- =========================================================
     3. ACCESOS PRINCIPALES
========================================================= -->

<div class="container mb-5">

    <div class="row mb-4">

        <div class="col-12">

            <h3 class="fw-bold text-dark mb-1">
                Accesos principales
            </h3>

            <p class="text-muted">
                Consulta rápidamente las principales herramientas
                administrativas.
            </p>

        </div>

    </div>


    <div class="row g-4">

        <!-- ÁREAS -->
        <div class="col-lg-3 col-md-6">

            <a href="/area/list"
               class="text-decoration-none">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body p-4">

                        <div class="d-flex justify-content-between">

                            <div class="bg-success-subtle text-success rounded-3 p-3">

                                <i class="bi bi-grid-fill fs-3"></i>

                            </div>

                            <i class="bi bi-arrow-up-right text-muted"></i>

                        </div>

                        <h5 class="fw-bold text-dark mt-4">
                            Gestión de Áreas
                        </h5>

                        <p class="text-muted small mb-0">

                            Administra las diferentes áreas y
                            dependencias institucionales.

                        </p>

                    </div>

                </div>

            </a>

        </div>


        <!-- CENTROS -->
        <div class="col-lg-3 col-md-6">

            <a href="/trainingcenter/list"
               class="text-decoration-none">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body p-4">

                        <div class="d-flex justify-content-between">

                            <div class="bg-success-subtle text-success rounded-3 p-3">

                                <i class="bi bi-building fs-3"></i>

                            </div>

                            <i class="bi bi-arrow-up-right text-muted"></i>

                        </div>

                        <h5 class="fw-bold text-dark mt-4">
                            Centros de Formación
                        </h5>

                        <p class="text-muted small mb-0">

                            Controla la información y ubicación
                            de los centros vinculados.

                        </p>

                    </div>

                </div>

            </a>

        </div>


        <!-- CURSOS -->
        <div class="col-lg-3 col-md-6">

            <a href="/course/list"
               class="text-decoration-none">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body p-4">

                        <div class="d-flex justify-content-between">

                            <div class="bg-success-subtle text-success rounded-3 p-3">

                                <i class="bi bi-book-fill fs-3"></i>

                            </div>

                            <i class="bi bi-arrow-up-right text-muted"></i>

                        </div>

                        <h5 class="fw-bold text-dark mt-4">
                            Cursos
                        </h5>

                        <p class="text-muted small mb-0">

                            Gestiona los cursos y procesos
                            de formación.

                        </p>

                    </div>

                </div>

            </a>

        </div>


        <!-- APRENDICES -->
        <div class="col-lg-3 col-md-6">

            <a href="/apprentice/list"
               class="text-decoration-none">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body p-4">

                        <div class="d-flex justify-content-between">

                            <div class="bg-success-subtle text-success rounded-3 p-3">

                                <i class="bi bi-people-fill fs-3"></i>

                            </div>

                            <i class="bi bi-arrow-up-right text-muted"></i>

                        </div>

                        <h5 class="fw-bold text-dark mt-4">
                            Aprendices
                        </h5>

                        <p class="text-muted small mb-0">

                            Administra la información de
                            los aprendices.

                        </p>

                    </div>

                </div>

            </a>

        </div>

    </div>

</div>



<!-- =========================================================
     4. PROGRAMAS Y NOVEDADES
========================================================= -->

<div class="bg-light py-5 my-5">

    <div class="container">

        <div class="row align-items-end mb-4">

            <div class="col-md-8">

                <span class="badge bg-success px-3 py-2 text-uppercase fw-bold mb-2">

                    Convocatorias & Novedades

                </span>

                <h2 class="fw-bold text-dark mb-1">

                    Programas y Tecnólogos Destacados

                </h2>

                <p class="text-muted mb-0">

                    Información destacada para la gestión
                    académica del SENA.

                </p>

            </div>


            <div class="col-md-4 text-md-end mt-3 mt-md-0">

                <span class="text-muted small">

                    Inscripciones abiertas 2026

                </span>

            </div>

        </div>


        <div class="row g-4">


            <!-- =================================================
                 ADSO
            ================================================== -->

            <div class="col-lg-4 col-md-6">

                <div class="card h-100 border-0 shadow-sm overflow-hidden rounded-4">

                    <div class="position-relative">

                        <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=600&auto=format&fit=crop"
                             class="card-img-top object-fit-cover"
                             style="height: 200px;"
                             alt="Tecnólogo ADSO">

                        <span class="position-absolute top-0 end-0 bg-success text-white px-3 py-1 m-3 rounded-pill fw-bold small">

                            NUEVO

                        </span>

                    </div>


                    <div class="card-body p-4">

                        <h5 class="card-title fw-bold text-dark">

                            ADSO: Análisis y Desarrollo de Software

                        </h5>

                        <p class="card-text text-muted small mt-2">

                            Aprende lenguajes modernos (Laravel, React,
                            Python), bases de datos y desarrollo web
                            para conectarte con la industria tecnológica.

                        </p>

                    </div>


                    <div class="card-footer bg-white border-0 px-4 pb-4 pt-0 d-flex justify-content-between align-items-center">

                        <span class="badge bg-light text-dark border">

                            Virtual / Presencial

                        </span>

                        <a href="/course/create"
                           class="btn btn-dark btn-sm rounded-3 px-3">

                            Asignar Ficha

                        </a>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 CIBERSEGURIDAD
            ================================================== -->

            <div class="col-lg-4 col-md-6">

                <div class="card h-100 border-0 shadow-sm overflow-hidden rounded-4">

                    <div class="position-relative">

                        <img src="https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?q=80&w=600&auto=format&fit=crop"
                             class="card-img-top object-fit-cover"
                             style="height: 200px;"
                             alt="Ciberseguridad e IA">

                        <span class="position-absolute top-0 end-0 bg-primary text-white px-3 py-1 m-3 rounded-pill fw-bold small">

                            TENDENCIA

                        </span>

                    </div>


                    <div class="card-body p-4">

                        <h5 class="card-title fw-bold text-dark">

                            Ciberseguridad & Ciencia de Datos

                        </h5>

                        <p class="card-text text-muted small mt-2">

                            Nuevo programa enfocado en protección
                            de datos, servidores en la nube e integración
                            de modelos de IA aplicados a la empresa.

                        </p>

                    </div>


                    <div class="card-footer bg-white border-0 px-4 pb-4 pt-0 d-flex justify-content-between align-items-center">

                        <span class="badge bg-light text-dark border">

                            Presencial

                        </span>

                        <a href="/course/create"
                           class="btn btn-dark btn-sm rounded-3 px-3">

                            Asignar Ficha

                        </a>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 INFRAESTRUCTURA
            ================================================== -->

            <div class="col-lg-4 col-md-12">

                <div class="card h-100 border-0 shadow-sm bg-dark text-white rounded-4 p-2">

                    <div class="card-body p-4 d-flex flex-column justify-content-between">

                        <div>

                            <div class="d-flex align-items-center gap-2 mb-3">

                                <i class="bi bi-cpu-fill text-warning fs-3"></i>

                                <span class="text-warning fw-bold text-uppercase small">

                                    Infraestructura 2026

                                </span>

                            </div>


                            <h4 class="fw-bold text-white">

                                Modernización de Ambientes de Cómputo

                            </h4>


                            <p class="text-white-50 small mt-2">

                                Se han incorporado nuevos equipos de
                                cómputo para potenciar las prácticas
                                de desarrollo y redes en todos los
                                Centros de Formación.

                            </p>

                        </div>


                        <div class="mt-4 pt-3 border-top border-secondary">

                            <a href="/computer/create"
                               class="btn btn-success fw-bold w-100 rounded-3 py-2">

                                Registrar Equipos Nuevos

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



<!-- =========================================================
     5. SEGUNDO BLOQUE DE GESTIÓN
========================================================= -->

<div class="container my-5">

    <div class="row align-items-center mb-4">

        <div class="col-md-8">

            <span class="text-success fw-bold text-uppercase small">

                Administración académica

            </span>

            <h2 class="fw-bold text-dark mb-1">

                Más herramientas de gestión

            </h2>

            <p class="text-muted mb-0">

                Continúa administrando los diferentes procesos
                de la plataforma.

            </p>

        </div>

    </div>


    <div class="row g-4">


        <!-- INSTRUCTORES -->
        <div class="col-lg-4">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body p-4">

                    <div class="d-flex align-items-center gap-3 mb-3">

                        <div class="bg-success-subtle text-success rounded-3 p-3">

                            <i class="bi bi-person-workspace fs-3"></i>

                        </div>

                        <h5 class="fw-bold mb-0">

                            Instructores

                        </h5>

                    </div>

                    <p class="text-muted small">

                        Gestiona el personal docente encargado
                        de los procesos formativos y técnicos.

                    </p>

                    <a href="/teacher/list"
                       class="btn btn-outline-success btn-sm">

                        Ver Instructores

                    </a>

                </div>

            </div>

        </div>


        <!-- PROGRAMAS -->
        <div class="col-lg-4">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body p-4">

                    <div class="d-flex align-items-center gap-3 mb-3">

                        <div class="bg-success-subtle text-success rounded-3 p-3">

                            <i class="bi bi-mortarboard-fill fs-3"></i>

                        </div>

                        <h5 class="fw-bold mb-0">

                            Programas

                        </h5>

                    </div>

                    <p class="text-muted small">

                        Consulta y administra los programas
                        de formación disponibles.

                    </p>

                    <a href="/programa"
                       class="btn btn-outline-success btn-sm">

                        Ver Programas

                    </a>

                </div>

            </div>

        </div>


        <!-- OFERTAS -->
        <div class="col-lg-4">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body p-4">

                    <div class="d-flex align-items-center gap-3 mb-3">

                        <div class="bg-success-subtle text-success rounded-3 p-3">

                            <i class="bi bi-megaphone-fill fs-3"></i>

                        </div>

                        <h5 class="fw-bold mb-0">

                            Ofertas

                        </h5>

                    </div>

                    <p class="text-muted small">

                        Administra las ofertas de formación
                        disponibles para los aprendices.

                    </p>

                    <a href="/oferta"
                       class="btn btn-outline-success btn-sm">

                        Ver Ofertas

                    </a>

                </div>

            </div>

        </div>


        <!-- FICHAS -->
        <div class="col-lg-4">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body p-4">

                    <div class="d-flex align-items-center gap-3 mb-3">

                        <div class="bg-success-subtle text-success rounded-3 p-3">

                            <i class="bi bi-card-list fs-3"></i>

                        </div>

                        <h5 class="fw-bold mb-0">

                            Fichas

                        </h5>

                    </div>

                    <p class="text-muted small">

                        Administra las fichas asociadas a
                        los programas de formación.

                    </p>

                    <a href="/ficha"
                       class="btn btn-outline-success btn-sm">

                        Ver Fichas

                    </a>

                </div>

            </div>

        </div>


        <!-- AMBIENTES -->
        <div class="col-lg-4">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body p-4">

                    <div class="d-flex align-items-center gap-3 mb-3">

                        <div class="bg-success-subtle text-success rounded-3 p-3">

                            <i class="bi bi-pc-display-horizontal fs-3"></i>

                        </div>

                        <h5 class="fw-bold mb-0">

                            Ambientes

                        </h5>

                    </div>

                    <p class="text-muted small">

                        Gestiona los ambientes disponibles
                        para las actividades de formación.

                    </p>

                    <a href="/ambiente"
                       class="btn btn-outline-success btn-sm">

                        Ver Ambientes

                    </a>

                </div>

            </div>

        </div>


        <!-- NOTICIAS -->
        <div class="col-lg-4">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body p-4">

                    <div class="d-flex align-items-center gap-3 mb-3">

                        <div class="bg-success-subtle text-success rounded-3 p-3">

                            <i class="bi bi-newspaper fs-3"></i>

                        </div>

                        <h5 class="fw-bold mb-0">

                            Noticias

                        </h5>

                    </div>

                    <p class="text-muted small">

                        Publica y administra noticias y novedades
                        de los Centros de Formación.

                    </p>

                    <a href="/noticia"
                       class="btn btn-outline-success btn-sm">

                        Ver Noticias

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>



<!-- =========================================================
     6. CIERRE
========================================================= -->

<div class="container mb-5">

    <div class="card border-0 shadow-sm bg-success text-white rounded-4">

        <div class="card-body p-4 p-md-5">

            <div class="row align-items-center">

                <div class="col-md-8">

                    <span class="text-white-50 text-uppercase small fw-bold">

                        Admin SENA

                    </span>

                    <h3 class="fw-bold mt-2">

                        Gestión académica en un solo lugar

                    </h3>

                    <p class="mb-0 text-white-50">

                        Administra áreas, centros, cursos, programas,
                        ofertas, fichas, ambientes, aprendices e
                        instructores desde una plataforma centralizada.

                    </p>

                </div>


                <div class="col-md-4 text-md-end mt-4 mt-md-0">

                <div class="text-center py-5">

                <img
                    src="{{ asset('storage/images/AdminSena-logo.png') }}"
                    alt="AdminSena"
                    style="
                        width: 360px;
                        max-width: 100%;
                        object-fit: contain;
                    "
                >

                </div>

            </div>

        </div>

    </div>

</div>


@endsection
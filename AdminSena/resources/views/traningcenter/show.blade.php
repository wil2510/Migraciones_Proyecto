<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Registro - ¿Quiénes Somos?</title>
    <!-- CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-sena { background-color: #39a900 !important; }
        .text-sena { color: #39a900 !important; }
    </style>
</head>
<body class="bg-light">

    <!-- Navbar Principal Bootstrap -->
    <nav class="navbar navbar-expand navbar-dark bg-sena px-4">
        <div class="container-fluid">
            <div class="navbar-nav align-items-center gap-2">
                <a class="nav-link text-white fw-semibold" href="{{ url('/') }}">Inicio</a>
                <a class="nav-link text-white fw-semibold active" href="{{ route('quienes-somos.index') }}">¿Quienes Somos?</a>

                <!-- Desplegable Administración -->
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle text-dark fw-semibold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Administración
                    </button>
                    <ul class="dropdown-menu shadow">
                        <li><a class="dropdown-item" href="#">Inicio</a></li>
                        <li><a class="dropdown-item" href="#">Área</a></li>
                        <li><a class="dropdown-item" href="#">Centro</a></li>
                        <li><a class="dropdown-item" href="#">Equipos</a></li>
                        <li><a class="dropdown-item" href="#">Cursos</a></li>
                        <li><a class="dropdown-item" href="#">Instructores</a></li>
                        <li><a class="dropdown-item" href="#">Aprendices</a></li>
                    </ul>
                </div>

                <!-- Desplegable Ver Listas -->
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle text-dark fw-semibold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ver Listas
                    </button>
                    <ul class="dropdown-menu shadow">
                        <li><a class="dropdown-item" href="#">Áreas</a></li>
                        <li><a class="dropdown-item" href="#">Centros</a></li>
                        <li><a class="dropdown-item" href="#">Equipos</a></li>
                        <li><a class="dropdown-item" href="#">Cursos</a></li>
                        <li><a class="dropdown-item" href="#">Instructores</a></li>
                        <li><a class="dropdown-item" href="#">Aprendices</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Detalle de la Vista (Show) -->
    <div class="container py-5">
        <div class="card border-0 shadow-sm rounded-3 p-4 mx-auto" style="max-width: 750px;">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="badge bg-sena fs-6 px-3 py-2">Registro ID: #1</span>
                <span class="badge bg-success fs-6">Estado: Activo</span>
            </div>

            <h1 class="fw-bold text-sena mb-4">Misión</h1>

            <div class="mb-4">
                <h5 class="fw-bold text-muted mb-2">Descripción Completa</h5>
                <p class="fs-5 text-secondary lead">
                    Brindar una plataforma web integral, ágil e intuitiva que optimice la administración de programas, instructores, aprendices y recursos educativos, asegurando la eficiencia en la gestión académica de la institución.
                </p>
            </div>

            <div class="row g-3 mb-4 bg-light p-3 rounded-2 border">
                <div class="col-sm-6">
                    <small class="text-muted d-block">Fecha de creación</small>
                    <strong class="text-dark">14 de Agosto, 2026</strong>
                </div>
                <div class="col-sm-6">
                    <small class="text-muted d-block">Última actualización</small>
                    <strong class="text-dark">14 de Agosto, 2026</strong>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                <a href="{{ route('quienes-somos.admin') }}" class="btn btn-outline-secondary fw-semibold">
                    ← Volver al Panel Admin
                </a>
                <div class="d-flex gap-2">
                    <a href="{{ route('quienes-somos.edit', 1) }}" class="btn btn-warning fw-semibold">
                        Editar Registro
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
</body>
</html>
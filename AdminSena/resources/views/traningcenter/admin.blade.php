<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración - ¿Quiénes Somos?</title>
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
                <a class="nav-link text-white fw-semibold" href="{{ route('quienes-somos.index') }}">¿Quienes Somos?</a>

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

    <!-- Panel de Administración -->
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="h2 fw-bold text-sena mb-0">Panel de Administración: ¿Quiénes Somos?</h1>
                <p class="text-muted mb-0">Gestión interna de secciones institucionales</p>
            </div>
            <a href="{{ route('quienes-somos.create') }}" class="btn btn-success fw-semibold">
                + Crear Nuevo Registro
            </a>
        </div>

        <!-- Tabla de Registros en Bootstrap -->
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-sena text-white">
                            <tr>
                                <th scope="col" class="ps-4 py-3">ID</th>
                                <th scope="col" class="py-3">Título</th>
                                <th scope="col" class="py-3">Descripción Resumida</th>
                                <th scope="col" class="py-3">Estado</th>
                                <th scope="col" class="py-3 text-end pe-4">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4 fw-bold">1</td>
                                <td class="fw-semibold">Misión</td>
                                <td class="text-muted">Brindar una plataforma web integral, ágil e intuitiva...</td>
                                <td><span class="badge bg-success">Activo</span></td>
                                <td class="text-end pe-4">
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('quienes-somos.show', 1) }}" class="btn btn-outline-primary btn-sm">Ver</a>
                                        <a href="{{ route('quienes-somos.edit', 1) }}" class="btn btn-outline-warning btn-sm">Editar</a>
                                        <button class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Desea eliminar este registro?')">Eliminar</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4 fw-bold">2</td>
                                <td class="fw-semibold">Visión</td>
                                <td class="text-muted">Consolidarnos como la herramienta tecnológica estándar...</td>
                                <td><span class="badge bg-success">Activo</span></td>
                                <td class="text-end pe-4">
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('quienes-somos.show', 2) }}" class="btn btn-outline-primary btn-sm">Ver</a>
                                        <a href="{{ route('quienes-somos.edit', 2) }}" class="btn btn-outline-warning btn-sm">Editar</a>
                                        <button class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Desea eliminar este registro?')">Eliminar</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
</body>
</html>
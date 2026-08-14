<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración - ¿Quiénes Somos?</title>
    <!-- CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">

    <!-- Inclusión del Navbar de la aplicación -->
    @include('includes.navbar')

    <div class="container py-4">
        <!-- Encabezado de la Sección -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="h2 fw-bold text-success mb-1">Panel de Administración: ¿Quiénes Somos?</h1>
                <p class="text-muted mb-0">Gestión de la información institucional del SENA</p>
            </div>
            <a href="{{ route('quienes-somos.create') }}" class="btn btn-success fw-semibold">
                <i class="bi bi-plus-lg me-1"></i> Crear Registro
            </a>
        </div>

        <!-- Tabla de Registros -->
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-success text-white">
                            <tr>
                                <th scope="col" class="ps-4 py-3">#</th>
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
                                        <a href="{{ route('quienes-somos.show', 1) }}" class="btn btn-outline-primary btn-sm">
                                            <i class="bi bi-eye"></i> Ver
                                        </a>
                                        <a href="{{ route('quienes-somos.edit', 1) }}" class="btn btn-outline-warning btn-sm">
                                            <i class="bi bi-pencil"></i> Editar
                                        </a>
                                        <button class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Desea eliminar este registro?')">
                                            <i class="bi bi-trash"></i> Eliminar
                                        </button>
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
                                        <a href="{{ route('quienes-somos.show', 2) }}" class="btn btn-outline-primary btn-sm">
                                            <i class="bi bi-eye"></i> Ver
                                        </a>
                                        <a href="{{ route('quienes-somos.edit', 2) }}" class="btn btn-outline-warning btn-sm">
                                            <i class="bi bi-pencil"></i> Editar
                                        </a>
                                        <button class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Desea eliminar este registro?')">
                                            <i class="bi bi-trash"></i> Eliminar
                                        </button>
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
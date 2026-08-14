<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar - ¿Quiénes Somos?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-sena { background-color: #39a900 !important; }
        .text-sena { color: #39a900 !important; }
    </style>
</head>
<body class="bg-light">

    <!-- Navbar Bootstrap -->
    <nav class="navbar navbar-expand navbar-dark bg-sena px-4">
        <div class="container-fluid">
            <div class="navbar-nav align-items-center gap-2">
                <a class="nav-link text-white fw-semibold" href="{{ url('/') }}">Inicio</a>
                <a class="nav-link text-white fw-semibold active" href="{{ route('quienes-somos.index') }}">¿Quienes Somos?</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="card border-0 shadow-sm rounded-3 p-4 mx-auto" style="max-width: 600px;">
            <h2 class="fw-bold text-sena mb-4">Editar Sección #1</h2>
            
            <form action="#" method="POST">
                <div class="mb-3">
                    <label class="form-label fw-bold">Título</label>
                    <input type="text" class="form-control" value="Misión">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Descripción / Contenido</label>
                    <textarea class="form-control" rows="5">Brindar una plataforma web integral, ágil e intuitiva que optimice la administración de programas...</textarea>
                </div>

                <div class="d-flex justify-content-between pt-2">
                    <a href="{{ route('quienes-somos.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Actualizar Cambios</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
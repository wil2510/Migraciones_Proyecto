<nav class="navbar navbar-expand navbar-dark bg-success px-4 py-2">
    <div class="container-fluid">

        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold fs-5" href="{{ url('/') }}">
            <img src="https://diba.planeacionycalidad.org/diba/Views/representante/logo-blanco-sena-sin-fondo.png" alt="Logo" width="80" height="45" class="d-inline-block align-text-top rounded p-1">
            Admin Sena
        </a>

        <div class="navbar-nav ms-auto align-items-center gap-3">
            
            <a class="nav-link text-white fw-semibold" href="{{ url('/') }}">Inicio</a>
            
            <a class="nav-link text-white fw-semibold" href="/about">¿Quienes Somos?</a>

            <div class="dropdown">
                <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Administracion
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow">
                    <li><a class="dropdown-item" href="/area/create">Área</a></li>
                    <li><a class="dropdown-item" href="/trainingcenter/create">Centro</a></li>
                    <li><a class="dropdown-item" href="/computer/create">Equipos</a></li>
                    <li><a class="dropdown-item" href="{{ route('course.create') }}">Cursos</a></li>
                    <li><a class="dropdown-item" href="/teacher/create">Instructores</a></li>
                    <li><a class="dropdown-item" href="/apprentice/create">Aprendices</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ver Listas
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow">
                    <li><a class="dropdown-item" href="/Area">Áreas</a></li>
                    <li><a class="dropdown-item" href="/TrainingCenter">Centros</a></li>
                    <li><a class="dropdown-item" href="/Computer">Equipos</a></li>
                    <li><a class="dropdown-item" href="/Course">Cursos</a></li>
                    <li><a class="dropdown-item" href="/Teacher">Instructores</a></li>
                    <li><a class="dropdown-item" href="/Apprentice">Aprendices</a></li>
                </ul>
            </div>

            <form class="d-flex" role="search">
                <div class="input-group">
                    <input class="form-control border-0 rounded-start" type="search" placeholder="Buscar registros" aria-label="Buscar">
                    <button class="btn btn-dark rounded-end px-3" type="submit">
                    </button>
                </div>
            </form>

            <a href="/login" class="btn btn-light text-success fw-bold px-3 rounded-3 shadow-sm">
                Iniciar Sesión
            </a>

        </div>
    </div>
</nav>
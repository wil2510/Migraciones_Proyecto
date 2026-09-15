<nav class="navbar navbar-expand navbar-dark bg-success px-4 py-2">
    <div class="container-fluid">

        {{-- Logo y nombre --}}
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold fs-5"
            href="{{ route('home') }}">

            <img src="https://diba.planeacionycalidad.org/diba/Views/representante/logo-blanco-sena-sin-fondo.png"
                alt="Logo"
                width="80"
                height="45"
                class="d-inline-block align-text-top rounded p-1">

            Admin Sena
        </a>


        {{-- Menú principal --}}
        <div class="navbar-nav ms-auto align-items-center gap-3">

            {{-- ¿Quiénes Somos? --}}
            <a class="nav-link text-white fw-semibold"
                href="{{ route('about') }}">
                ¿Quiénes Somos?
            </a>


            {{-- ADMINISTRACIÓN --}}
            <div class="dropdown">

                <a class="nav-link dropdown-toggle text-white fw-semibold"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Administración
                </a>

                <ul class="dropdown-menu dropdown-menu-end shadow">

                    {{-- Crear Área --}}
                    <li>
                        <a class="dropdown-item"
                            href="{{ route('area.create') }}">
                            Área
                        </a>
                    </li>

                    {{-- Crear Centro --}}
                    <li>
                        <a class="dropdown-item"
                            href="{{ route('trainingcenter.create') }}">
                            Centro
                        </a>
                    </li>

                    {{-- Crear Equipo --}}
                    <li>
                        <a class="dropdown-item"
                            href="{{ route('computer.create') }}">
                            Equipos
                        </a>
                    </li>

                    {{-- Crear Curso --}}
                    <li>
                        <a class="dropdown-item"
                            href="{{ route('course.create') }}">
                            Cursos
                        </a>
                    </li>

                    {{-- Crear Instructor --}}
                    <li>
                        <a class="dropdown-item"
                            href="{{ route('teacher.create') }}">
                            Instructores
                        </a>
                    </li>

                    {{-- Crear Aprendiz --}}
                    <li>
                        <a class="dropdown-item"
                            href="{{ route('apprentice.create') }}">
                            Aprendices
                        </a>
                    </li>

                </ul>
            </div>


            {{-- VER LISTAS --}}
            <div class="dropdown">

                <a class="nav-link dropdown-toggle text-white fw-semibold"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Ver Listas
                </a>

                <ul class="dropdown-menu dropdown-menu-end shadow">

                    {{-- Lista de Áreas --}}
                    <li>
                        <a class="dropdown-item"
                            href="{{ route('area.index') }}">
                            Áreas
                        </a>
                    </li>

                    {{-- Lista de Centros --}}
                    <li>
                        <a class="dropdown-item"
                            href="{{ route('trainingcenter.index') }}">
                            Centros
                        </a>
                    </li>

                    {{-- Lista de Equipos --}}
                    <li>
                        <a class="dropdown-item"
                            href="{{ route('computer.index') }}">
                            Equipos
                        </a>
                    </li>

                    {{-- Lista de Cursos --}}
                    <li>
                        <a class="dropdown-item"
                            href="{{ route('course.index') }}">
                            Cursos
                        </a>
                    </li>

                    {{-- Lista de Instructores --}}
                    <li>
                        <a class="dropdown-item"
                            href="{{ route('teacher.index') }}">
                            Instructores
                        </a>
                    </li>

                    {{-- Lista de Aprendices --}}
                    <li>
                        <a class="dropdown-item"
                            href="{{ route('apprentice.index') }}">
                            Aprendices
                        </a>
                    </li>

                </ul>
            </div>


            {{-- BUSCADOR --}}
            <form class="d-flex" role="search">

                <div class="input-group">

                    <input class="form-control border-0 rounded-start"
                            type="search"
                            placeholder="Buscar registros"
                            aria-label="Buscar">

                    <button class="btn btn-dark rounded-end px-3"
                            type="submit">
                    </button>

                </div>

            </form>
            <div id="authContainer" class="d-flex align-items-center">
            <!-- Se llena mediante JavaScript -->
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        checkAuthStatus();
    });

    function checkAuthStatus() {
        const userSession = JSON.parse(localStorage.getItem('user_session'));
        const authContainer = document.getElementById('authContainer');
        const adminDropdown = document.getElementById('adminDropdownNav');

        // SI HAY SESIÓN EN LOCALSTORAGE
        if (userSession) {

            // MOSTRAR FOTO DE PERFIL CON MENU DESPLEGABLE
            authContainer.innerHTML = `
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="${userSession.avatar}" alt="${userSession.name}" width="38" height="38" class="rounded-circle border border-2 border-white shadow-sm me-2 object-fit-cover">
                        <span class="fw-bold d-none d-md-inline small">${userSession.name}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg rounded-3 mt-2" aria-labelledby="profileDropdown">
                        <li>
                            <div class="px-3 py-2 border-bottom">
                                <p class="fw-bold mb-0 text-dark small">${userSession.name}</p>
                                <small class="text-muted">${userSession.email}</small>
                            </div>
                        </li>
                        <li>
                            <button onclick="logout()" class="dropdown-item text-danger fw-bold py-2">
                                <i class="bi bi-box-arrow-right me-2"></i> Cerrar Sesión
                            </button>
                        </li>
                    </ul>
                </div>
            `;
        } 
        // SI NO HAY SESIÓN
        else {
            // MOSTRAR BOTÓN DE INICIAR SESIÓN
            authContainer.innerHTML = `
                <a href="{{ route('login') }}" class="btn btn-light text-success fw-bold btn-sm px-3 rounded-3 shadow-sm d-flex align-items-center gap-1">
                    <i class="bi bi-person-circle"></i> Iniciar Sesión
                </a>
            `;
        }
    }

    // Función para cerrar sesión
    function logout() {
        localStorage.removeItem('user_session');
        localStorage.removeItem('user_role');
        checkAuthStatus();
        window.location.href = "{{ url('/') }}";
    }
</script>
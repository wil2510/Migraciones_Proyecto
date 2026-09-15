@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-sm-10 col-md-7 col-lg-5">

            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

                <!-- ENCABEZADO -->
                <div class="card-header text-white text-center py-4 border-0"
                    style="background-color: #39A900;">

                    <div class="mb-2">
                        <i class="bi bi-mortarboard-fill"
                            style="font-size: 45px;"></i>
                    </div>

                    <h2 class="fw-bold mb-1">
                        adminSena
                    </h2>

                    <p class="mb-0">
                        Gestión académica fácil, rápida y segura.
                    </p>

                </div>


                <!-- CUERPO -->
                <div class="card-body p-4">

                    <div class="text-center mb-4">

                        <h4 class="fw-bold">
                            Iniciar Sesión
                        </h4>

                        <p class="text-muted small mb-0">
                            Ingresa a tu cuenta para continuar
                        </p>

                    </div>


                    <form onsubmit="executeLogin(event)">

                        <!-- CORREO -->
                        <div class="mb-3">

                            <label class="form-label fw-bold">

                                <i class="bi bi-envelope me-1"
                                    style="color:#39A900;"></i>

                                Correo Electrónico

                            </label>

                            <input
                                type="email"
                                id="loginEmail"
                                class="form-control rounded-3 py-2"
                                placeholder="ejemplo@sena.edu.co"
                                required
                            >

                        </div>


                        <!-- CONTRASEÑA -->
                        <div class="mb-4">

                            <label class="form-label fw-bold">

                                <i class="bi bi-lock me-1"
                                    style="color:#39A900;"></i>

                                Contraseña

                            </label>

                            <input
                                type="password"
                                id="loginPassword"
                                class="form-control rounded-3 py-2"
                                placeholder="Contraseña"
                                required
                            >

                        </div>


                        <!-- BOTÓN -->
                        <div class="d-grid">

                            <button
                                type="submit"
                                class="btn text-white fw-bold py-2 rounded-3"
                                style="background-color: #39A900;"
                            >

                                <i class="bi bi-box-arrow-in-right me-2"></i>

                                Iniciar Sesión

                            </button>

                        </div>

                    </form>

                </div>


                <!-- PIE -->
                <div class="card-footer bg-light border-0 text-center py-3">

                    <span class="text-muted">
                        ¿No tienes una cuenta?
                    </span>

                    <a
                        href="{{ route('register') }}"
                        class="fw-bold text-decoration-none ms-1"
                        style="color:#39A900;"
                    >
                        Registrarse
                    </a>

                </div>

            </div>


            <!-- TEXTO INFERIOR -->

            <div class="text-center mt-3">

                <small class="text-muted">

                    <i class="bi bi-shield-check me-1"
                        style="color:#39A900;"></i>

                    adminSena · Sistema de Gestión Académica

                </small>

            </div>

        </div>

    </div>

</div>


<script>

function executeLogin(e) {

    e.preventDefault();

    const email =
        document.getElementById('loginEmail').value.trim();

    const password =
        document.getElementById('loginPassword').value;

    // Obtener usuarios registrados
    const users =
        JSON.parse(localStorage.getItem('users')) || [];

    // Buscar usuario
    const user =
        users.find(
            u => u.email === email && u.password === password
        );

    // Si no existe
    if (!user) {

        alert('Correo o contraseña incorrectos');

        return;
    }

    // Guardar usuario que inició sesión
    localStorage.setItem(
        'user_session',
        JSON.stringify({
            name: user.name,
            email: user.email,
            avatar: user.avatar
        })
    );

    alert('Inicio de sesión correcto');

    // Ir al inicio
    window.location.href = "{{ url('/') }}";
}

</script>

@endsection
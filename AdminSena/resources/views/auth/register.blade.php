@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-sm-11 col-md-9 col-lg-7">

            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

                <!-- ENCABEZADO -->
                <div class="card-header text-white border-0 p-4"
                    style="background-color: #39A900;">

                    <div class="row align-items-center">

                        <div class="col-md-8">

                            <small class="text-uppercase fw-bold opacity-75">
                                Plataforma Académica
                            </small>

                            <h1 class="fw-bold mt-1 mb-2">
                                adminSena
                            </h1>

                            <p class="mb-0">
                                Crea tu cuenta y comienza a gestionar
                                tu información académica de manera sencilla.
                            </p>

                        </div>

                        <div class="col-md-4 text-center mt-3 mt-md-0">

                            <div
                                class="d-inline-flex align-items-center justify-content-center rounded-circle bg-white"
                                style="width:90px; height:90px;"
                            >

                                <i class="bi bi-person-plus-fill"
                                    style="font-size:45px; color:#39A900;"></i>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- CUERPO -->
                <div class="card-body p-4 p-md-5">

                    <div class="mb-4">

                        <h4 class="fw-bold mb-1">
                            Crear una cuenta
                        </h4>

                        <p class="text-muted mb-0">
                            Completa los siguientes datos para registrarte.
                        </p>

                    </div>


                    <form
                        id="registerPageForm"
                        onsubmit="executeRegister(event)"
                    >

                        <!-- NOMBRE -->
                        <div class="mb-4">

                            <label class="form-label fw-bold">

                                <i class="bi bi-person me-1"
                                    style="color:#39A900;"></i>

                                Nombre Completo

                            </label>

                            <div class="input-group">

                                <span
                                    class="input-group-text border-0"
                                    style="background-color:#EAF5E4;"
                                >

                                    <i class="bi bi-person-fill"
                                        style="color:#39A900;"></i>

                                </span>

                                <input
                                    type="text"
                                    id="regName"
                                    class="form-control border-0 bg-light py-2"
                                    placeholder="Ej: Maria López"
                                    required
                                >

                            </div>

                        </div>


                        <!-- CORREO -->
                        <div class="mb-4">

                            <label class="form-label fw-bold">

                                <i class="bi bi-envelope me-1"
                                    style="color:#39A900;"></i>

                                Correo Electrónico

                            </label>

                            <div class="input-group">

                                <span
                                    class="input-group-text border-0"
                                    style="background-color:#EAF5E4;"
                                >

                                    <i class="bi bi-envelope-fill"
                                        style="color:#39A900;"></i>

                                </span>

                                <input
                                    type="email"
                                    id="regEmail"
                                    class="form-control border-0 bg-light py-2"
                                    placeholder="ejemplo@sena.edu.co"
                                    required
                                >

                            </div>

                        </div>


                        <div class="row">

                            <!-- CONTRASEÑA -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-bold">

                                    <i class="bi bi-lock me-1"
                                        style="color:#39A900;"></i>

                                    Contraseña

                                </label>

                                <div class="input-group">

                                    <span
                                        class="input-group-text border-0"
                                        style="background-color:#EAF5E4;"
                                    >

                                        <i class="bi bi-key-fill"
                                            style="color:#39A900;"></i>

                                    </span>

                                    <input
                                        type="password"
                                        id="regPass"
                                        class="form-control border-0 bg-light py-2"
                                        placeholder="Contraseña"
                                        required
                                    >

                                </div>

                            </div>


                            <!-- CONFIRMAR -->
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-bold">

                                    <i class="bi bi-check-circle me-1"
                                        style="color:#39A900;"></i>

                                    Confirmar Contraseña

                                </label>

                                <div class="input-group">

                                    <span
                                        class="input-group-text border-0"
                                        style="background-color:#EAF5E4;"
                                    >

                                        <i class="bi bi-shield-check"
                                            style="color:#39A900;"></i>

                                    </span>

                                    <input
                                        type="password"
                                        id="regPassConfirm"
                                        class="form-control border-0 bg-light py-2"
                                        placeholder="Confirmar contraseña"
                                        required
                                    >

                                </div>

                            </div>

                        </div>


                        <!-- INFORMACIÓN -->
                        <div
                            class="alert border-0 rounded-3 mb-4"
                            style="background-color:#F1F8ED;"
                        >

                            <div class="d-flex align-items-center">

                                <i class="bi bi-info-circle-fill me-2"
                                    style="color:#39A900; font-size:20px;"></i>

                                <small class="text-muted">

                                    Tus datos serán utilizados para
                                    identificar tu cuenta dentro de
                                    <strong>adminSena</strong>.

                                </small>

                            </div>

                        </div>


                        <!-- BOTÓN -->
                        <div class="d-grid">

                            <button
                                type="submit"
                                class="btn text-white fw-bold py-3 rounded-3"
                                style="background-color:#39A900;"
                            >

                                <i class="bi bi-person-check-fill me-2"></i>

                                Crear mi cuenta

                            </button>

                        </div>

                    </form>

                </div>


                <!-- PIE -->
                <div
                    class="card-footer border-0 text-center py-4"
                    style="background-color:#F8F9FA;"
                >

                    <span class="text-muted">
                        ¿Ya tienes una cuenta?
                    </span>

                    <a
                        href="{{ route('login') }}"
                        class="fw-bold text-decoration-none ms-1"
                        style="color:#39A900;"
                    >

                        Iniciar Sesión

                    </a>

                </div>

            </div>


            <!-- LEMA -->

            <div class="text-center mt-3">

                <small class="text-muted">

                    <i class="bi bi-mortarboard-fill me-1"
                        style="color:#39A900;"></i>

                    adminSena · Tu información, nuestra gestión.

                </small>

            </div>

        </div>

    </div>

</div>


<script>

function executeRegister(e) {

    e.preventDefault();

    const name = document.getElementById('regName').value.trim();
    const email = document.getElementById('regEmail').value.trim();
    const pass = document.getElementById('regPass').value;
    const passConfirm = document.getElementById('regPassConfirm').value;

    // Verificar que las contraseñas coincidan
    if (pass !== passConfirm) {
        alert('Las contraseñas no coinciden');
        return;
    }

    // Buscar usuarios registrados
    let users = JSON.parse(localStorage.getItem('users')) || [];

    // Verificar si el correo ya existe
    const userExists = users.find(user => user.email === email);

    if (userExists) {
        alert('Este correo ya está registrado');
        return;
    }

    // Crear usuario
    const avatarUrl =
        `https://ui-avatars.com/api/?name=${encodeURIComponent(name)}&background=39A900&color=fff&bold=true`;

    const newUser = {
        name: name,
        email: email,
        password: pass,
        avatar: avatarUrl
    };

    // Guardar usuario
    users.push(newUser);

    localStorage.setItem('users', JSON.stringify(users));

    alert('Cuenta creada correctamente');

    // Ir al login
    window.location.href = "{{ route('login') }}";
}

</script>

@endsection
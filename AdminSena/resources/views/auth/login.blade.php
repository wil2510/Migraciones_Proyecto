@extends('layouts.app')

@section('content')

<div
    class="py-5"
    style="background-color:#f4f6f9; min-height:80vh;"
>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-6 col-lg-5">

                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">

                    {{-- CABECERA --}}
                    <div
                        class="card-header text-white text-center py-4"
                        style="background-color:#39A900;"
                    >

                        <h4 class="mb-0 fw-bold">
                            Iniciar Sesión
                        </h4>

                        <p class="mb-0 mt-1 small opacity-75">
                            Accede al sistema Admin Sena
                        </p>

                    </div>


                    {{-- CUERPO --}}
                    <div class="card-body p-4 p-md-5">

                        {{-- MENSAJE DE ÉXITO --}}
                        @if(session('success'))

                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>

                        @endif


                        {{-- ERRORES --}}
                        @if($errors->any())

                            <div class="alert alert-danger">

                                <ul class="mb-0">

                                    @foreach($errors->all() as $error)

                                        <li>
                                            {{ $error }}
                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        {{-- FORMULARIO --}}
                        <form
                            action="{{ route('login.post') }}"
                            method="POST"
                        >

                            @csrf


                            {{-- EMAIL --}}
                            <div class="form-floating mb-4">

                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="Correo electrónico"
                                    required
                                    autofocus
                                >

                                <label for="email">
                                    Correo Electrónico
                                </label>

                            </div>


                            {{-- CONTRASEÑA --}}
                            <div class="form-floating mb-4">

                                <input
                                    type="password"
                                    class="form-control"
                                    id="password"
                                    name="password"
                                    placeholder="Contraseña"
                                    required
                                >

                                <label for="password">
                                    Contraseña
                                </label>

                            </div>


                            {{-- RECORDARME --}}
                            <div class="form-check mb-4">

                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="remember"
                                    id="remember"
                                >

                                <label
                                    class="form-check-label"
                                    for="remember"
                                >
                                    Recordarme
                                </label>

                            </div>


                            {{-- BOTONES --}}
                            <div
                                class="d-flex justify-content-between align-items-center"
                            >

                                <a
                                    href="{{ route('home') }}"
                                    class="btn btn-outline-secondary px-4 py-2 rounded-3"
                                >
                                    Cancelar
                                </a>


                                <button
                                    type="submit"
                                    class="btn text-white px-4 py-2 fw-bold rounded-3"
                                    style="background-color:#39A900;"
                                >
                                    Iniciar Sesión
                                </button>

                            </div>

                        </form>


                        {{-- REGISTRO --}}
                        <div class="text-center mt-4">

                            <span class="text-muted">
                                ¿No tienes una cuenta?
                            </span>

                            <a
                                href="{{ route('register') }}"
                                class="fw-bold text-decoration-none"
                                style="color:#39A900;"
                            >
                                Registrarse
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
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
                            Crear Cuenta
                        </h4>

                        <p class="mb-0 mt-1 small opacity-75">
                            Regístrate en Admin Sena
                        </p>

                    </div>


                    {{-- CUERPO --}}
                    <div class="card-body p-4 p-md-5">

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


                        <form
                            action="{{ route('register.post') }}"
                            method="POST"
                        >

                            @csrf


                            {{-- NOMBRE --}}
                            <div class="form-floating mb-4">

                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    placeholder="Nombre completo"
                                    required
                                >

                                <label for="name">
                                    Nombre Completo
                                </label>

                            </div>


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


                            {{-- CONFIRMAR CONTRASEÑA --}}
                            <div class="form-floating mb-4">

                                <input
                                    type="password"
                                    class="form-control"
                                    id="password_confirmation"
                                    name="password_confirmation"
                                    placeholder="Confirmar contraseña"
                                    required
                                >

                                <label for="password_confirmation">
                                    Confirmar Contraseña
                                </label>

                            </div>


                            {{-- BOTONES --}}
                            <div
                                class="d-flex justify-content-between align-items-center"
                            >

                                <a
                                    href="{{ route('login') }}"
                                    class="btn btn-outline-secondary px-4 py-2 rounded-3"
                                >
                                    Volver
                                </a>


                                <button
                                    type="submit"
                                    class="btn text-white px-4 py-2 fw-bold rounded-3"
                                    style="background-color:#39A900;"
                                >
                                    Registrarse
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
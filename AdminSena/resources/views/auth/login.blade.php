@extends('layouts.app')

@section('content')
<div class="py-5" style="background-color: #f4f6f9; min-height: 80vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">

                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    <!-- Encabezado Institucional -->
                    <div class="card-header text-white text-center py-4" style="background-color: #39A900; border-bottom: none;">
                        <h4 class="mb-1 fw-bold">Iniciar Sesión</h4>
                        <p class="mb-0 small opacity-75">Bienvenido a Admin SENA</p>
                    </div>

                    <div class="card-body p-4 p-md-5 bg-white">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Correo Electrónico -->
                            <div class="form-floating mb-3">
                                <input type="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    id="email" 
                                    name="email" 
                                    placeholder="correo@sena.edu.co" 
                                    value="{{ old('email') }}" 
                                    required 
                                    autofocus>
                                <label for="email" class="text-secondary">
                                    <i class="bi bi-envelope-fill me-1"></i> Correo Electrónico
                                </label>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Contraseña -->
                            <div class="form-floating mb-3">
                                <input type="password" 
                                    class="form-control @error('password') is-invalid @enderror" 
                                    id="password" 
                                    name="password" 
                                    placeholder="Contraseña" 
                                    required>
                                <label for="password" class="text-secondary">
                                    <i class="bi bi-lock-fill me-1"></i> Contraseña
                                </label>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Recordarme & Olvidé contraseña -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label small text-secondary" for="remember">
                                        Recordarme
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="small text-decoration-none text-success fw-semibold" href="{{ route('password.request') }}">
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                @endif
                            </div>

                            <!-- Botón de Envío -->
                            <button type="submit" class="btn btn-dark w-100 py-3 fw-bold rounded-3 shadow-sm mb-3" style="font-size: 1rem;">
                                Ingresar al Sistema
                            </button>

                            <!-- Enlace a Registro -->
                            <div class="text-center mt-4 pt-3 border-top">
                                <span class="small text-muted">¿No tienes una cuenta aún?</span>
                                <a href="{{ route('register') }}" class="small text-success fw-bold text-decoration-none ms-1">
                                    Regístrate aquí
                                </a>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
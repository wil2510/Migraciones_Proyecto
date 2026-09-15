@extends('layouts.app')

@section('content')

<div class="py-5">
    <div class="container">

        <div class="mb-4">

            <h2 class="fw-bold text-dark">
                Nueva Oferta
            </h2>

            <p class="text-muted">
                Registra una nueva oferta de formación del SENA.
            </p>

        </div>

        <div class="card shadow-sm border-0">

            <div class="card-body p-4">

                @if($errors->any())

                    <div class="alert alert-danger">

                        <strong>Por favor corrige los siguientes errores:</strong>

                        <ul class="mb-0 mt-2">

                            @foreach($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif

                <form action="{{ route('oferta.store') }}" method="POST">

                    @csrf

                    <div class="row g-4">

                        <div class="col-md-6">

                            <label class="form-label fw-bold">
                                Jornada
                            </label>

                            <select name="jornada" class="form-select" required>

                                <option value="">
                                    Seleccionar jornada
                                </option>

                                <option value="Mañana"
                                    {{ old('jornada') == 'Mañana' ? 'selected' : '' }}>
                                    Mañana
                                </option>

                                <option value="Tarde"
                                    {{ old('jornada') == 'Tarde' ? 'selected' : '' }}>
                                    Tarde
                                </option>

                                <option value="Noche"
                                    {{ old('jornada') == 'Noche' ? 'selected' : '' }}>
                                    Noche
                                </option>

                                <option value="Mixta"
                                    {{ old('jornada') == 'Mixta' ? 'selected' : '' }}>
                                    Mixta
                                </option>

                            </select>

                        </div>

                        <div class="col-md-6">

                            <label class="form-label fw-bold">
                                Fecha de inscripción
                            </label>

                            <input type="date"
                                   name="registration_date"
                                   class="form-control"
                                   value="{{ old('registration_date') }}"
                                   required>

                        </div>

                        <div class="col-md-6">

                            <label class="form-label fw-bold">
                                Capacidad
                            </label>

                            <div class="input-group">

                                <input type="number"
                                       name="capacity"
                                       class="form-control"
                                       value="{{ old('capacity') }}"
                                       min="1"
                                       placeholder="Ej: 30"
                                       required>

                                <span class="input-group-text">
                                    aprendices
                                </span>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <label class="form-label fw-bold">
                                Programa
                            </label>

                            <select name="programa_id" class="form-select" required>

                                <option value="">
                                    Seleccionar programa
                                </option>

                                @foreach($programas as $programa)

                                    <option value="{{ $programa->id }}"
                                        {{ old('programa_id') == $programa->id ? 'selected' : '' }}>

                                        {{ $programa->name }}

                                    </option>

                                @endforeach

                            </select>

                        </div>

                    </div>

                    <div class="mt-4 d-flex gap-2">

                        <button type="submit" class="btn btn-success">
                            Guardar Oferta
                        </button>

                        <a href="{{ route('oferta.index') }}"
                           class="btn btn-secondary">
                            Cancelar
                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>
</div>

@endsection
@extends('layouts.app')

@section('content')

<div class="py-5">
    <div class="container">

        <div class="mb-4">
            <h2 class="fw-bold text-dark">
                Nuevo Programa
            </h2>

            <p class="text-muted">
                Registra un nuevo programa de formación del SENA.
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

                <form action="{{ route('programa.store') }}" method="POST">

                    @csrf

                    <div class="row g-4">

                        <div class="col-md-6">

                            <label class="form-label fw-bold">
                                Nombre del programa
                            </label>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   value="{{ old('name') }}"
                                   placeholder="Ej: Análisis y Desarrollo de Software"
                                   required>

                        </div>

                        <div class="col-md-6">

                            <label class="form-label fw-bold">
                                Tipo de formación
                            </label>

                            <select name="type" class="form-select" required>

                                <option value="">Seleccionar tipo</option>

                                <option value="Técnico"
                                    {{ old('type') == 'Técnico' ? 'selected' : '' }}>
                                    Técnico
                                </option>

                                <option value="Tecnólogo"
                                    {{ old('type') == 'Tecnólogo' ? 'selected' : '' }}>
                                    Tecnólogo
                                </option>

                            </select>

                        </div>

                        <div class="col-md-6">

                            <label class="form-label fw-bold">
                                Duración
                            </label>

                            <div class="input-group">

                                <input type="number"
                                       name="duration"
                                       class="form-control"
                                       value="{{ old('duration') }}"
                                       min="1"
                                       placeholder="Ej: 27"
                                       required>

                                <span class="input-group-text">
                                    meses
                                </span>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <label class="form-label fw-bold">
                                Área
                            </label>

                            <select name="area_id" class="form-select" required>

                                <option value="">
                                    Seleccionar área
                                </option>

                                @foreach($areas as $area)

                                    <option value="{{ $area->id }}"
                                        {{ old('area_id') == $area->id ? 'selected' : '' }}>

                                        {{ $area->name }}

                                    </option>

                                @endforeach

                            </select>

                        </div>

                        <div class="col-12">

                            <label class="form-label fw-bold">
                                Descripción
                            </label>

                            <textarea name="description"
                                      class="form-control"
                                      rows="4"
                                      placeholder="Descripción del programa...">{{ old('description') }}</textarea>

                        </div>

                    </div>

                    <div class="mt-4 d-flex gap-2">

                        <button type="submit" class="btn btn-success">
                            Guardar Programa
                        </button>

                        <a href="{{ route('programa.index') }}"
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
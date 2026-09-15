@extends('layouts.app')

@section('content')

<div class="py-4">
    <div class="container">

        <div class="mb-4">
            <h2 class="fw-bold">Nueva Ficha</h2>
            <p class="text-muted">
                Registra una nueva ficha de formación.
            </p>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow-sm border-0">
            <div class="card-body">

                <form action="{{ route('ficha.store') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            Código de la ficha
                        </label>

                        <input type="text"
                               name="code"
                               class="form-control"
                               value="{{ old('code') }}"
                               placeholder="Ej: 3223899"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            Fecha de inicio
                        </label>

                        <input type="date"
                               name="start_date"
                               class="form-control"
                               value="{{ old('start_date') }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            Horario
                        </label>

                        <select name="schedule" class="form-select" required>
                            <option value="">Seleccione un horario</option>
                            <option value="Mañana">Mañana</option>
                            <option value="Tarde">Tarde</option>
                            <option value="Noche">Noche</option>
                            <option value="Mixta">Mixta</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            Oferta
                        </label>

                        <select name="oferta_id" class="form-select" required>

                            <option value="">
                                Seleccione una oferta
                            </option>

                            @foreach($ofertas as $oferta)

                                <option value="{{ $oferta->id }}"
                                    {{ old('oferta_id') == $oferta->id ? 'selected' : '' }}>

                                    {{ $oferta->jornada }}
                                    -
                                    {{ $oferta->programa->name ?? 'Sin programa' }}

                                </option>

                            @endforeach

                        </select>
                    </div>

                    <a href="{{ route('ficha.index') }}"
                       class="btn btn-secondary">
                        Cancelar
                    </a>

                    <button type="submit"
                            class="btn btn-success">
                        Guardar Ficha
                    </button>

                </form>

            </div>
        </div>

    </div>
</div>

@endsection
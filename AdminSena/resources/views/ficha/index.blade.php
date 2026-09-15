@extends('layouts.app')

@section('content')

<div class="py-4">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold text-dark mb-1">Listado de Fichas</h2>
                <p class="text-muted mb-0">
                    Gestión de fichas de formación del SENA
                </p>
            </div>

            <a href="{{ route('ficha.create') }}" class="btn btn-success">
                + Nueva Ficha
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card shadow-sm border-0">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover align-middle">

                        <thead class="table-success">
                            <tr>
                                <th>ID</th>
                                <th>Código</th>
                                <th>Fecha de inicio</th>
                                <th>Horario</th>
                                <th>Oferta</th>
                                <th>Programa</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($fichas as $ficha)

                                <tr>
                                    <td>{{ $ficha->id }}</td>

                                    <td>
                                        <strong>{{ $ficha->code }}</strong>
                                    </td>

                                    <td>
                                        {{ $ficha->start_date }}
                                    </td>

                                    <td>
                                        {{ $ficha->schedule }}
                                    </td>

                                    <td>
                                        {{ $ficha->oferta->jornada ?? 'Sin oferta' }}
                                    </td>

                                    <td>
                                        {{ $ficha->oferta->programa->name ?? 'Sin programa' }}
                                    </td>

                                    <td>

                                        <a href="{{ route('ficha.show', $ficha->id) }}"
                                           class="btn btn-sm btn-info text-white">
                                            Ver
                                        </a>

                                        <a href="{{ route('ficha.edit', $ficha->id) }}"
                                           class="btn btn-sm btn-warning">
                                            Editar
                                        </a>

                                        <form action="{{ route('ficha.destroy', $ficha->id) }}"
                                              method="POST"
                                              class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-sm btn-danger"
                                                    onclick="return confirm('¿Deseas eliminar esta ficha?')">
                                                Eliminar
                                            </button>

                                        </form>

                                    </td>
                                </tr>

                            @empty

                                <tr>
                                    <td colspan="7" class="text-center text-muted py-4">
                                        No hay fichas registradas.
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection
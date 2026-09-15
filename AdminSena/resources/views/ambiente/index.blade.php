@extends('layouts.app')

@section('content')

<div class="py-4">
    <div class="container">

        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">

            <div>
                <h2 class="fw-bold text-dark mb-1">
                    Listado de Ambientes
                </h2>

                <p class="text-muted mb-0">
                    Gestión de ambientes de formación del SENA
                </p>
            </div>

            <a href="{{ route('ambiente.create') }}"
               class="btn btn-success">
                + Nuevo Ambiente
            </a>

        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead class="table-success">

                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Ubicación</th>
                                <th>Centro de Formación</th>
                                <th>Acciones</th>
                            </tr>

                        </thead>

                        <tbody>

                            @forelse($ambientes as $ambiente)

                                <tr>

                                    <td>
                                        {{ $ambiente->id }}
                                    </td>

                                    <td>
                                        <strong>
                                            {{ $ambiente->name }}
                                        </strong>
                                    </td>

                                    <td>
                                        {{ $ambiente->location }}
                                    </td>

                                    <td>
                                        {{ $ambiente->trainingCenter->name ?? 'Sin centro' }}
                                    </td>

                                    <td>

                                        <a href="{{ route('ambiente.show', $ambiente->id) }}"
                                           class="btn btn-sm btn-info text-white">
                                            Ver
                                        </a>

                                        <a href="{{ route('ambiente.edit', $ambiente->id) }}"
                                           class="btn btn-sm btn-warning">
                                            Editar
                                        </a>

                                        <form action="{{ route('ambiente.destroy', $ambiente->id) }}"
                                              method="POST"
                                              class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-sm btn-danger"
                                                    onclick="return confirm('¿Deseas eliminar este ambiente?')">
                                                Eliminar
                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="5"
                                        class="text-center text-muted py-4">

                                        No hay ambientes registrados.

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
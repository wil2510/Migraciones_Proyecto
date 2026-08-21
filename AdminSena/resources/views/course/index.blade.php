@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Listado de Cursos</h2>
        <a href="{{ route('course.create') }}" class="btn btn-primary">Nuevo Curso</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Área</th>
                        <th>Centro de Formación</th>
                        <th class="text-end">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($courses as $course)
                        <tr>
                            <td>{{ $course->id }}</td>
                            <td><span class="badge bg-secondary">{{ $course->code }}</span></td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->area->name ?? 'N/A' }}</td>
                            <td>{{ $course->trainingCenter->name ?? 'N/A' }}</td>
                            <td class="text-end">
                                <a href="{{ route('course.show', $course) }}" class="btn btn-sm btn-info text-white">Ver</a>
                                <a href="{{ route('course.edit', $course) }}" class="btn btn-sm btn-warning text-white">Editar</a>
                                <form action="{{ route('course.destroy', $course) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Deseas eliminar este curso?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">No hay cursos registrados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
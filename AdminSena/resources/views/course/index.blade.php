@extends('layouts.app')

@section('content')

<div class="py-4">

    <div class="container">

        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">

            <div>

                <h2 class="fw-bold text-dark mb-1">
                    Listado de Cursos
                </h2>

                <p class="text-muted small mb-0">
                    Gestione los cursos, áreas y centros de formación.
                </p>

            </div>


            <a href="{{ route('course.create') }}"
               class="btn text-white fw-bold px-4 py-2"
               style="background-color:#39A900;">

                Nuevo Curso

            </a>

        </div>


        @if (session('success'))

            <div class="alert alert-success alert-dismissible fade show">

                {{ session('success') }}

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
                </button>

            </div>

        @endif


        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">

            <div class="card-body p-0">

                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <thead class="table-dark">

                            <tr>

                                <th class="ps-4 py-3">
                                    ID
                                </th>

                                <th class="py-3">
                                    Código
                                </th>

                                <th class="py-3">
                                    Nombre
                                </th>

                                <th class="py-3">
                                    Área
                                </th>

                                <th class="py-3">
                                    Centro de Formación
                                </th>

                                <th class="text-center py-3">
                                    Acciones
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse ($courses as $course)

                                <tr>

                                    <td class="ps-4 fw-bold">
                                        #{{ $course->id }}
                                    </td>


                                    <td>

                                        <span class="badge bg-secondary">
                                            {{ $course->code }}
                                        </span>

                                    </td>


                                    <td class="fw-semibold">

                                        {{ $course->name }}

                                    </td>


                                    <td>

                                        {{ $course->area->name ?? 'N/A' }}

                                    </td>


                                    <td>

                                        {{ $course->trainingCenter->name ?? 'N/A' }}

                                    </td>


                                    <td class="text-center">

                                        <div class="d-flex justify-content-center gap-2">

                                            <a
                                                href="{{ route('course.show', $course->id) }}"
                                                class="btn btn-sm btn-light border"
                                                style="width:80px;"
                                            >
                                                Ver
                                            </a>


                                            <a
                                                href="{{ route('course.edit', $course->id) }}"
                                                class="btn btn-sm btn-outline-dark"
                                                style="width:80px;"
                                            >
                                                Editar
                                            </a>


                                            <form
                                                action="{{ route('course.destroy', $course->id) }}"
                                                method="POST"
                                                class="m-0"
                                                onsubmit="return confirm('¿Deseas eliminar este curso?')"
                                            >

                                                @csrf

                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="btn btn-sm btn-danger"
                                                    style="width:80px;"
                                                >
                                                    Eliminar
                                                </button>

                                            </form>

                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td
                                        colspan="6"
                                        class="text-center py-5 text-muted"
                                    >
                                        No hay cursos registrados.
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
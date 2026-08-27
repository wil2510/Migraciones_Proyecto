@extends('layouts.app')

@section('content')

<div class="py-4">

    <div class="container">

        {{-- ENCABEZADO --}}
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">

            <div>

                <h2 class="fw-bold text-dark mb-1">
                    Listado de Instructores
                </h2>

                <p class="text-muted small mb-0">
                    Gestione el cuerpo docente, sus correos de contacto y asignaciones.
                </p>

            </div>


            <a href="{{ route('teacher.create') }}"
               class="btn text-white fw-bold px-4 py-2 shadow-sm"
               style="background-color: #39A900;">

                Nuevo Instructor

            </a>

        </div>


        {{-- MENSAJE --}}
        @if (session('success'))

            <div class="alert alert-success alert-dismissible fade show">

                {{ session('success') }}

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert">
                </button>

            </div>

        @endif


        {{-- TABLA --}}
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">

            <div class="card-body p-0">

                <div class="table-responsive">

                    <table id="idTeacher"
                           class="table table-hover align-middle mb-0"
                           style="width:100%">

                        <thead class="table-dark">

                            <tr>

                                <th class="ps-4 py-3">
                                    ID
                                </th>

                                <th class="py-3">
                                    Nombre
                                </th>

                                <th class="py-3">
                                    Email
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

                            @forelse ($teachers as $teacher)

                                <tr>

                                    <td class="ps-4 fw-bold text-secondary">

                                        #{{ $teacher->id }}

                                    </td>


                                    <td class="fw-bold text-dark">

                                        {{ $teacher->name }}

                                    </td>


                                    <td class="text-secondary">

                                        {{ $teacher->email }}

                                    </td>


                                    <td>

                                        @if ($teacher->area)

                                            <span class="badge bg-secondary-subtle text-dark border">

                                                {{ $teacher->area->name }}

                                            </span>

                                        @else

                                            <span class="text-muted">
                                                Sin área
                                            </span>

                                        @endif

                                    </td>


                                    <td>

                                        @if ($teacher->training_center)

                                            <span class="badge bg-success-subtle text-success border">

                                                {{ $teacher->training_center->name }}

                                            </span>

                                        @else

                                            <span class="text-muted">
                                                Sin centro
                                            </span>

                                        @endif

                                    </td>


                                    <td class="text-center">

                                        <div class="d-flex justify-content-center gap-2">


                                            <a href="{{ route('teacher.show', $teacher->id) }}"
                                                class="btn btn-sm btn-light border"
                                                style="width: 80px;">

                                                Ver

                                            </a>


                                            <a href="{{ route('teacher.edit', $teacher->id) }}"
                                               class="btn btn-sm btn-outline-dark"
                                               style="width: 80px;">

                                                Editar

                                            </a>


                                            <form
                                                action="{{ route('teacher.destroy', $teacher->id) }}"
                                                method="POST"
                                                class="m-0"
                                                onsubmit="return confirm('¿Está seguro de eliminar este instructor?')"
                                            >

                                                @csrf

                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="btn btn-sm btn-danger"
                                                    style="width: 80px;"
                                                >

                                                    Eliminar

                                                </button>

                                            </form>


                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="6"
                                        class="text-center py-5 text-muted">

                                        No hay instructores registrados.

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
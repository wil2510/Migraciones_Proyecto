@extends('layouts.app')

@section('content')

<div class="py-4">
    <div class="container">

        {{-- Encabezado --}}
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">

            <div>
                <h2 class="fw-bold text-dark mb-1">
                    Listado de Centros de Formación
                </h2>

                <p class="text-muted small mb-0">
                    Visualice, edite o elimine los centros de formación registrados.
                </p>
            </div>

            <a href="{{ route('trainingcenter.create') }}"
               class="btn text-white fw-bold px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2"
               style="background-color: #39A900;">

                Nuevo Centro

            </a>

        </div>


        {{-- Tabla --}}
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">

            <div class="card-body p-0">

                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0" style="width:100%">

                        <thead class="table-dark">

                            <tr>

                                <th class="ps-4 py-3" style="width: 15%">
                                    Código ID
                                </th>

                                <th class="py-3" style="width: 35%">
                                    Nombre del Centro
                                </th>

                                <th class="py-3" style="width: 25%">
                                    Ubicación
                                </th>

                                <th class="text-center py-3" style="width: 25%">
                                    Acciones
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse ($trainingcenters as $trainingcenter)

                                <tr>

                                    {{-- ID --}}
                                    <td class="ps-4 fw-bold text-secondary">
                                        #{{ $trainingcenter->id }}
                                    </td>


                                    {{-- Nombre --}}
                                    <td class="fw-medium text-dark">
                                        {{ $trainingcenter->name }}
                                    </td>


                                    {{-- Ubicación --}}
                                    <td class="text-muted">
                                        {{ $trainingcenter->location }}
                                    </td>


                                    {{-- Acciones --}}
                                    <td class="text-center">

                                        <div class="d-flex justify-content-center align-items-center gap-2">

                                            {{-- Ver --}}
                                            <a href="{{ route('trainingcenter.show', $trainingcenter->id) }}"
                                               class="btn btn-sm btn-light border fw-medium"
                                               style="width: 80px;">

                                                Ver

                                            </a>


                                            {{-- Editar --}}
                                            <a href="{{ route('trainingcenter.edit', $trainingcenter->id) }}"
                                               class="btn btn-sm btn-outline-dark fw-medium"
                                               style="width: 80px;">

                                                Editar

                                            </a>


                                            {{-- Eliminar --}}
                                            <form action="{{ route('trainingcenter.destroy', $trainingcenter->id) }}"
                                                  method="POST"
                                                  class="m-0"
                                                  style="width: 90px;"
                                                  onsubmit="return confirm('¿Está completamente seguro de eliminar este centro?')">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        class="btn btn-sm btn-danger fw-medium w-100">

                                                    Eliminar

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="4"
                                        class="text-center py-4 text-muted">

                                        No hay centros de formación registrados.

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
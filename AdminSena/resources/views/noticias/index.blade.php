@extends('layouts.app')

@section('content')

<div class="py-4">

    <div class="container">

        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">

            <div>
                <h2 class="fw-bold text-dark mb-1">
                    Listado de Noticias
                </h2>

                <p class="text-muted mb-0">
                    Gestión de noticias e información del SENA
                </p>
            </div>

            <a href="{{ route('noticia.create') }}"
               class="btn btn-success">
                + Nueva Noticia
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
                                <th>Imagen</th>
                                <th>Título</th>
                                <th>Fecha</th>
                                <th>Centro de Formación</th>
                                <th>Acciones</th>
                            </tr>

                        </thead>

                        <tbody>

                            @forelse($noticias as $noticia)

                                <tr>

                                    <td>
                                        {{ $noticia->id }}
                                    </td>

                                    <td>

                                        @if($noticia->image)

                                            <img src="{{ asset('storage/' . $noticia->image) }}"
                                                 alt="{{ $noticia->title }}"
                                                 width="80"
                                                 height="60"
                                                 style="object-fit: cover; border-radius: 8px;">

                                        @else

                                            <span class="text-muted">
                                                Sin imagen
                                            </span>

                                        @endif

                                    </td>

                                    <td>
                                        <strong>
                                            {{ $noticia->title }}
                                        </strong>
                                    </td>

                                    <td>
                                        {{ $noticia->publish_date }}
                                    </td>

                                    <td>
                                        {{ $noticia->trainingCenter->name ?? 'Sin centro' }}
                                    </td>

                                    <td>

                                        <a href="{{ route('noticia.show', $noticia->id) }}"
                                           class="btn btn-sm btn-info text-white">
                                            Ver
                                        </a>

                                        <a href="{{ route('noticia.edit', $noticia->id) }}"
                                           class="btn btn-sm btn-warning">
                                            Editar
                                        </a>

                                        <form action="{{ route('noticia.destroy', $noticia->id) }}"
                                              method="POST"
                                              class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-sm btn-danger"
                                                    onclick="return confirm('¿Deseas eliminar esta noticia?')">
                                                Eliminar
                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="6"
                                        class="text-center text-muted py-4">

                                        No hay noticias registradas.

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
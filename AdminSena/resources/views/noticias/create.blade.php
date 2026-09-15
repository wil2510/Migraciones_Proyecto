@extends('layouts.app')

@section('content')

<div class="py-4">

    <div class="container">

        <div class="mb-4">

            <h2 class="fw-bold">
                Nueva Noticia
            </h2>

            <p class="text-muted">
                Publica una nueva noticia del SENA.
            </p>

        </div>

        @if($errors->any())

            <div class="alert alert-danger">

                <ul class="mb-0">

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <form action="{{ route('noticia.store') }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">

                        <label class="form-label fw-bold">
                            Título
                        </label>

                        <input type="text"
                               name="title"
                               class="form-control"
                               value="{{ old('title') }}"
                               placeholder="Escribe el título de la noticia"
                               required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label fw-bold">
                            Contenido
                        </label>

                        <textarea name="content"
                                  class="form-control"
                                  rows="6"
                                  placeholder="Escribe el contenido de la noticia"
                                  required>{{ old('content') }}</textarea>

                    </div>

                    <div class="mb-3">

                        <label class="form-label fw-bold">
                            Imagen
                        </label>

                        <input type="file"
                               name="image"
                               class="form-control"
                               accept="image/*">

                        <small class="text-muted">
                            JPG, JPEG, PNG o WEBP. Máximo 2 MB.
                        </small>

                    </div>

                    <div class="mb-3">

                        <label class="form-label fw-bold">
                            Fecha de publicación
                        </label>

                        <input type="date"
                               name="publish_date"
                               class="form-control"
                               value="{{ old('publish_date') }}"
                               required>

                    </div>

                    <div class="mb-4">

                        <label class="form-label fw-bold">
                            Centro de Formación
                        </label>

                        <select name="training_center_id"
                                class="form-select"
                                required>

                            <option value="">
                                Seleccione un centro
                            </option>

                            @foreach($trainingCenters as $trainingCenter)

                                <option value="{{ $trainingCenter->id }}"
                                    {{ old('training_center_id') == $trainingCenter->id ? 'selected' : '' }}>

                                    {{ $trainingCenter->name }}

                                </option>

                            @endforeach

                        </select>

                    </div>

                    <a href="{{ route('noticia.index') }}"
                       class="btn btn-secondary">
                        Cancelar
                    </a>

                    <button type="submit"
                            class="btn btn-success">
                        Publicar Noticia
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection
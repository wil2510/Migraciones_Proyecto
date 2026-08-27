@extends('layouts.app')

@section('content')

<div class="py-5" style="background-color:#f4f6f9;">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8 col-lg-6">

                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">


                    {{-- CABECERA --}}

                    <div
                        class="card-header text-white text-center py-4"
                        style="background-color:#39A900;"
                    >

                        <h4 class="mb-0 fw-bold">
                            Crear Nuevo Curso
                        </h4>

                        <p class="mb-0 mt-1 small opacity-75">
                            Complete los datos del curso
                        </p>

                    </div>


                    {{-- CUERPO --}}

                    <div class="card-body p-4 p-md-5">


                        {{-- ERRORES --}}

                        @if ($errors->any())

                            <div class="alert alert-danger">

                                <strong>
                                    Hay errores en el formulario:
                                </strong>

                                <ul class="mb-0 mt-2">

                                    @foreach ($errors->all() as $error)

                                        <li>
                                            {{ $error }}
                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        <form
                            action="{{ route('course.store') }}"
                            method="POST"
                        >

                            @csrf


                            {{-- NOMBRE --}}

                            <div class="form-floating mb-4">

                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    class="form-control"
                                    placeholder="Nombre del curso"
                                    value="{{ old('name') }}"
                                    required
                                >

                                <label for="name">
                                    Nombre del Curso
                                </label>

                            </div>


                            {{-- CÓDIGO --}}

                            <div class="form-floating mb-4">

                                <input
                                    type="text"
                                    name="code"
                                    id="code"
                                    class="form-control"
                                    placeholder="Código del curso"
                                    value="{{ old('code') }}"
                                    required
                                >

                                <label for="code">
                                    Código del Curso
                                </label>

                            </div>


                            {{-- ÁREA --}}

                            <div class="form-floating mb-4">

                                <select
                                    name="area_id"
                                    id="area_id"
                                    class="form-select"
                                    required
                                >

                                    <option
                                        value=""
                                        disabled
                                        {{ old('area_id') ? '' : 'selected' }}
                                    >
                                        Seleccione un área
                                    </option>


                                    @foreach ($areas as $area)

                                        <option
                                            value="{{ $area->id }}"
                                            {{ old('area_id') == $area->id ? 'selected' : '' }}
                                        >

                                            {{ $area->name }}

                                        </option>

                                    @endforeach

                                </select>

                                <label for="area_id">
                                    Área
                                </label>

                            </div>


                            {{-- CENTRO --}}

                            <div class="form-floating mb-4">

                                <select
                                    name="training_center_id"
                                    id="training_center_id"
                                    class="form-select"
                                    required
                                >

                                    <option
                                        value=""
                                        disabled
                                        {{ old('training_center_id') ? '' : 'selected' }}
                                    >
                                        Seleccione un centro
                                    </option>


                                    @foreach ($training_centers as $center)

                                        <option
                                            value="{{ $center->id }}"
                                            {{ old('training_center_id') == $center->id ? 'selected' : '' }}
                                        >

                                            {{ $center->name }}

                                        </option>

                                    @endforeach

                                </select>

                                <label for="training_center_id">
                                    Centro de Formación
                                </label>

                            </div>


                            {{-- BOTONES --}}

                            <div class="d-flex justify-content-between mt-5">

                                <a
                                    href="{{ route('course.index') }}"
                                    class="btn btn-outline-secondary px-4 py-2"
                                >
                                    Cancelar
                                </a>


                                <button
                                    type="submit"
                                    class="btn text-white px-5 py-2 fw-bold"
                                    style="background-color:#39A900;"
                                >
                                    Guardar Curso
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
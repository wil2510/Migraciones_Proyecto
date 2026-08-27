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
                            Registrar Aprendiz
                        </h4>

                        <p class="mb-0 mt-1 small opacity-75">
                            Ingrese los datos del aprendiz
                        </p>

                    </div>


                    {{-- CUERPO --}}
                    <div class="card-body p-4 p-md-5 bg-white">

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


                        {{-- FORMULARIO --}}
                        <form
                            action="{{ route('apprentice.admin') }}"
                            method="POST"
                        >

                            @csrf


                            {{-- NOMBRE --}}
                            <div class="form-floating mb-4">

                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    placeholder="Nombre completo"
                                    required
                                >

                                <label for="name">
                                    Nombre Completo
                                </label>

                            </div>


                            {{-- EMAIL --}}
                            <div class="form-floating mb-4">

                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="Correo electrónico"
                                    required
                                >

                                <label for="email">
                                    Correo Electrónico
                                </label>

                            </div>


                            {{-- CELULAR --}}
                            <div class="form-floating mb-4">

                                <input
                                    type="text"
                                    class="form-control"
                                    id="cell_number"
                                    name="cell_number"
                                    value="{{ old('cell_number') }}"
                                    placeholder="Número de celular"
                                    required
                                >

                                <label for="cell_number">
                                    Número de Celular
                                </label>

                            </div>


                            {{-- CURSO --}}
                            <div class="form-floating mb-4">

                                <select
                                    name="course_id"
                                    id="course_id"
                                    class="form-select"
                                    required
                                >

                                    <option
                                        value=""
                                        disabled
                                        {{ old('course_id') ? '' : 'selected' }}
                                    >
                                        Seleccione un curso...
                                    </option>

                                    @foreach ($courses as $course)

                                        <option
                                            value="{{ $course->id }}"
                                            {{ old('course_id') == $course->id ? 'selected' : '' }}
                                        >
                                            {{ $course->code }} -
                                            {{ $course->name }}
                                        </option>

                                    @endforeach

                                </select>

                                <label for="course_id">
                                    Curso
                                </label>

                            </div>


                            {{-- COMPUTADOR --}}
                            <div class="form-floating mb-4">

                                <select
                                    name="computer_id"
                                    id="computer_id"
                                    class="form-select"
                                    required
                                >

                                    <option
                                        value=""
                                        disabled
                                        {{ old('computer_id') ? '' : 'selected' }}
                                    >
                                        Seleccione un computador...
                                    </option>

                                    @foreach ($computers as $computer)

                                        <option
                                            value="{{ $computer->id }}"
                                            {{ old('computer_id') == $computer->id ? 'selected' : '' }}
                                        >
                                            Equipo N° {{ $computer->number }}
                                        </option>

                                    @endforeach

                                </select>

                                <label for="computer_id">
                                    Computador Asociado
                                </label>

                            </div>


                            {{-- BOTONES --}}
                            <div class="d-flex justify-content-between mt-5">

                                <a
                                    href="{{ route('apprentice.index') }}"
                                    class="btn btn-outline-secondary px-4 py-2"
                                >
                                    Cancelar
                                </a>

                                <button
                                    type="submit"
                                    class="btn text-white px-5 py-2 fw-bold"
                                    style="background-color:#39A900;"
                                >
                                    Guardar Aprendiz
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
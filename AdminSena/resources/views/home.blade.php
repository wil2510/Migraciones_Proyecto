@extends('layouts.app')

@section('content')

<div
    style="
        background:#f4f7f5;
        min-height:92vh;
        padding:35px 0 60px;
    "
>

    <div class="container">

        {{-- ========================================================= --}}
        {{-- HERO --}}
        {{-- ========================================================= --}}

        <section class="mb-4">

            <div
                class="overflow-hidden"
                style="
                    background:#17231d;
                    border-radius:24px;
                    box-shadow:0 12px 30px rgba(0,0,0,.10);
                "
            >

                <div class="row align-items-stretch">

                    <div class="col-lg-8">

                        <div class="p-4 p-lg-5 h-100">

                            <div
                                class="d-inline-flex align-items-center px-3 py-2 mb-4"
                                style="
                                    background:rgba(25,135,84,.18);
                                    color:#73d49f;
                                    border:1px solid rgba(115,212,159,.15);
                                    border-radius:30px;
                                    font-size:12px;
                                    font-weight:700;
                                    letter-spacing:1px;
                                "
                            >
                                <i class="bi bi-grid-1x2-fill me-2"></i>
                                PANEL ADMINISTRATIVO
                            </div>

                            <h1
                                class="text-white fw-bold mb-3"
                                style="
                                    font-size:clamp(35px,5vw,58px);
                                    line-height:1.05;
                                    letter-spacing:-1.5px;
                                "
                            >
                                Administra.
                                <br>

                                <span style="color:#39a900;">
                                    Organiza.
                                </span>

                                <br>

                                <span style="color:white;">
                                    Avanza.
                                </span>
                            </h1>

                            <p
                                class="mb-4"
                                style="
                                    max-width:620px;
                                    color:rgba(255,255,255,.68);
                                    font-size:17px;
                                    line-height:1.7;
                                "
                            >
                                Bienvenido a
                                <strong style="color:white;">
                                    Admin SENA
                                </strong>,
                                una plataforma para gestionar de manera
                                centralizada la información académica,
                                administrativa y formativa.
                            </p>

                            <div class="d-flex flex-wrap gap-2">

                                <a
                                    href="{{ route('oferta.index') }}"
                                    class="btn text-white fw-bold px-4 py-3"
                                    style="
                                        background:#198754;
                                        border-radius:11px;
                                    "
                                >
                                    <i class="bi bi-megaphone-fill me-2"></i>
                                    Ver ofertas SENA
                                </a>

                                <a
                                    href="{{ route('programa.index') }}"
                                    class="btn px-4 py-3 fw-semibold"
                                    style="
                                        background:rgba(255,255,255,.08);
                                        border:1px solid rgba(255,255,255,.14);
                                        color:white;
                                        border-radius:11px;
                                    "
                                >
                                    <i class="bi bi-arrow-right me-2"></i>
                                    Explorar plataforma
                                </a>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 d-none d-lg-block">

                        <div
                            class="h-100 d-flex align-items-center justify-content-center"
                            style="
                                min-height:390px;
                                background:
                                radial-gradient(
                                    circle at 50% 35%,
                                    rgba(25,135,84,.35),
                                    transparent 45%
                                );
                            "
                        >

                            <div
                                style="
                                    width:230px;
                                    height:230px;
                                    border-radius:55px;
                                    border:1px solid rgba(255,255,255,.10);
                                    background:rgba(255,255,255,.04);
                                    display:flex;
                                    align-items:center;
                                    justify-content:center;
                                    transform:rotate(4deg);
                                "
                            >

                                <div
                                    style="
                                        width:170px;
                                        height:170px;
                                        border-radius:42px;
                                        background:#198754;
                                        display:flex;
                                        align-items:center;
                                        justify-content:center;
                                        transform:rotate(-4deg);
                                        box-shadow:
                                        0 20px 50px
                                        rgba(25,135,84,.30);
                                    "
                                >

                                    <i
                                        class="bi bi-buildings-fill text-white"
                                        style="font-size:75px;"
                                    ></i>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- ========================================================= --}}
        {{-- ACCESOS PRINCIPALES --}}
        {{-- ========================================================= --}}

        <section class="mb-5">

            <div class="row g-3">

                <div class="col-md-6 col-xl-3">

                    <a
                        href="{{ route('programa.index') }}"
                        class="text-decoration-none"
                    >

                        <div
                            class="bg-white h-100 p-4"
                            style="
                                border-radius:18px;
                                box-shadow:0 6px 20px rgba(0,0,0,.055);
                            "
                        >

                            <div class="d-flex justify-content-between">

                                <div
                                    class="d-flex align-items-center justify-content-center"
                                    style="
                                        width:48px;
                                        height:48px;
                                        border-radius:13px;
                                        background:#e8f5ee;
                                    "
                                >
                                    <i
                                        class="bi bi-mortarboard-fill"
                                        style="
                                            color:#198754;
                                            font-size:22px;
                                        "
                                    ></i>
                                </div>

                                <i
                                    class="bi bi-arrow-up-right"
                                    style="color:#adb5bd;"
                                ></i>

                            </div>

                            <div class="mt-4">

                                <div
                                    class="fw-bold text-dark"
                                    style="font-size:18px;"
                                >
                                    Programas
                                </div>

                                <small class="text-muted">
                                    Gestión de formación
                                </small>

                            </div>

                        </div>

                    </a>

                </div>


                <div class="col-md-6 col-xl-3">

                    <a
                        href="{{ route('ficha.index') }}"
                        class="text-decoration-none"
                    >

                        <div
                            class="bg-white h-100 p-4"
                            style="
                                border-radius:18px;
                                box-shadow:0 6px 20px rgba(0,0,0,.055);
                            "
                        >

                            <div class="d-flex justify-content-between">

                                <div
                                    class="d-flex align-items-center justify-content-center"
                                    style="
                                        width:48px;
                                        height:48px;
                                        border-radius:13px;
                                        background:#eef5f2;
                                    "
                                >
                                    <i
                                        class="bi bi-card-list"
                                        style="
                                            color:#198754;
                                            font-size:23px;
                                        "
                                    ></i>
                                </div>

                                <i
                                    class="bi bi-arrow-up-right"
                                    style="color:#adb5bd;"
                                ></i>

                            </div>

                            <div class="mt-4">

                                <div
                                    class="fw-bold text-dark"
                                    style="font-size:18px;"
                                >
                                    Fichas
                                </div>

                                <small class="text-muted">
                                    Grupos de formación
                                </small>

                            </div>

                        </div>

                    </a>

                </div>


                <div class="col-md-6 col-xl-3">

                    <a
                        href="{{ route('apprentice.index') }}"
                        class="text-decoration-none"
                    >

                        <div
                            class="bg-white h-100 p-4"
                            style="
                                border-radius:18px;
                                box-shadow:0 6px 20px rgba(0,0,0,.055);
                            "
                        >

                            <div class="d-flex justify-content-between">

                                <div
                                    class="d-flex align-items-center justify-content-center"
                                    style="
                                        width:48px;
                                        height:48px;
                                        border-radius:13px;
                                        background:#e8f5ee;
                                    "
                                >
                                    <i
                                        class="bi bi-people-fill"
                                        style="
                                            color:#198754;
                                            font-size:22px;
                                        "
                                    ></i>
                                </div>

                                <i
                                    class="bi bi-arrow-up-right"
                                    style="color:#adb5bd;"
                                ></i>

                            </div>

                            <div class="mt-4">

                                <div
                                    class="fw-bold text-dark"
                                    style="font-size:18px;"
                                >
                                    Aprendices
                                </div>

                                <small class="text-muted">
                                    Comunidad académica
                                </small>

                            </div>

                        </div>

                    </a>

                </div>


                <div class="col-md-6 col-xl-3">

                    <a
                        href="{{ route('teacher.index') }}"
                        class="text-decoration-none"
                    >

                        <div
                            class="bg-white h-100 p-4"
                            style="
                                border-radius:18px;
                                box-shadow:0 6px 20px rgba(0,0,0,.055);
                            "
                        >

                            <div class="d-flex justify-content-between">

                                <div
                                    class="d-flex align-items-center justify-content-center"
                                    style="
                                        width:48px;
                                        height:48px;
                                        border-radius:13px;
                                        background:#e8f5ee;
                                    "
                                >
                                    <i
                                        class="bi bi-person-workspace"
                                        style="
                                            color:#198754;
                                            font-size:22px;
                                        "
                                    ></i>
                                </div>

                                <i
                                    class="bi bi-arrow-up-right"
                                    style="color:#adb5bd;"
                                ></i>

                            </div>

                            <div class="mt-4">

                                <div
                                    class="fw-bold text-dark"
                                    style="font-size:18px;"
                                >
                                    Instructores
                                </div>

                                <small class="text-muted">
                                    Equipo formativo
                                </small>

                            </div>

                        </div>

                    </a>

                </div>

            </div>

        </section>


        {{-- ========================================================= --}}
        {{-- NUEVA SECCIÓN: OFERTAS SENA --}}
        {{-- ========================================================= --}}

        <section class="mb-5">

            <div
                class="p-4 p-lg-5 overflow-hidden"
                style="
                    background:#17231d;
                    border-radius:24px;
                    position:relative;
                    box-shadow:0 10px 30px rgba(0,0,0,.08);
                "
            >

                {{-- DECORACIÓN --}}
                <div
                    style="
                        position:absolute;
                        width:300px;
                        height:300px;
                        border:1px solid rgba(57,169,0,.12);
                        border-radius:50%;
                        right:-100px;
                        top:-130px;
                    "
                ></div>

                <div
                    style="
                        position:absolute;
                        width:180px;
                        height:180px;
                        border:1px solid rgba(57,169,0,.10);
                        border-radius:50%;
                        right:10px;
                        bottom:-100px;
                    "
                ></div>


                <div
                    class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-end mb-4 position-relative"
                >

                    <div>

                        <div
                            class="text-uppercase fw-bold mb-2"
                            style="
                                color:#73d49f;
                                font-size:11px;
                                letter-spacing:2px;
                            "
                        >
                            Oportunidades de formación
                        </div>

                        <h2
                            class="text-white fw-bold mb-2"
                            style="
                                font-size:32px;
                                letter-spacing:-.5px;
                            "
                        >
                            Ofertas del SENA
                        </h2>

                        <p
                            class="mb-0"
                            style="
                                color:rgba(255,255,255,.60);
                                max-width:650px;
                            "
                        >
                            Consulta las oportunidades de formación
                            disponibles y conoce las diferentes opciones
                            que puedes administrar desde Admin SENA.
                        </p>

                    </div>


                    <a
                        href="{{ route('oferta.index') }}"
                        class="btn mt-3 mt-lg-0 px-4 py-2 fw-semibold"
                        style="
                            background:#198754;
                            color:white;
                            border-radius:10px;
                        "
                    >
                        Ver todas
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>

                </div>


                {{-- TARJETAS DE OFERTA --}}

                <div class="row g-3 position-relative">


                    {{-- OFERTA 1 --}}
                    <div class="col-lg-4">

                        <div
                            class="h-100 p-4"
                            style="
                                background:#ffffff;
                                border-radius:18px;
                            "
                        >

                            <div
                                class="d-flex justify-content-between align-items-start mb-4"
                            >

                                <div
                                    class="d-flex align-items-center justify-content-center"
                                    style="
                                        width:54px;
                                        height:54px;
                                        border-radius:15px;
                                        background:#e8f5ee;
                                    "
                                >
                                    <i
                                        class="bi bi-laptop-fill"
                                        style="
                                            color:#198754;
                                            font-size:24px;
                                        "
                                    ></i>
                                </div>


                                <span
                                    class="badge rounded-pill px-3 py-2"
                                    style="
                                        background:#e8f5ee;
                                        color:#198754;
                                    "
                                >
                                    TECNÓLOGO
                                </span>

                            </div>


                            <h5 class="fw-bold text-dark mb-2">
                                Análisis y Desarrollo de Software
                            </h5>


                            <p
                                class="text-muted small mb-4"
                                style="line-height:1.6;"
                            >
                                Formación orientada al desarrollo de
                                aplicaciones y soluciones tecnológicas.
                            </p>


                            <div class="mb-3">

                                <div
                                    class="d-flex align-items-center mb-2"
                                >

                                    <i
                                        class="bi bi-geo-alt-fill me-2"
                                        style="color:#198754;"
                                    ></i>

                                    <small class="text-muted">
                                        Centro de formación
                                    </small>

                                </div>


                                <div
                                    class="d-flex align-items-center"
                                >

                                    <i
                                        class="bi bi-clock-fill me-2"
                                        style="color:#198754;"
                                    ></i>

                                    <small class="text-muted">
                                        Jornada disponible
                                    </small>

                                </div>

                            </div>


                            <a
                                href="{{ route('oferta.index') }}"
                                class="btn btn-outline-success w-100 mt-2"
                                style="border-radius:10px;"
                            >
                                Consultar oferta
                            </a>

                        </div>

                    </div>


                    {{-- OFERTA 2 --}}
                    <div class="col-lg-4">

                        <div
                            class="h-100 p-4"
                            style="
                                background:#ffffff;
                                border-radius:18px;
                            "
                        >

                            <div
                                class="d-flex justify-content-between align-items-start mb-4"
                            >

                                <div
                                    class="d-flex align-items-center justify-content-center"
                                    style="
                                        width:54px;
                                        height:54px;
                                        border-radius:15px;
                                        background:#e8f5ee;
                                    "
                                >
                                    <i
                                        class="bi bi-cpu-fill"
                                        style="
                                            color:#198754;
                                            font-size:24px;
                                        "
                                    ></i>
                                </div>


                                <span
                                    class="badge rounded-pill px-3 py-2"
                                    style="
                                        background:#eef2f0;
                                        color:#495057;
                                    "
                                >
                                    TECNÓLOGO
                                </span>

                            </div>


                            <h5 class="fw-bold text-dark mb-2">
                                Gestión de Tecnología
                            </h5>


                            <p
                                class="text-muted small mb-4"
                                style="line-height:1.6;"
                            >
                                Alternativa de formación enfocada en
                                procesos tecnológicos e innovación.
                            </p>


                            <div class="mb-3">

                                <div
                                    class="d-flex align-items-center mb-2"
                                >

                                    <i
                                        class="bi bi-geo-alt-fill me-2"
                                        style="color:#198754;"
                                    ></i>

                                    <small class="text-muted">
                                        Centro de formación
                                    </small>

                                </div>


                                <div
                                    class="d-flex align-items-center"
                                >

                                    <i
                                        class="bi bi-clock-fill me-2"
                                        style="color:#198754;"
                                    ></i>

                                    <small class="text-muted">
                                        Jornada disponible
                                    </small>

                                </div>

                            </div>


                            <a
                                href="{{ route('oferta.index') }}"
                                class="btn btn-outline-success w-100 mt-2"
                                style="border-radius:10px;"
                            >
                                Consultar oferta
                            </a>

                        </div>

                    </div>


                    {{-- OFERTA 3 --}}
                    <div class="col-lg-4">

                        <div
                            class="h-100 p-4"
                            style="
                                background:#ffffff;
                                border-radius:18px;
                            "
                        >

                            <div
                                class="d-flex justify-content-between align-items-start mb-4"
                            >

                                <div
                                    class="d-flex align-items-center justify-content-center"
                                    style="
                                        width:54px;
                                        height:54px;
                                        border-radius:15px;
                                        background:#e8f5ee;
                                    "
                                >
                                    <i
                                        class="bi bi-tools"
                                        style="
                                            color:#198754;
                                            font-size:24px;
                                        "
                                    ></i>
                                </div>


                                <span
                                    class="badge rounded-pill px-3 py-2"
                                    style="
                                        background:#fff4d6;
                                        color:#956f00;
                                    "
                                >
                                    TÉCNICO
                                </span>

                            </div>


                            <h5 class="fw-bold text-dark mb-2">
                                Formación para el trabajo
                            </h5>


                            <p
                                class="text-muted small mb-4"
                                style="line-height:1.6;"
                            >
                                Opciones de formación técnica para
                                fortalecer conocimientos y habilidades.
                            </p>


                            <div class="mb-3">

                                <div
                                    class="d-flex align-items-center mb-2"
                                >

                                    <i
                                        class="bi bi-geo-alt-fill me-2"
                                        style="color:#198754;"
                                    ></i>

                                    <small class="text-muted">
                                        Centro de formación
                                    </small>

                                </div>


                                <div
                                    class="d-flex align-items-center"
                                >

                                    <i
                                        class="bi bi-clock-fill me-2"
                                        style="color:#198754;"
                                    ></i>

                                    <small class="text-muted">
                                        Jornada disponible
                                    </small>

                                </div>

                            </div>


                            <a
                                href="{{ route('oferta.index') }}"
                                class="btn btn-outline-success w-100 mt-2"
                                style="border-radius:10px;"
                            >
                                Consultar oferta
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- ========================================================= --}}
        {{-- MÓDULOS DE ADMINISTRACIÓN --}}
        {{-- ========================================================= --}}

        <section class="mb-5">

            <div class="mb-4">

                <div
                    class="text-uppercase fw-bold mb-2"
                    style="
                        color:#198754;
                        font-size:11px;
                        letter-spacing:2px;
                    "
                >
                    Centro de control
                </div>

                <h2
                    class="fw-bold mb-1"
                    style="
                        color:#17231d;
                        font-size:32px;
                    "
                >
                    Módulos de administración
                </h2>

                <p class="text-muted mb-0">
                    Accede directamente a las diferentes áreas de gestión.
                </p>

            </div>


            <div class="row g-3">


                {{-- ÁREAS --}}
                <div class="col-md-6 col-lg-4">

                    <a
                        href="{{ route('area.index') }}"
                        class="text-decoration-none"
                    >

                        <div
                            class="bg-white p-4 h-100"
                            style="
                                border-radius:18px;
                                border-left:4px solid #198754;
                                box-shadow:0 6px 20px rgba(0,0,0,.055);
                            "
                        >

                            <div class="d-flex align-items-start">

                                <div
                                    class="d-flex align-items-center justify-content-center me-3"
                                    style="
                                        width:52px;
                                        height:52px;
                                        background:#e8f5ee;
                                        border-radius:14px;
                                    "
                                >
                                    <i
                                        class="bi bi-grid-fill"
                                        style="
                                            color:#198754;
                                            font-size:22px;
                                        "
                                    ></i>
                                </div>


                                <div>

                                    <h5 class="fw-bold text-dark mb-1">
                                        Áreas
                                    </h5>

                                    <p class="text-muted small mb-3">
                                        Administra las áreas institucionales.
                                    </p>

                                    <span
                                        style="
                                            color:#198754;
                                            font-size:13px;
                                            font-weight:600;
                                        "
                                    >
                                        Gestionar
                                        <i class="bi bi-arrow-right ms-1"></i>
                                    </span>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>


                {{-- CENTROS --}}
                <div class="col-md-6 col-lg-4">

                    <a
                        href="{{ route('trainingcenter.index') }}"
                        class="text-decoration-none"
                    >

                        <div
                            class="bg-white p-4 h-100"
                            style="
                                border-radius:18px;
                                border-left:4px solid #198754;
                                box-shadow:0 6px 20px rgba(0,0,0,.055);
                            "
                        >

                            <div class="d-flex align-items-start">

                                <div
                                    class="d-flex align-items-center justify-content-center me-3"
                                    style="
                                        width:52px;
                                        height:52px;
                                        background:#e8f5ee;
                                        border-radius:14px;
                                    "
                                >
                                    <i
                                        class="bi bi-building-fill"
                                        style="
                                            color:#198754;
                                            font-size:22px;
                                        "
                                    ></i>
                                </div>


                                <div>

                                    <h5 class="fw-bold text-dark mb-1">
                                        Centros
                                    </h5>

                                    <p class="text-muted small mb-3">
                                        Gestiona centros de formación.
                                    </p>

                                    <span
                                        style="
                                            color:#198754;
                                            font-size:13px;
                                            font-weight:600;
                                        "
                                    >
                                        Gestionar
                                        <i class="bi bi-arrow-right ms-1"></i>
                                    </span>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>


                {{-- CURSOS --}}
                <div class="col-md-6 col-lg-4">

                    <a
                        href="{{ route('course.index') }}"
                        class="text-decoration-none"
                    >

                        <div
                            class="bg-white p-4 h-100"
                            style="
                                border-radius:18px;
                                border-left:4px solid #198754;
                                box-shadow:0 6px 20px rgba(0,0,0,.055);
                            "
                        >

                            <div class="d-flex align-items-start">

                                <div
                                    class="d-flex align-items-center justify-content-center me-3"
                                    style="
                                        width:52px;
                                        height:52px;
                                        background:#e8f5ee;
                                        border-radius:14px;
                                    "
                                >
                                    <i
                                        class="bi bi-book-fill"
                                        style="
                                            color:#198754;
                                            font-size:22px;
                                        "
                                    ></i>
                                </div>


                                <div>

                                    <h5 class="fw-bold text-dark mb-1">
                                        Cursos
                                    </h5>

                                    <p class="text-muted small mb-3">
                                        Administra cursos de formación.
                                    </p>

                                    <span
                                        style="
                                            color:#198754;
                                            font-size:13px;
                                            font-weight:600;
                                        "
                                    >
                                        Gestionar
                                        <i class="bi bi-arrow-right ms-1"></i>
                                    </span>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>


                {{-- COMPUTADORES --}}
                <div class="col-md-6 col-lg-4">

                    <a
                        href="{{ route('computer.index') }}"
                        class="text-decoration-none"
                    >

                        <div
                            class="bg-white p-4 h-100"
                            style="
                                border-radius:18px;
                                border-left:4px solid #198754;
                                box-shadow:0 6px 20px rgba(0,0,0,.055);
                            "
                        >

                            <div class="d-flex align-items-start">

                                <div
                                    class="d-flex align-items-center justify-content-center me-3"
                                    style="
                                        width:52px;
                                        height:52px;
                                        background:#e8f5ee;
                                        border-radius:14px;
                                    "
                                >
                                    <i
                                        class="bi bi-pc-display"
                                        style="
                                            color:#198754;
                                            font-size:22px;
                                        "
                                    ></i>
                                </div>


                                <div>

                                    <h5 class="fw-bold text-dark mb-1">
                                        Computadores
                                    </h5>

                                    <p class="text-muted small mb-3">
                                        Controla los equipos disponibles.
                                    </p>

                                    <span
                                        style="
                                            color:#198754;
                                            font-size:13px;
                                            font-weight:600;
                                        "
                                    >
                                        Gestionar
                                        <i class="bi bi-arrow-right ms-1"></i>
                                    </span>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>


                {{-- AMBIENTES --}}
                <div class="col-md-6 col-lg-4">

                    <a
                        href="{{ route('ambiente.index') }}"
                        class="text-decoration-none"
                    >

                        <div
                            class="bg-white p-4 h-100"
                            style="
                                border-radius:18px;
                                border-left:4px solid #198754;
                                box-shadow:0 6px 20px rgba(0,0,0,.055);
                            "
                        >

                            <div class="d-flex align-items-start">

                                <div
                                    class="d-flex align-items-center justify-content-center me-3"
                                    style="
                                        width:52px;
                                        height:52px;
                                        background:#e8f5ee;
                                        border-radius:14px;
                                    "
                                >
                                    <i
                                        class="bi bi-pc-display-horizontal"
                                        style="
                                            color:#198754;
                                            font-size:22px;
                                        "
                                    ></i>
                                </div>


                                <div>

                                    <h5 class="fw-bold text-dark mb-1">
                                        Ambientes
                                    </h5>

                                    <p class="text-muted small mb-3">
                                        Administra ambientes académicos.
                                    </p>

                                    <span
                                        style="
                                            color:#198754;
                                            font-size:13px;
                                            font-weight:600;
                                        "
                                    >
                                        Gestionar
                                        <i class="bi bi-arrow-right ms-1"></i>
                                    </span>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>


                {{-- NOTICIAS --}}
                <div class="col-md-6 col-lg-4">

                    <a
                        href="{{ route('noticia.index') }}"
                        class="text-decoration-none"
                    >

                        <div
                            class="bg-white p-4 h-100"
                            style="
                                border-radius:18px;
                                border-left:4px solid #198754;
                                box-shadow:0 6px 20px rgba(0,0,0,.055);
                            "
                        >

                            <div class="d-flex align-items-start">

                                <div
                                    class="d-flex align-items-center justify-content-center me-3"
                                    style="
                                        width:52px;
                                        height:52px;
                                        background:#e8f5ee;
                                        border-radius:14px;
                                    "
                                >
                                    <i
                                        class="bi bi-newspaper"
                                        style="
                                            color:#198754;
                                            font-size:22px;
                                        "
                                    ></i>
                                </div>


                                <div>

                                    <h5 class="fw-bold text-dark mb-1">
                                        Noticias
                                    </h5>

                                    <p class="text-muted small mb-3">
                                        Publica novedades institucionales.
                                    </p>

                                    <span
                                        style="
                                            color:#198754;
                                            font-size:13px;
                                            font-weight:600;
                                        "
                                    >
                                        Gestionar
                                        <i class="bi bi-arrow-right ms-1"></i>
                                    </span>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>

            </div>

        </section>


        {{-- ========================================================= --}}
        {{-- GESTIÓN CENTRALIZADA --}}
        {{-- ========================================================= --}}

        <section class="mb-5">

            <div
                class="p-4 p-lg-5"
                style="
                    background:#ffffff;
                    border-radius:22px;
                    box-shadow:0 7px 24px rgba(0,0,0,.055);
                "
            >

                <div class="row align-items-center">

                    <div class="col-lg-7">

                        <div
                            class="text-uppercase fw-bold mb-2"
                            style="
                                color:#198754;
                                font-size:11px;
                                letter-spacing:2px;
                            "
                        >
                            Gestión centralizada
                        </div>


                        <h3
                            class="fw-bold mb-3"
                            style="
                                color:#17231d;
                                font-size:29px;
                            "
                        >
                            Todo lo que necesitas,
                            <br>
                            desde un solo lugar.
                        </h3>


                        <p
                            class="text-muted mb-4"
                            style="
                                max-width:600px;
                                line-height:1.8;
                            "
                        >
                            Admin SENA reúne las herramientas necesarias
                            para organizar, consultar y administrar
                            la información académica y administrativa.
                        </p>


                        <div class="d-flex flex-wrap gap-2">

                            <a
                                href="{{ route('oferta.index') }}"
                                class="btn text-white fw-semibold px-4 py-2"
                                style="
                                    background:#198754;
                                    border-radius:10px;
                                "
                            >
                                <i class="bi bi-megaphone me-2"></i>
                                Ver ofertas
                            </a>


                            <a
                                href="{{ route('noticia.index') }}"
                                class="btn btn-light border px-4 py-2 fw-semibold"
                                style="border-radius:10px;"
                            >
                                <i class="bi bi-newspaper me-2"></i>
                                Noticias
                            </a>

                        </div>

                    </div>


                    <div class="col-lg-5 mt-4 mt-lg-0">

                        <div
                            class="p-4"
                            style="
                                background:#17231d;
                                border-radius:18px;
                            "
                        >

                            <div
                                class="d-flex align-items-center mb-4"
                            >

                                <div
                                    class="d-flex align-items-center justify-content-center me-3"
                                    style="
                                        width:48px;
                                        height:48px;
                                        border-radius:13px;
                                        background:#198754;
                                    "
                                >
                                    <i
                                        class="bi bi-check2-all text-white"
                                        style="font-size:23px;"
                                    ></i>
                                </div>


                                <div>

                                    <div class="text-white fw-bold">
                                        Plataforma organizada
                                    </div>

                                    <small
                                        style="
                                            color:rgba(255,255,255,.55);
                                        "
                                    >
                                        Admin SENA
                                    </small>

                                </div>

                            </div>


                            <div class="mb-3">

                                <div
                                    class="d-flex justify-content-between mb-2"
                                >
                                    <small class="text-white-50">
                                        Gestión académica
                                    </small>

                                    <small style="color:#73d49f;">
                                        Activa
                                    </small>
                                </div>

                                <div
                                    style="
                                        height:7px;
                                        background:rgba(255,255,255,.08);
                                        border-radius:20px;
                                    "
                                >

                                    <div
                                        style="
                                            width:88%;
                                            height:100%;
                                            background:#198754;
                                            border-radius:20px;
                                        "
                                    ></div>

                                </div>

                            </div>


                            <div class="mb-3">

                                <div
                                    class="d-flex justify-content-between mb-2"
                                >
                                    <small class="text-white-50">
                                        Organización
                                    </small>

                                    <small style="color:#73d49f;">
                                        Activa
                                    </small>
                                </div>

                                <div
                                    style="
                                        height:7px;
                                        background:rgba(255,255,255,.08);
                                        border-radius:20px;
                                    "
                                >

                                    <div
                                        style="
                                            width:94%;
                                            height:100%;
                                            background:#39a900;
                                            border-radius:20px;
                                        "
                                    ></div>

                                </div>

                            </div>


                            <div>

                                <div
                                    class="d-flex justify-content-between mb-2"
                                >
                                    <small class="text-white-50">
                                        Información
                                    </small>

                                    <small style="color:#73d49f;">
                                        Disponible
                                    </small>
                                </div>

                                <div
                                    style="
                                        height:7px;
                                        background:rgba(255,255,255,.08);
                                        border-radius:20px;
                                    "
                                >

                                    <div
                                        style="
                                            width:97%;
                                            height:100%;
                                            background:#198754;
                                            border-radius:20px;
                                        "
                                    ></div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- ========================================================= --}}
        {{-- ACCIONES RÁPIDAS --}}
        {{-- ========================================================= --}}

        <section class="mb-5">

            <div class="mb-4">

                <div
                    class="text-uppercase fw-bold mb-2"
                    style="
                        color:#198754;
                        font-size:11px;
                        letter-spacing:2px;
                    "
                >
                    Acciones rápidas
                </div>

                <h3
                    class="fw-bold mb-1"
                    style="color:#17231d;"
                >
                    ¿Qué deseas administrar?
                </h3>

                <p class="text-muted mb-0">
                    Accede directamente a las acciones más utilizadas.
                </p>

            </div>


            <div class="row g-3">

                <div class="col-6 col-lg-3">

                    <a
                        href="{{ route('programa.create') }}"
                        class="text-decoration-none"
                    >

                        <div
                            class="p-4 text-center bg-white"
                            style="
                                border-radius:16px;
                                box-shadow:0 5px 18px rgba(0,0,0,.05);
                            "
                        >

                            <i
                                class="bi bi-plus-circle-fill"
                                style="
                                    color:#198754;
                                    font-size:30px;
                                "
                            ></i>

                            <div class="fw-bold text-dark mt-3">
                                Nuevo programa
                            </div>

                        </div>

                    </a>

                </div>


                <div class="col-6 col-lg-3">

                    <a
                        href="{{ route('oferta.create') }}"
                        class="text-decoration-none"
                    >

                        <div
                            class="p-4 text-center bg-white"
                            style="
                                border-radius:16px;
                                box-shadow:0 5px 18px rgba(0,0,0,.05);
                            "
                        >

                            <i
                                class="bi bi-megaphone-fill"
                                style="
                                    color:#198754;
                                    font-size:30px;
                                "
                            ></i>

                            <div class="fw-bold text-dark mt-3">
                                Nueva oferta
                            </div>

                        </div>

                    </a>

                </div>


                <div class="col-6 col-lg-3">

                    <a
                        href="{{ route('ambiente.index') }}"
                        class="text-decoration-none"
                    >

                        <div
                            class="p-4 text-center bg-white"
                            style="
                                border-radius:16px;
                                box-shadow:0 5px 18px rgba(0,0,0,.05);
                            "
                        >

                            <i
                                class="bi bi-pc-display-horizontal"
                                style="
                                    color:#198754;
                                    font-size:30px;
                                "
                            ></i>

                            <div class="fw-bold text-dark mt-3">
                                Ver ambientes
                            </div>

                        </div>

                    </a>

                </div>


                <div class="col-6 col-lg-3">

                    <a
                        href="{{ route('noticia.index') }}"
                        class="text-decoration-none"
                    >

                        <div
                            class="p-4 text-center bg-white"
                            style="
                                border-radius:16px;
                                box-shadow:0 5px 18px rgba(0,0,0,.05);
                            "
                        >

                            <i
                                class="bi bi-newspaper"
                                style="
                                    color:#198754;
                                    font-size:30px;
                                "
                            ></i>

                            <div class="fw-bold text-dark mt-3">
                                Gestionar noticias
                            </div>

                        </div>

                    </a>

                </div>

            </div>

        </section>


        {{-- ========================================================= --}}
        {{-- CIERRE --}}
        {{-- ========================================================= --}}

        <section>

            <div
                class="overflow-hidden"
                style="
                    background:
                        linear-gradient(
                            135deg,
                            #126b45,
                            #198754
                        );
                    border-radius:22px;
                    box-shadow:
                        0 10px 28px
                        rgba(25,135,84,.18);
                "
            >

                <div class="row align-items-center">

                    <div class="col-lg-8">

                        <div class="p-4 p-lg-5">

                            <div
                                class="text-white text-uppercase fw-bold mb-2"
                                style="
                                    font-size:11px;
                                    letter-spacing:2px;
                                    opacity:.75;
                                "
                            >
                                ADMIN SENA
                            </div>


                            <h3
                                class="text-white fw-bold mb-3"
                                style="font-size:30px;"
                            >
                                Gestión académica en un solo lugar.
                            </h3>


                            <p
                                class="mb-0"
                                style="
                                    color:rgba(255,255,255,.78);
                                    max-width:650px;
                                    line-height:1.7;
                                "
                            >
                                Una plataforma diseñada para organizar,
                                consultar y administrar la información
                                relacionada con los procesos académicos.
                            </p>

                        </div>

                    </div>


                    <div class="col-lg-4">

                        <div
                            class="d-flex justify-content-center align-items-center p-4"
                        >

                            <img
                                src="{{ asset('storage/images/AdminSena-logo.png') }}"
                                alt="AdminSena"
                                style="
                                    width:280px;
                                    max-width:100%;
                                    object-fit:contain;
                                    filter:brightness(0) invert(1);
                                "
                            >

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- ========================================================= --}}
        {{-- FOOTER DEL HOME --}}
        {{-- ========================================================= --}}

        <div class="text-center mt-5">

            <small class="text-muted">

                <i
                    class="bi bi-shield-check me-1"
                    style="color:#198754;"
                ></i>

                Sistema de Administración Académica · SENA

            </small>

        </div>

    </div>

</div>

@endsection

@extends('layouts.app')

@section('title', 'Personal Administrativo - Institución Educativa San José')

@section('contenido')
<link rel="stylesheet" href="style/css/primaria.css">
    <!-- Hero Section para Personal Administrativo -->
    <div class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold text-white">Nuestro Personal Administrativo</h1>
            <p class="lead text-white">Equipo comprometido con la gestión y excelencia educativa</p>
        </div>
    </div>

    <!-- Reseña sobre la Importancia del Personal Administrativo -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-4">El Valor del Personal Administrativo</h2>
                        <p class="lead text-muted">
                            El personal administrativo de nuestra institución es fundamental para el buen funcionamiento y
                            la gestión eficiente de todos los recursos y procesos educativos. Su labor abarca desde la
                            administración de los recursos humanos hasta la gestión financiera y académica.
                        </p>
                        <p class="lead text-muted">
                            Su compromiso con la transparencia y la eficiencia se refleja en cada tarea que realizan,
                            asegurando que la comunidad educativa cuente con los servicios y el apoyo necesario para
                            alcanzar sus objetivos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de Tarjetas de Personal Administrativo -->
    <div class="container my-5">
        <div class="row">
            <!-- Administrativo 1 -->
            <div class="col-md-3 mb-4">
                <div class="staff-card">
                    <div class="card border-0 shadow h-100">
                        <div class="staff-image-container">
                            <img src="{{ asset('images/secretaria.jpeg') }}" class="card-img-top" alt="Secretaria">
                            <div class="staff-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">Laura Martínez</h4>
                                    <p class="speciality">Directora Administrativa y Financiera</p>
                                    <p class="experience">10 años de experiencia</p>
                                    <p class="subject">Gestión Institucional</p>
                                    <p class="description">
                                        Experta en administración educativa, supervisa y coordina todas las actividades
                                        administrativas de la institución.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Administrativo 2 -->
            <div class="col-md-3 mb-4">
                <div class="staff-card">
                    <div class="card border-0 shadow h-100">
                        <div class="staff-image-container">
                            <img src="{{ asset('images/pagador.jpeg') }}" class="card-img-top" alt="Coordinador Financiero">
                            <div class="staff-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">Gerardo Sanclemente</h4>
                                    <p class="speciality">Coordinador Financiero</p>
                                    <p class="experience">8 años de experiencia</p>
                                    <p class="subject">Finanzas y Presupuestos</p>
                                    <p class="description">
                                        Responsable de la planificación y gestión financiera, asegura el uso eficiente de
                                        los recursos económicos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Administrativo 3 -->
            <div class="col-md-3 mb-4">
                <div class="staff-card">
                    <div class="card border-0 shadow h-100">
                        <div class="staff-image-container">
                            <img src="{{ asset('images/serviciosgenerales.jpeg') }}" class="card-img-top"
                                alt="Servicios Generales">
                            <div class="staff-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">María López</h4>
                                    <p class="speciality">Aseo y ornato</p>
                                    <p class="experience">12 años de experiencia</p>
                                    <p class="subject">Gestión locativa</p>
                                    <p class="description">
                                        Encargada de del aseo y cuidado de las zonas verdes, asi como su mantenimiento y
                                        reparación.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Administrativo 4 -->
            <div class="col-md-3 mb-4">
                <div class="staff-card">
                    <div class="card border-0 shadow h-100">
                        <div class="staff-image-container">
                            <img src="{{ asset('images/celador.jpeg') }}" class="card-img-top" alt="Celador">
                            <div class="staff-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">Julio Castañeda</h4>
                                    <p class="speciality">Jefe de Seguridad</p>
                                    <p class="experience">9 años de experiencia</p>
                                    <p class="subject">RSeguridad</p>
                                    <p class="description">
                                        Encargado de la seguridad de la institución, garantizando la integridad de los
                                        estudiantes y personal docente, ademas es quien manipula los sistemas de seguridad y
                                        las camaras de CCTV.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

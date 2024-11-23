@extends('layouts.app')

@section('title', 'Equipo Directivo - Institución Educativa San José')

@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo Directivo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/css/primaria.css">
</head>
<body>
<!-- Hero Section para Equipo Directivo -->
<div class="hero-section text-center">
    <div class="container">
        <h1 class="display-4 fw-bold text-white">Nuestro Equipo Directivo</h1>
        <p class="lead text-white">Liderazgo comprometido con una educación de calidad</p>
    </div>
</div>

<!-- Reseña sobre el Equipo Directivo -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0">
                <div class="card-body p-5">
                    <h2 class="text-center mb-4">El Compromiso del Liderazgo Educativo</h2>
                    <p class="lead text-muted">
                        En la Institución Educativa San José, nuestro equipo directivo juega un papel fundamental en la
                        construcción de un ambiente educativo inspirador. Con una visión clara y un compromiso inquebrantable,
                        lideran esfuerzos para transformar la educación y crear oportunidades para todos los estudiantes.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sección de Tarjetas de Directivos -->
<div class="container my-5">
    <div class="row">
        <!-- Rector -->
        <div class="col-md-4 mb-4">
            <div class="teacher-card">
                <div class="card border-0 shadow h-100">
                    <div class="teacher-image-container">
                        <img src="{{ asset('images/rector.jpeg') }}" class="card-img-top" alt="Rector">
                        <div class="teacher-overlay">
                            <div class="overlay-content">
                                <h4 class="mb-2">Juan Carlos Martínez</h4>
                                <p class="speciality">Rector</p>
                                <p class="experience">20 años de experiencia en educación</p>
                                <p class="description">
                                    Comprometido con promover una educación inclusiva y de calidad, fomentando la innovación y el desarrollo integral de todos los estudiantes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coordinador Académico -->
        <div class="col-md-4 mb-4">
            <div class="teacher-card">
                <div class="card border-0 shadow h-100">
                    <div class="teacher-image-container">
                        <img src="{{ asset('images/coordinadora.jpeg') }}" class="card-img-top" alt="Coordinador Académico">
                        <div class="teacher-overlay">
                            <div class="overlay-content">
                                <h4 class="mb-2">María Fernanda López</h4>
                                <p class="speciality">Coordinadora Académica</p>
                                <p class="experience">15 años de experiencia en gestión educativa</p>
                                <p class="description">
                                    Experta en metodologías activas y en el diseño curricular, trabaja para mejorar los procesos de enseñanza-aprendizaje en la institución.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Docente Orientadora -->
        <div class="col-md-4 mb-4">
            <div class="teacher-card">
                <div class="card border-0 shadow h-100">
                    <div class="teacher-image-container">
                        <img src="{{ asset('images/docenteorientadora.jpeg') }}" class="card-img-top" alt="Docente Orientadora">
                        <div class="teacher-overlay">
                            <div class="overlay-content">
                                <h4 class="mb-2">Laura Patricia Gómez</h4>
                                <p class="speciality">Docente Orientadora</p>
                                <p class="experience">10 años de experiencia en orientación educativa</p>
                                <p class="description">
                                    Apasionada por el desarrollo integral de los estudiantes, brinda apoyo y asesoramiento para el crecimiento personal y académico.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
@endsection

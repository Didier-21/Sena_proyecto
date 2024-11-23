@extends('layouts.app')

@section('title', 'Equipo Directivo - Institución Educativa San José')

@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logros Directivos - Institución Educativa San José</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/css/primaria.css">

</head>
<body>

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Logros Directivos</h1>
            <p class="lead">Celebramos los logros y metas alcanzadas por nuestro equipo directivo en pro de la excelencia educativa.</p>
        </div>
    </section>

    <!-- Sección de Logros -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Nuestros Logros</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg border-0">
                        <img src="images/logrotecnologia.jpeg" class="card-img-top" alt="Tecnología Educativa">
                        <div class="card-body">
                            <h5 class="card-title">Implementación de Tecnología Educativa</h5>
                            <p class="card-text">
                                Gracias a la visión y liderazgo de nuestro equipo directivo, hemos implementado tecnologías educativas avanzadas, mejorando el acceso y la calidad del aprendizaje para nuestros estudiantes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg border-0">
                        <img src="images/logroemprender.jpeg" class="card-img-top" alt="Programa de Emprendimiento">
                        <div class="card-body">
                            <h5 class="card-title">Fortalecimiento del Programa de Emprendimiento</h5>
                            <p class="card-text">
                                Nuestro programa de emprendimiento ha sido reforzado con nuevas iniciativas y recursos, fomentando la creatividad y el espíritu empresarial entre los estudiantes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg border-0">
                        <img src="images/logropanel.jpeg" class="card-img-top" alt="Infraestructura Renovada">
                        <div class="card-body">
                            <h5 class="card-title">Infraestructura Renovada</h5>
                            <p class="card-text">
                                La renovación de nuestras instalaciones ha creado un ambiente más seguro y estimulante para el aprendizaje, gracias a la gestión eficiente del equipo directivo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Testimonios -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Testimonios</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 shadow-lg border-0">
                        <div class="card-body">
                            <h5 class="card-title">Testimonio de Docente</h5>
                            <p class="card-text">
                                "La implementación de tecnologías educativas ha transformado nuestra forma de enseñar, permitiendo una mayor interacción y aprendizaje colaborativo."
                                <br><strong>- Profesor Juan Pérez</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 shadow-lg border-0">
                        <div class="card-body">
                            <h5 class="card-title">Testimonio de Estudiante</h5>
                            <p class="card-text">
                                "Gracias al programa de emprendimiento, he desarrollado habilidades que me permitirán iniciar mi propio negocio en el futuro."
                                <br><strong>- Estudiante María García</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection

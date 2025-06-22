
@extends('layouts.app')

@section('title', 'Equipo Directivo - Institución Educativa San José')

@section('contenido')
<link rel="stylesheet" href="style/css/primaria.css">
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
                            <h5 class="card-title">Remodelación Aula Multiple Educativa</h5>
                            <p class="card-text">
                               Nuestra IE San José está siendo remodelada a través del consorcio EJA y por medio del FIE se está realizando intervención en el cambio de cubierta del aula múltiple con  su parte eléctrica.
Esto nos permite ofrecer una experiencia aún más enriquecedora para nuestros estudiantes y así crear un entorno que inspire la creatividad, el aprendizaje y el crecimiento.
Queremos que nuestros estudiantes se sientan orgullosos de estudiar aquí y que nuestros padres de familia se sientan seguros de que sus hijos están recibiendo la mejor educación posible en espacios agradables de aprendizaje.
El aula múltiple es un espacio de estudio y trabajo colaborativo que fomenta la innovación y la creatividad en actividades grupales mediante actos culturales, reuniones, ceremonias de graduación, ferias de emprendimiento, centros de interés, izadas de bandera, promoción  de valores etc.
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
@endsection

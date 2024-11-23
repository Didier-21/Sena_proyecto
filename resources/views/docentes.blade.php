@extends('layouts.app')

@section('title', 'Docentes')

@section('contenido')
    <!-- Hero Section para Docentes -->
    <div class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold text-white">Nuestro Equipo Docente</h1>
            <p class="lead text-white">Educadores comprometidos con la transformación rural y la excelencia educativa</p>
        </div>
    </div>

    <!-- Reseña sobre Docencia Rural -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-4">El Valor de la Docencia Rural</h2>
                        <p class="lead text-muted">
                            En el corazón de la transformación educativa rural, nuestros docentes son agentes de cambio
                            que
                            combinan experiencia académica con un profundo entendimiento del contexto local. Su labor va
                            más
                            allá de la enseñanza tradicional, convirtiéndose en mentores que inspiran el desarrollo
                            integral
                            de cada estudiante.
                        </p>
                        <p class="lead text-muted">
                            Su compromiso con la educación de calidad se refleja en la implementación de metodologías
                            innovadoras que conectan el conocimiento académico con la realidad rural, fomentando el
                            arraigo territorial y el desarrollo sostenible de nuestra comunidad.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de Tarjetas de Docentes -->
    <div class="container my-5">
        <div class="row">
            <!-- Docente 1 -->
            <div class="col-md-3 mb-4">
                <div class="teacher-card">
                    <div class="card border-0 shadow h-100">
                        <div class="teacher-image-container">
                            <img src="{{ asset('images/doceagronomo.jpeg') }}" class="card-img-top"
                                alt="Docente de Agronomía">
                            <div class="teacher-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">Carlos Rodríguez</h4>
                                    <p class="speciality">Ing. Agrónomo</p>
                                    <p class="experience">15 años de experiencia</p>
                                    <p class="subject">Producción Agrícola Sostenible</p>
                                    <p class="description">
                                        Especialista en agricultura de precisión y sistemas de producción sostenible.
                                        Lidera proyectos de investigación en cultivos orgánicos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Docente 2 -->
            <div class="col-md-3 mb-4">
                <div class="teacher-card">
                    <div class="card border-0 shadow h-100">
                        <div class="teacher-image-container">
                            <img src="{{ asset('images/docetecno.jpeg') }}" class="card-img-top"
                                alt="Docente de Tecnología">
                            <div class="teacher-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">Ana María Valencia</h4>
                                    <p class="speciality">Ing. de Sistemas</p>
                                    <p class="experience">12 años de experiencia</p>
                                    <p class="subject">Tecnología e Innovación Agrícola</p>
                                    <p class="description">
                                        Experta en implementación de tecnologías digitales en el campo.
                                        Desarrolladora de aplicaciones para agricultura de precisión.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Docente 3 -->
            <div class="col-md-3 mb-4">
                <div class="teacher-card">
                    <div class="card border-0 shadow h-100">
                        <div class="teacher-image-container">
                            <img src="{{ asset('images/docenbiologia.jpeg') }}" class="card-img-top"
                                alt="Docente de Biología">
                            <div class="teacher-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">Juan Pablo Méndez</h4>
                                    <p class="speciality">Biólogo</p>
                                    <p class="experience">10 años de experiencia</p>
                                    <p class="subject">Ciencias Naturales y Ambiente</p>
                                    <p class="description">
                                        Investigador en biodiversidad y sistemas ecológicos.
                                        Promotor de la conservación ambiental en la región.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Docente 4 -->
            <div class="col-md-3 mb-4">
                <div class="teacher-card">
                    <div class="card border-0 shadow h-100">
                        <div class="teacher-image-container">
                            <img src="{{ asset('images/docentadmin.jpeg') }}" class="card-img-top"
                                alt="Docente de Emprendimiento">
                            <div class="teacher-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">Fabio Andres Escorcia</h4>
                                    <p class="speciality">Administrador de Empresas</p>
                                    <p class="experience">8 años de experiencia</p>
                                    <p class="subject">Emprendimiento Rural</p>
                                    <p class="description">
                                        Asesor en proyectos productivos y desarrollo empresarial.
                                        Expert0 en economía solidaria y cooperativismo.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Docente 5 -->
            <div class="col-md-3 mb-4">
                <div class="teacher-card">
                    <div class="card border-0 shadow h-100">
                        <div class="teacher-image-container">
                            <img src="{{ asset('images/doceciencias.jpeg') }}" class="card-img-top"
                                alt="Docente de Ciencias">
                            <div class="teacher-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">Ana María Rodríguez</h4>
                                    <p class="speciality">Bióloga</p>
                                    <p class="experience">10 años de experiencia</p>
                                    <p class="subject">Ciencias Naturales</p>
                                    <p class="description">
                                        Especialista en educación ambiental y desarrollo sostenible.
                                        Promueve el aprendizaje práctico y la investigación científica en el aula.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Docente 6 -->
            <div class="col-md-3 mb-4">
                <div class="teacher-card">
                    <div class="card border-0 shadow h-100">
                        <div class="teacher-image-container">
                            <img src="{{ asset('images/docematema.jpeg') }}" class="card-img-top"
                                alt="Docente de Matemáticas">
                            <div class="teacher-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">Claudia López</h4>
                                    <p class="speciality">Matemática</p>
                                    <p class="experience">12 años de experiencia</p>
                                    <p class="subject">Matemáticas</p>
                                    <p class="description">
                                        Especialista en didáctica de las matemáticas.
                                        Fomenta el pensamiento lógico y analítico en sus estudiantes a través de métodos
                                        innovadores.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Docente 7 -->
            <div class="col-md-3 mb-4">
                <div class="teacher-card">
                    <div class="card border-0 shadow h-100">
                        <div class="teacher-image-container">
                            <img src="{{ asset('images/doceespañol.jpeg') }}" class="card-img-top"
                                alt="Docente de Lenguaje">
                            <div class="teacher-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">Isabel Martínez</h4>
                                    <p class="speciality">Filóloga</p>
                                    <p class="experience">15 años de experiencia</p>
                                    <p class="subject">Lengua y Literatura</p>
                                    <p class="description">
                                        Experta en literatura hispanoamericana y técnicas de enseñanza del español.
                                        Inspira a sus estudiantes a desarrollar habilidades de lectura y escritura
                                        crítica.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Docente 8 -->
            <div class="col-md-3 mb-4">
                <div class="teacher-card">
                    <div class="card border-0 shadow h-100">
                        <div class="teacher-image-container">
                            <img src="{{ asset('images/docehistoria.jpeg') }}" class="card-img-top"
                                alt="Docente de Historia">
                            <div class="teacher-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">Laura Gómez</h4>
                                    <p class="speciality">Historiadora</p>
                                    <p class="experience">9 años de experiencia</p>
                                    <p class="subject">Historia</p>
                                    <p class="description">
                                        Especialista en historia contemporánea y educación patrimonial.
                                        Utiliza narrativas y proyectos colaborativos para enseñar historia de manera
                                        dinámica.
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

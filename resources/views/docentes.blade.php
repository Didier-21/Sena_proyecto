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
                                    <h4 class="mb-2">JESUS ANTONIO MARIN ACERO</h4>
                                    <p class="speciality">Licenciado en educación básica. Tecnólogo agropecuario.</p>
                                    <p class="subject">Docente de Ciencias Naturales.</p>
                                    <p class="description">
                                        Especialista en orientación escolar y Especialista en recreación.
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
                                    <h4 class="mb-2">JHON HEVERT CASTILLO RAMIREZ </h4>
                                    <p class="speciality">Licenciado en matemáticas.</p>
                                    <p class="subject">Docente de Matemáticas. </p>
                                    <p class="description">
                                        Magister en enseñanza de las ciencias exactas y naturales.

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
                                    <h4 class="mb-2">FRANCISCO JAVIER MARIN RIVERA </h4>
                                    <p class="speciality">Licenciado en educación español y comunicación audiovisual.</p>

                                    <p class="subject">Docente Lengua Catellana.</p>
                                    <p class="description">
                                        Especialista en docencia universitaria.
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
                                    <h4 class="mb-2">ALEXANDER MANZANO PIEDRAHITA</h4>
                                    <p class="speciality">Licenciatura en educación básica con énfasis en tecnología e informática.</p>

                                    <p class="subject">Docente Ciencias Sociales.</p>
                                    <p class="description">
                                        Teólogo.
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
                                    <h4 class="mb-2"> MARIA MONICA REYES RESTREPO</h4>
                                    <p class="speciality">Ingeniera Sanitaria.</p>

                                    <p class="subject">Docente Área Técnica.</p>
                                    <p class="description">
                                       Magister en administración de empresas, Tecnóloga química.
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
                                    <h4 class="mb-2">IVAN GIRON PORRAS</h4>
                                    <p class="speciality">Licenciado en educación fisica recreacion y deporte, Psicólogo</p>

                                    <p class="subject">Docente Educación física, recreación y deporte</p>
                                    <p class="description">
                                        Especialista en aplicación de las tic para la enseñanza, Magister en tecnologias digitales aplicadas a la educación.
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
                                    <h4 class="mb-2">MARIA GLORIA LOPEZ VELEZ</h4>
                                    <p class="speciality">Licenciada en literatura e idiomas</p>

                                    <p class="subject">Docente Idioma extranjera - Inglés.</p>
                                    <p class="description">
                                        Especialista en lúdica y recreación para el desarrollo cultural y social.
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
                                    <h4 class="mb-2">RICARDO CLAVIJO GARCIA </h4>
                                    <p class="speciality">Ingeniero electricista</p>

                                    <p class="subject">Docente Tecnología e informática.</p>
                                    <p class="description">

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Docente 9 -->
            <div class="col-md-3 mb-4">
                <div class="teacher-card">
                    <div class="card border-0 shadow h-100">
                        <div class="teacher-image-container">
                            <img src="{{ asset('images/doceespañol.jpeg') }}" class="card-img-top"
                                alt="Docente de Lenguaje">
                            <div class="teacher-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">DIEGO ALONSO REBELLON GIL </h4>
                                    <p class="speciality">Zootecnista</p>

                                    <p class="subject">Docente Área Técnica.</p>
                                    <p class="description">

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Docente 10 -->
            <div class="col-md-3 mb-4">
                <div class="teacher-card">
                    <div class="card border-0 shadow h-100">
                        <div class="teacher-image-container">
                            <img src="{{ asset('images/doceespañol.jpeg') }}" class="card-img-top"
                                alt="Docente de Lenguaje">
                            <div class="teacher-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">FRANCIA  ELENA TAPIA CHAMIZAS </h4>
                                    <p class="speciality">Ingeniera Agrónoma.</p>

                                    <p class="subject">Docente Ciencias Naturales.</p>
                                    <p class="description">

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Docente 11 -->
            <div class="col-md-3 mb-4">
                <div class="teacher-card">
                    <div class="card border-0 shadow h-100">
                        <div class="teacher-image-container">
                            <img src="{{ asset('images/doceespañol.jpeg') }}" class="card-img-top"
                                alt="Docente básica primaria">
                            <div class="teacher-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">MARTHA ISABEL POSSO HOYOS </h4>
                                    <p class="speciality">Licenciada en educación básica primaria.</p>

                                    <p class="subject">Docente básica primaria.</p>
                                    <p class="description">Especialista en recreación ecológica y social.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Docente 12 -->
            <div class="col-md-3 mb-4">
                <div class="teacher-card">
                    <div class="card border-0 shadow h-100">
                        <div class="teacher-image-container">
                            <img src="{{ asset('images/doceespañol.jpeg') }}" class="card-img-top"
                                alt="Docente básica primaria">
                            <div class="teacher-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">ROCIO ALEJANDRA SANTACOLOMA PATIÑO </h4>
                                    <p class="speciality">Licenciado en básica primaria.</p>

                                    <p class="subject">Docente básica primaria.</p>
                                    <p class="description">Educación artística y cultural.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Docente 13 -->
            <div class="col-md-3 mb-4">
                <div class="teacher-card">
                    <div class="card border-0 shadow h-100">
                        <div class="teacher-image-container">
                            <img src="{{ asset('images/doceespañol.jpeg') }}" class="card-img-top"
                                alt="Docente básica primaria">
                            <div class="teacher-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">JOSE ANCIZAR BEDOYA RIVERA</h4>
                                    <p class="speciality">Zootecnista</p>

                                    <p class="subject">Docente básica primaria.</p>
                                    <p class="description">Especialista en pedagogía de la recreación ecológica.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Docente 14 -->
            <div class="col-md-3 mb-4">
                <div class="teacher-card">
                    <div class="card border-0 shadow h-100">
                        <div class="teacher-image-container">
                            <img src="{{ asset('images/doceespañol.jpeg') }}" class="card-img-top"
                                alt="Docente básica primaria">
                            <div class="teacher-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">ADRIANA MARTINEZ HERNANDEZ</h4>
                                    <p class="speciality">Licenciado en básica primaria.</p>

                                    <p class="subject">Docente básica primaria.</p>
                                    <p class="description"> Tecnología e informática, Especialista en recreación ecológica y social.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Docente 15 -->
            <div class="col-md-3 mb-4">
                <div class="teacher-card">
                    <div class="card border-0 shadow h-100">
                        <div class="teacher-image-container">
                            <img src="{{ asset('images/doceespañol.jpeg') }}" class="card-img-top"
                                alt="Docente básica primaria">
                            <div class="teacher-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">CARMEN DORIS MILLAN POSSO</h4>
                                    <p class="speciality">Licenciada en educación básica primaria.</p>

                                    <p class="subject">Docente básica primaria.</p>
                                    <p class="description"> Especialista en recreación ecológica y social, Especialista en Educación Sexual.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Docente 16 -->
            <div class="col-md-3 mb-4">
                <div class="teacher-card">
                    <div class="card border-0 shadow h-100">
                        <div class="teacher-image-container">
                            <img src="{{ asset('images/doceespañol.jpeg') }}" class="card-img-top"
                                alt="Docente preescolar">
                            <div class="teacher-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">LORENZA CHAVEZ</h4>
                                    <p class="speciality">Licenciada en educación preescolar.</p>

                                    <p class="subject">Docente Área Técnica.</p>
                                    <p class="description">Especialista en recreación ecológica y social.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Docente 17 -->
            <div class="col-md-3 mb-4">
                <div class="teacher-card">
                    <div class="card border-0 shadow h-100">
                        <div class="teacher-image-container">
                            <img src="{{ asset('images/doceespañol.jpeg') }}" class="card-img-top"
                                alt="Docente básica primaria">
                            <div class="teacher-overlay">
                                <div class="overlay-content">
                                    <h4 class="mb-2">GLORIA ISABEL BRAVO MILLAN</h4>
                                    <p class="speciality">Docente básica primaria</p>

                                    <p class="subject">Docente Área Técnica.</p>
                                    <p class="description"> Tecnología e informática, Especialista en recreación ecológica y social.

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

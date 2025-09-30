@extends('layouts.app')

@section('title', 'Equipo Directivo - Institución Educativa San José')

@section('contenido')
<link rel="stylesheet" href="style/css/primaria.css">


<!-- 🏞 Sección de encabezado con efecto parallax -->
<section class="hero-section text-center mb-5 container-fluid fade-in">
    <h1 class="display-4 fw-bold">Logros Directivos</h1>
    <p class="lead">Celebramos los logros y metas alcanzadas por nuestro equipo directivo en pro de la excelencia educativa.</p>
</section>

<!-- 🏫 Sección de Logros ocupando todo el ancho -->
<section class="py-4 container-fluid fade-in">
    <h2 class="text-center mb-4">Nuestros Logros</h2>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card custom-card">
                <!-- Carrusel Bootstrap -->
                <div id="logrosCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://i.ibb.co/v4mCzy5v/AULA-MAXIMA-2.jpg" alt="AULA-MAXIMA-2" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.ibb.co/twrfrGBB/AULA-MAXIMA.jpg" alt="AULA-MAXIMA" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.ibb.co/ZRKwFhRf/AULA-MAXIMA-4.jpg" alt="AULA-MAXIMA-4" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.ibb.co/Ly6gBQZ/AULA-MAXIMA-3.jpg" alt="AULA-MAXIMA-3" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#logrosCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#logrosCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
                <!-- Texto descriptivo -->
                <div class="card-body">
                    <h5 class="card-title text-center">Remodelación Aula Múltiple Educativa</h5>
                    <p class="card-text wide-text">
                        Nuestra IE San José está siendo remodelada a través del consorcio EJA y por medio del FIE se está realizando intervención en el cambio de cubierta del aula múltiple con su parte eléctrica.
                        Esto nos permite ofrecer una experiencia aún más enriquecedora para nuestros estudiantes y así crear un entorno que inspire la creatividad, el aprendizaje y el crecimiento.
                        Queremos que nuestros estudiantes se sientan orgullosos de estudiar aquí y que nuestros padres de familia se sientan seguros de que sus hijos están recibiendo la mejor educación posible en espacios agradables de aprendizaje.
                        El aula múltiple es un espacio de estudio y trabajo colaborativo que fomenta la innovación y la creatividad en actividades grupales mediante actos culturales, reuniones, ceremonias de graduación, ferias de emprendimiento, centros de interés, izadas de bandera, promoción de valores, etc.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Plantación de Plantas Perennes (Noticias agrupadas) -->
<section class="py-5 bg-light fade-in container-fluid">
    <h2 class="text-center mb-4">Sembrando Vida con Plantas Perennes</h2>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <p class="text-center fst-italic mb-4">
                        Descubre cómo estamos promoviendo la conservación y el cuidado del medio ambiente a través de la plantación de plantas perennes en nuestra institución.
                    </p>
                    <!-- Galería de imágenes -->
                    <div class="row g-3 mb-4 text-center">
                        <div class="col-md-6 mb-3">
                            <img src="URL_DE_TU_IMAGEN1" class="img-fluid rounded" alt="Bosque Perene">
                        </div>
                        <div class="col-md-6 mb-3">
                            <img src="URL_DE_TU_IMAGEN2" class="img-fluid rounded" alt="Beneficios de las Plantas Perennes">
                        </div>
                        <div class="col-md-6 mb-3">
                            <img src="URL_DE_TU_IMAGEN3" class="img-fluid rounded" alt="Cuidando el Entorno">
                        </div>
                        <div class="col-md-6 mb-3">
                            <img src="URL_DE_TU_IMAGEN4" class="img-fluid rounded" alt="Proyecto del Futuro">
                        </div>
                    </div>
                    <!-- Texto descriptivo con cada sección -->
                    <div>
                        <h5>Nuestro Bosque Permanente</h5>
                        <p>
                            En nuestra institución, promovemos la conservación de plantas perennes que aportan belleza y sostenibilidad al entorno. Estas plantas requieren menos mantenimiento y ayudan a mantener el equilibrio ecológico.
                        </p>
                        <h5>Beneficios de las Plantas Perennes</h5>
                        <p>
                            Estas plantas proporcionan refugio para la fauna, mejoran la calidad del suelo y contribuyen a reducir la erosión. Además, representan un recurso educativo para nuestros alumnos sobre sostenibilidad.
                        </p>
                        <h5>Cuidando Nuestro Entorno</h5>
                        <p>
                            La plantación y cuidado de plantas perennes en nuestra escuela fomentan valores ecológicos en los estudiantes, promoviendo conciencia sobre la conservación del medio ambiente.
                        </p>
                        <h5>Un Proyecto para el Futuro</h5>
                        <p>
                            Este proyecto de plantación de plantas perennes es una iniciativa que busca mejorar el ambiente escolar y enseñar a los alumnos la importancia de cuidar y proteger la naturaleza.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 👥 Sección de Testimonios también ancha -->
<section class="py-5 bg-light fade-in container-fluid">
    <h2 class="text-center mb-4">Testimonios</h2>
    <div class="row justify-content-center g-4">
        <div class="col-md-5">
            <div class="card h-100 shadow-lg border-0">
                <div class="card-body">
                    <h5 class="card-title">Testimonio de Docente</h5>
                    <p class="card-text">
                        "La implementación de tecnologías educativas ha transformado nuestra forma de enseñar, permitiendo una mayor interacción y aprendizaje colaborativo."
                        <br><strong>- Profesor Ricardo Clavijo</strong>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-5">
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
</section>
@endsection

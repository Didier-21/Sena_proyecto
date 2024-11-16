
<!-- Hero Section para Docentes -->
<div class="hero-section-docentes text-center">
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
                        En el corazón de la transformación educativa rural, nuestros docentes son agentes de cambio que
                        combinan experiencia académica con un profundo entendimiento del contexto local. Su labor va más
                        allá de la enseñanza tradicional, convirtiéndose en mentores que inspiran el desarrollo integral
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
                        <img src="{{ asset('images/docente1.jpg') }}" class="card-img-top" alt="Docente de Agronomía">
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
                        <img src="{{ asset('images/docente2.jpg') }}" class="card-img-top" alt="Docente de Tecnología">
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
                        <img src="{{ asset('images/docente3.jpg') }}" class="card-img-top" alt="Docente de Biología">
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
                        <img src="{{ asset('images/docente4.jpg') }}" class="card-img-top" alt="Docente de Emprendimiento">
                        <div class="teacher-overlay">
                            <div class="overlay-content">
                                <h4 class="mb-2">María Fernanda López</h4>
                                <p class="speciality">Administradora de Empresas</p>
                                <p class="experience">8 años de experiencia</p>
                                <p class="subject">Emprendimiento Rural</p>
                                <p class="description">
                                    Asesora en proyectos productivos y desarrollo empresarial.
                                    Experta en economía solidaria y cooperativismo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Continuar con los otros 4 docentes siguiendo el mismo patrón -->
        <!-- ... -->
    </div>
</div>
@endsection

@section('styles')
<style>
/* Estilos para la sección de docentes */
.hero-section-docentes {
    background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('../images/rural-education.jpg');
    background-size: cover;
    background-position: center;
    padding: 6rem 0;
    margin-bottom: 3rem;
}

.teacher-card {
    perspective: 1000px;
    height: 100%;
}

.teacher-image-container {
    position: relative;
    width: 100%;
    height: 300px;
    overflow: hidden;
    border-radius: 10px;
}

.teacher-image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.teacher-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(46, 204, 113, 0.95);
    color: white;
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1.5rem;
    text-align: center;
}

.teacher-card:hover .teacher-overlay {
    opacity: 1;
}

.teacher-card:hover img {
    transform: scale(1.1);
}

.overlay-content {
    transform: translateY(20px);
    transition: transform 0.3s ease;
}

.teacher-card:hover .overlay-content {
    transform: translateY(0);
}

.speciality, .experience, .subject {
    font-size: 0.9rem;
    margin-bottom: 0.5rem;
}

.description {
    font-size: 0.85rem;
    margin-top: 1rem;
    line-height: 1.4;
}

/* Animaciones */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.teacher-card {
    animation: fadeInUp 0.5s ease backwards;
}

.teacher-card:nth-child(1) { animation-delay: 0.1s; }
.teacher-card:nth-child(2) { animation-delay: 0.2s; }
.teacher-card:nth-child(3) { animation-delay: 0.3s; }
.teacher-card:nth-child(4) { animation-delay: 0.4s; }

/* Responsive */
@media (max-width: 768px) {
    .teacher-image-container {
        height: 250px;
    }

    .overlay-content h4 {
        font-size: 1.1rem;
    }

    .description {
        font-size: 0.8rem;
    }
}
</style>

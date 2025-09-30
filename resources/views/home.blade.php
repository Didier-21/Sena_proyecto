
@extends('layouts.app')

@section('title', 'HOME - Institución Educativa Agropecuaria')

@section('contenido')
<link rel="stylesheet" href="style/css/home.css">

<!-- Hero Section con Bienvenida -->
<header class="hero min-vh-100 d-flex align-items-center position-relative overflow-hidden">
    <!-- Imagen de fondo con animación -->
    <div class="hero-bg"></div>

    <div class="container position-relative text-center">
        <div class="mb-5">
            <h1 class="hero-title fw-bold">
                Bienvenidos a la IE San José
            </h1>
            <p class="hero-subtitle mt-3">
                Formando el futuro del campo colombiano con educación de calidad
            </p>
        </div>
    </div>
</header>

<style>
/* Fondo con efecto de zoom in/out */
.hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("https://i.ibb.co/KT0kS8T/Whats-App-Image-2025-06-27-at-18-58-17.jpg");
    background-size: cover;
    background-position: center;
    animation: zoomEffect 20s infinite alternate ease-in-out;
    z-index: 0;
}

/* Animación de acercarse y alejarse */
@keyframes zoomEffect {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(1.2);
    }
}

/* Texto con fondo animado */
.hero-title {
    font-size: 5rem; /* Mucho más grande */
   background: linear-gradient(270deg, #00c853, #64dd17, #aeea00, #b2ff59, #1de9b6);
    background-size: 1000% 1000%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: gradientMove 10s ease infinite;
    text-transform: uppercase;
    letter-spacing: 2px;
}

/* Subtítulo con animación más discreta */
.hero-subtitle {
    font-size: 2rem;
    color: #111; /* Negro para contraste */
    font-weight: 600;
}

/* Animación del degradado */
@keyframes gradientMove {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

/* Asegurar que el texto quede encima */
.hero .container {
    z-index: 1;
}
</style>


    </header>

<<!-- Slider de Imágenes -->
<section id="slider" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Momentos Destacados de nuestra Institución</h2>
        <div id="carouselEventos" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <!-- Imagen 1 -->
                <div class="carousel-item active">
                    <img src="https://i.ibb.co/9mNL4PnW/536270288-2667321036956134-2226103858997565824-n.jpg"
                         class="d-block w-50 mx-auto rounded shadow" alt="Evento 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Jornada de Siembra y aprendizaje laboral.</h5>
                        <p>Un espacio para el aprendizaje y la integración de los estudiantes, quienes pudierón entender el valor y la importancia del campo y el trabajo duro y honesto.</p>
                    </div>
                </div>

                <!-- Imagen 2 -->
                <div class="carousel-item">
                    <img src="https://i.ibb.co/Rk7ztN0P/548213214-2678764245811813-8052769814936650191-n.jpg"
                         class="d-block w-50 mx-auto rounded shadow" alt="Evento 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Evento Cultural  y de Arte </h5>
                        <p>Celebramos con nuestros estudiantes un gran evento que dejo al descubierto talentos futuros.</p>
                    </div>
                </div>

                <!-- Imagen 3 -->
                <div class="carousel-item">
                    <img src="https://i.ibb.co/vvcZrScN/549987790-2678555022499402-7011761675605261318-n.jpg"
                         class="d-block w-50 mx-auto rounded shadow" alt="Evento 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Proyecto Alimentos Saludable.</h5>
                        <p>Impulsando el campo con iniciativas escolares sostenibles y alimentación saludable para nuestras futuras generaciones.</p>
                    </div>
                </div>
            </div>

            <!-- Controles -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselEventos" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselEventos" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</section>

<style>
/* Ajustes extra para el texto del slider */
.carousel-caption {
    background: rgba(0, 0, 0, 0.5); /* Fondo semitransparente */
    padding: 15px;
    border-radius: 10px;
}
.carousel-caption h5 {
    font-size: 1.5rem;
    font-weight: bold;
    color: #b2ff59; /* Verde atractivo */
}
.carousel-caption p {
    font-size: 1rem;
    color: #fff;
}
</style>


<!-- Inscripciones Abiertas -->
<section id="inscripciones" class="py-5 bg-success text-white">
    <div class="container text-center">
        <h2 class="mb-4">¡Inscripciones Abiertas!</h2>
        <p class="lead">Únete a nuestra comunidad educativa y transforma tu futuro</p>

        <!-- Imágenes reducidas al 50% -->
        <img src="https://i.ibb.co/RTSjs5M2/547682559-2677481015940136-2553244529621880858-n.jpg"
             class="img-fluid rounded shadow mb-3 img-50" alt="Inscripciones">

        <img src="https://i.ibb.co/6RMTmvw7/548034547-2677481019273469-5252615593919262342-n.jpg"
             class="img-fluid rounded shadow mb-3 img-50" alt="Inscripciones">

        <button class="btn btn-success" type="button" data-bs-toggle="modal"
                        data-bs-target="#matriculaModal">INSCRIBETE AHORA</button>
    </div>
</section>

<style>
/* Reducir tamaño de imágenes al 50% */
.img-50 {
    width: 40%;
    height: auto;
}
</style>


<!-- Mejoras a las Instalaciones -->
<section id="instalaciones" class="py-5 bg-white">
    <div class="container">
        <h2 class="text-center mb-4">Mejoras a las Instalaciones</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <img src="https://i.ibb.co/aula.jpg" class="img-fluid rounded" alt="Aula renovada">
                <p class="mt-2 text-center">Aulas renovadas con tecnología</p>
            </div>
            <div class="col-md-4">
                <img src="https://i.ibb.co/cancha.jpg" class="img-fluid rounded" alt="Cancha deportiva">
                <p class="mt-2 text-center">Nueva cancha deportiva</p>
            </div>
            <div class="col-md-4">
                <img src="https://i.ibb.co/lab.jpg" class="img-fluid rounded" alt="Laboratorio">
                <p class="mt-2 text-center">Laboratorio de ciencias equipado</p>
            </div>
        </div>
    </div>
</section>

<!-- Actividades Académicas -->
<section id="academicas" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Actividades Académicas</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <img src="https://i.ibb.co/clase.jpg" class="img-fluid rounded" alt="Clase interactiva">
                <p class="mt-2 text-center">Clases interactivas y participativas</p>
            </div>
            <div class="col-md-4">
                <img src="https://i.ibb.co/proyecto.jpg" class="img-fluid rounded" alt="Proyecto escolar">
                <p class="mt-2 text-center">Proyectos escolares innovadores</p>
            </div>
            <div class="col-md-4">
                <img src="https://i.ibb.co/feria.jpg" class="img-fluid rounded" alt="Feria académica">
                <p class="mt-2 text-center">Feria académica anual</p>
            </div>
        </div>
    </div>
</section>

<!-- Actividades Artísticas y Recreativas -->
<section id="artisticas" class="py-5 bg-white">
    <div class="container">
        <h2 class="text-center mb-4">Arte y Recreación</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <img src="https://i.ibb.co/danza.jpg" class="img-fluid rounded" alt="Grupo de danza">
                <p class="mt-2 text-center">Grupo de danza folclórica</p>
            </div>
            <div class="col-md-4">
                <img src="https://i.ibb.co/pintura.jpg" class="img-fluid rounded" alt="Taller de pintura">
                <p class="mt-2 text-center">Talleres de pintura y expresión artística</p>
            </div>
            <div class="col-md-4">
                <img src="https://i.ibb.co/juegos.jpg" class="img-fluid rounded" alt="Juegos recreativos">
                <p class="mt-2 text-center">Jornadas recreativas y deportivas</p>
            </div>
        </div>
    </div>
</section>




    <!-- Enlaces de Interés -->
    <section class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center mb-4">Enlaces de Interés</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-3 col-sm-6">
                    <a href="https://rrhh.gestionsecretariasdeeducacion.gov.co/humanoEL/Ingresar.aspx?Ent=Valle/"
                        target="_blank" class="card h-100 text-decoration-none text-dark hover-shadow">
                        <div class="card-body text-center">
                            <i class="fas fa-user-tie fs-1 text-primary mb-3"></i>
                            <h5 class="card-title">Humano en Línea</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="https://www.fomag.gov.co/" target="_blank"
                        class="card h-100 text-decoration-none text-dark hover-shadow">
                        <div class="card-body text-center">
                            <i class="fas fa-graduation-cap fs-1 text-success mb-3"></i>
                            <h5 class="card-title">FOMAG</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="https://www.icbf.gov.co/" target="_blank"
                        class="card h-100 text-decoration-none text-dark hover-shadow">
                        <div class="card-body text-center">
                            <i class="fas fa-child fs-1 text-warning mb-3"></i>
                            <h5 class="card-title">ICBF</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="https://adenunciar.policia.gov.co/" target="_blank"
                        class="card h-100 text-decoration-none text-dark hover-shadow">
                        <div class="card-body text-center">
                            <i class="fas fa-shield-alt fs-1 text-danger mb-3"></i>
                            <h5 class="card-title">Denuncia Virtual</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Proyectos Productivos -->
    <section id="proyectos" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Proyectos Productivos y Prácticas</h2>
            <div class="accordion" id="acordeonProyectos">
                <!-- Proyecto 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#proyecto1">
                            <i class="fas fa-seedling me-2"></i> Huerta Escolar Orgánica
                        </button>
                    </h2>
                    <div id="proyecto1" class="accordion-collapse collapse show" data-bs-parent="#acordeonProyectos">
                        <div class="accordion-body">
                            <p>El Proyecto de Cultivo de Hortalizas y Vegetales Orgánicos es una iniciativa integral
                                diseñada para educar a los estudiantes en técnicas de agricultura sostenible, mientras se
                                fomenta una conexión profunda con la naturaleza y el medio ambiente. Este proyecto se
                                desarrolla en múltiples fases y tiene como objetivo principal capacitar a los estudiantes en
                                la producción de alimentos saludables y ecológicos, promoviendo prácticas agrícolas
                                responsables y respetuosas con el entorno..</p>
                        </div>
                    </div>
                </div>
                <!-- Proyecto 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#proyecto2">
                            <i class="fas fa-egg me-2"></i> Producción Avícola
                        </button>
                    </h2>
                    <div id="proyecto2" class="accordion-collapse collapse" data-bs-parent="#acordeonProyectos">
                        <div class="accordion-body">
                            <p>La producción avícola es una actividad agropecuaria que se enfoca en la cría y manejo de
                                aves, principalmente pollos, pavos y gallinas, para la obtención de productos como carne y
                                huevos. Este sector es vital para la seguridad alimentaria, ya que proporciona una fuente
                                rica en proteínas y nutrientes esenciales. La producción avícola moderna utiliza tecnologías
                                avanzadas para mejorar la eficiencia y sostenibilidad, incluyendo sistemas de alimentación
                                automatizados, control ambiental y manejo sanitario. Además, promueve prácticas de bienestar
                                animal y bioseguridad para garantizar la salud de las aves y la calidad de los productos
                                finales, contribuyendo significativamente a la economía rural y la disponibilidad de
                                alimentos saludables.</p>
                        </div>
                    </div>
                </div>
                <!-- Proyecto 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#proyecto3">
                            <i class="fas fa-recycle me-2"></i> Compostaje y Lombricultura
                        </button>
                    </h2>
                    <div id="proyecto3" class="accordion-collapse collapse" data-bs-parent="#acordeonProyectos">
                        <div class="accordion-body">
                            <p>El compostaje y la lombricultura son prácticas agroecológicas esenciales para el manejo
                                sostenible de los residuos orgánicos y la mejora de la fertilidad del suelo. El compostaje
                                es un proceso de descomposición controlada de materia orgánica, como restos de comida, hojas
                                y desechos vegetales, que se transforma en un abono rico en nutrientes conocido como
                                compost. Este proceso se lleva a cabo mediante la acción de microorganismos que descomponen
                                la materia orgánica en condiciones aeróbicas, liberando nutrientes esenciales que mejoran la
                                estructura y fertilidad del suelo, promoviendo el crecimiento saludable de las plantas.

                                La lombricultura, por su parte, es una técnica que utiliza lombrices, particularmente la
                                lombriz roja californiana (Eisenia fetida), para descomponer los residuos orgánicos y
                                producir humus de lombriz, un fertilizante natural de alta calidad. Las lombrices consumen
                                la materia orgánica y excretan humus, un material rico en nutrientes como nitrógeno,
                                fósforo, potasio y micronutrientes esenciales para las plantas. Además de mejorar la
                                fertilidad del suelo, la lombricultura contribuye a la reducción de residuos sólidos urbanos
                                y agrícolas, promoviendo un manejo más sostenible de los recursos.</p>
                        </div>
                    </div>
                </div>
                <!-- Práctica 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#practica1">
                            <i class="fas fa-microscope me-2"></i> Laboratorio de Suelos
                        </button>
                    </h2>
                    <div id="practica1" class="accordion-collapse collapse" data-bs-parent="#acordeonProyectos">
                        <div class="accordion-body">
                            <p>El análisis de suelos agrícolas es una práctica fundamental para la agricultura sostenible y
                                el manejo eficiente de los recursos. Este procedimiento permite evaluar las propiedades
                                físicas, químicas y biológicas del suelo, proporcionando información crítica para la toma de
                                decisiones sobre fertilización, manejo de cultivos y mejora de la productividad.</p>
                        </div>
                    </div>
                </div>
                <!-- Práctica 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#practica2">
                            <i class="fas fa-leaf me-2"></i> Propagación de Plantas
                        </button>
                    </h2>
                    <div id="practica2" class="accordion-collapse collapse" data-bs-parent="#acordeonProyectos">
                        <div class="accordion-body">
                            <p>Las técnicas de reproducción y multiplicación de especies vegetales de interés agrícola son
                                esenciales para mejorar la eficiencia y sostenibilidad de la producción agrícola. Entre
                                estas técnicas se incluyen la propagación por semillas, el esquejado, el injerto y la
                                micropropagación. La propagación por semillas es común para muchas plantas, permitiendo la
                                generación de numerosas plántulas a partir de semillas viables. El esquejado implica el uso
                                de segmentos de la planta madre para producir nuevas plantas, mientras que el injerto
                                consiste en unir partes de dos plantas diferentes para combinar sus características
                                deseadas. La micropropagación, una técnica avanzada de cultivo in vitro, permite la
                                producción masiva de plantas a partir de tejidos vegetales en un ambiente controlado. Estas
                                técnicas no solo aseguran la continuidad y calidad de las especies cultivadas, sino que
                                también permiten la mejora genética y adaptación a condiciones ambientales cambiantes,
                                aumentando la productividad y sostenibilidad agrícola.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Académica -->
    <section id="academico" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Oferta Académica</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 hover-shadow">
                        <img src= "https://i.ibb.co/rG6RCnKr/Whats-App-Image-2025-06-13-at-17-35-24.jpg" width="100"
     height="100" class="card-img-top"
                            alt="Primaria">
                        <div class="card-body">
                            <h5 class="card-title">Primaria</h5>
                            <p class="card-text">Educación básica con enfoque rural y ambiental.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 hover-shadow">
                        <img src="https://i.ibb.co/352hDHGW/Whats-App-Image-2025-06-13-at-16-43-56.jpg""/api/placeholder/300/200" class="card-img-top"
                            alt="Secundaria">
                        <div class="card-body">
                            <h5 class="card-title">Secundaria</h5>
                            <p class="card-text">Formación integral con proyectos productivos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 hover-shadow">
                        <img src="https://i.ibb.co/s9y72JDM/Whats-App-Image-2025-06-13-at-16-43-56-3.jpg"/api/placeholder/300/200" class="card-img-top"
                            alt="Técnico Agropecuario">
                        <div class="card-body">
                            <h5 class="card-title">Técnico Agropecuario</h5>
                            <p class="card-text">Especialización en producción agrícola.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 hover-shadow">
                        <img src="https://i.ibb.co/k6V2yrTf/Whats-App-Image-2025-06-13-at-16-43-57.jpg"/api/placeholder/300/200" class="card-img-top"
                            alt="Proyectos Especiales">
                        <div class="card-body">
                            <h5 class="card-title">Proyectos Especiales</h5>
                            <p class="card-text">Iniciativas de innovación rural.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Noticias -->
    <section id="noticias" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Últimas Noticias</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 hover-shadow">
                        <img src="https://scontent.fclo14-1.fna.fbcdn.net/v/t39.30808-6/506005177_2591257627895809_4556550320592615848_n.jpg?stp=cp6_dst-jpg_tt6&_nc_cat=104&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFpXxXbZi0oepWOU9HrEsXtFmHqxVT9Bk4WYerFVP0GTtx2xKUnAJxdPfxFv9M9wno&_nc_ohc=qx2p51fNUeYQ7kNvwG4HPMb&_nc_oc=Adn9aIDMQjs4tFLLbHsmFdGJaPEhcFEvZ2mx9gdZSW_UQh3O2srWSHVQbjQU4YOeHzc&_nc_zt=23&_nc_ht=scontent.fclo14-1.fna&_nc_gid=xIjqJtOCkm0-ILUp1XJJaw&oh=00_AfP4JW_ZkpcCSRxwIh-52OGZAQf8JKmksgThnIuOm1Ceyw&oe=685D0583" class="card-img-top" alt="Noticia 1">
                        <div class="card-body">
                            <div class="badge bg-success mb-2">Académico</div>
                            <h5 class="card-title">Celebración día del medio ambiente </h5>
                            <p class="card-text">Los estudiantes del grado décimo de nuestra Institución...</p>
                            <a href="#" class="btn btn-outline-success" data-bs-toggle="modal"
                                data-bs-target="#modalNoticia1">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 hover-shadow">
                        <img src="https://i.ibb.co/xtkk95rC/Whats-App-Image-2025-06-13-at-17-35-24-2.jpg" class="card-img-top" alt="Noticia 2">
                        <div class="card-body">
                            <div class="badge bg-primary mb-2">Eventos</div>
                            <h5 class="card-title">Celebración Día del Estudiante</h5>
                            <p class="card-text">¡Celebramos el Día del Estudiante en las sedes Antonio Nariño y Antonia Santos!
</p>
                            <a href="#" class="btn btn-outline-success" data-bs-toggle="modal"
                                data-bs-target="#modalNoticia2">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 hover-shadow">
                        <img src="https://i.ibb.co/xqP40H47/foro-educativo.jpg" class="card-img-top" alt="Noticia 3">
                        <div class="card-body">
                            <div class="badge bg-warning mb-2">Interno</div>
                            <h5 class="card-title">Primer Foro Educativo.</h5>
                            <p class="card-text">La institución Educativa San José de La Victoria Valle, hoy llevó a cabo...</p>
                            <a href="#" class="btn btn-outline-success" data-bs-toggle="modal"
                                data-bs-target="#miModal">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Noticia 1 -->
    <div class="modal fade" id="modalNoticia1" tabindex="-1" aria-labelledby="modalNoticia1Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalNoticia1Label">Medio Ambiente.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                </div>
               <div class="modal-body" style="text-align: justify; text-justify: distribute; line-height: 1.6; word-spacing: 4px;">
  <p>Nuestros estudiantes del grado décimo lideran la celebración del Día del Medio Ambiente.</p>
  <p>En nuestra institución educativa, nos unimos para reflexionar sobre la importancia de cuidar nuestro planeta y promover prácticas sostenibles. Los estudiantes lideraron actividades lúdicas y educativas para crear conciencia sobre la importancia de proteger el medio ambiente y cómo podemos contribuir a su conservación. Para ello, se valieron de juegos y dinámicas sobre el cuidado del medio ambiente, utilización  de materiales educativos sobre sostenibilidad, competencias sobre cuánto sabes del medio ambiente, actividades de reciclaje y reutilización de materiales, sensibilización a través de canciones alusivas al medio ambiente y nuestro planeta.</p>
  <p>¡Felicitaciones a nuestros estudiantes por su compromiso con el medio ambiente!</p>
</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Noticia 2 -->
    <div class="modal fade" id="modalNoticia2" tabindex="-1" aria-labelledby="modalNoticia2Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalNoticia2Label">Día del Estudiante.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Hoy nos reunimos para celebrar a nuestros estudiantes de primaria del corregimiento de Holguín su dedicación al aprendizaje. La izada de bandera es um momento emotivo que nos recuerda nuestra Patria, es un momento especial para reflexionar sobre la importancia de la educación y el papel que jugamos en la formación de nuestros niños.
                    Estudiantes, ustedes son nuestra razón de ser!!!
                    !Felicitaciones!
                    Esperamos que hayan disfrutado de esta celebración y que sigan trabajando duro para alcanzar sus metas.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Noticia 3 -->
    <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="miModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="miModalLabel">Foro Educativo.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    La institución Educativa San José de La Victoria Valle, hoy llevó a cabo el foro Educativo institucional, con miras a pensar el aporte al Plan decenal de Educación 2026-2036.
                    Cada ponencia y reflexión permitieron visibilizar una postura crítica frente a la educación rural  y la política educativa en las ruralidades colombianas.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


@endsection

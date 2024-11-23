    <link rel="stylesheet" href="style/css/home.css">
@extends('layouts.app')

@section('title', 'HOME - Institución Educativa Agropecuaria')

@section('contenido')
    <!-- Hero Section con Bienvenida -->
    <header class="hero min-vh-100 d-flex align-items-center bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="display-3 fw-bold text-success">Bienvenidos a la IE San José</h1>
                <p class="lead">Formando el futuro del campo colombiano con educación de calidad</p>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="p-4 bg-white rounded shadow">
                        <h2 class="h3 text-success mb-4">Educación Rural de Calidad</h2>
                        <p class="lead">Formando líderes para el desarrollo del campo colombiano</p>
                        <div class="d-flex gap-2">
                            <a href="#proyectos" class="btn btn-success">Nuestros Proyectos</a>
                            <a href="#noticias" class="btn btn-outline-success">Últimas Noticias</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="images/homeestudianterural.jpeg""/api/placeholder/600/400" alt="Estudiantes rurales"
                        class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </header>

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
                        <img src= "images/homeprimaria.jpeg""/api/placeholder/300/200" class="card-img-top"
                            alt="Primaria">
                        <div class="card-body">
                            <h5 class="card-title">Primaria</h5>
                            <p class="card-text">Educación básica con enfoque rural y ambiental.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 hover-shadow">
                        <img src="images/homesecundaria.jpeg""/api/placeholder/300/200" class="card-img-top"
                            alt="Secundaria">
                        <div class="card-body">
                            <h5 class="card-title">Secundaria</h5>
                            <p class="card-text">Formación integral con proyectos productivos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 hover-shadow">
                        <img src="images/homegraduado.jpeg"/api/placeholder/300/200" class="card-img-top"
                            alt="Técnico Agropecuario">
                        <div class="card-body">
                            <h5 class="card-title">Técnico Agropecuario</h5>
                            <p class="card-text">Especialización en producción agrícola.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 hover-shadow">
                        <img src="images/homeproyectoespecial.jpeg"/api/placeholder/300/200" class="card-img-top"
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
                        <img src="images/homeciencias.jpeg" class="card-img-top" alt="Noticia 1">
                        <div class="card-body">
                            <div class="badge bg-success mb-2">Académico</div>
                            <h5 class="card-title">Nuevo Proyecto Agrícola</h5>
                            <p class="card-text">Estudiantes inician proyecto de cultivos hidropónicos...</p>
                            <a href="#" class="btn btn-outline-success" data-bs-toggle="modal"
                                data-bs-target="#modalNoticia1">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 hover-shadow">
                        <img src="images/homenuevoproyecto.jpeg" class="card-img-top" alt="Noticia 2">
                        <div class="card-body">
                            <div class="badge bg-primary mb-2">Eventos</div>
                            <h5 class="card-title">Feria de la Ciencia Rural</h5>
                            <p class="card-text">Gran éxito en la primera feria científica...</p>
                            <a href="#" class="btn btn-outline-success" data-bs-toggle="modal"
                                data-bs-target="#modalNoticia2">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 hover-shadow">
                        <img src="images/homealianza.jpeg" class="card-img-top" alt="Noticia 3">
                        <div class="card-body">
                            <div class="badge bg-warning mb-2">Comunidad</div>
                            <h5 class="card-title">Alianza con Cooperativa Local</h5>
                            <p class="card-text">Nueva alianza para fortalecer la educación rural...</p>
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
                    <h5 class="modal-title" id="modalNoticia1Label">Nuevo Proyecto Agrícola</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    El reciente proyecto de cultivos hidropónicos iniciado por los estudiantes de la Institución Educativa
                    San José marca un hito en la adopción de técnicas avanzadas de agricultura sostenible. Este innovador
                    proyecto no solo les permite a los estudiantes adquirir conocimientos prácticos sobre el cultivo sin
                    suelo, utilizando soluciones nutritivas para el crecimiento de las plantas, sino que también promueve el
                    desarrollo de competencias en gestión agrícola y sostenibilidad ambiental. A través de este enfoque
                    educativo, se fomenta una comprensión profunda de la importancia de conservar los recursos naturales y
                    de la eficiencia en la producción de alimentos, preparando a los futuros líderes para enfrentar los
                    desafíos del sector agropecuario con soluciones creativas y ecológicas.
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
                    <h5 class="modal-title" id="modalNoticia2Label">Feria de la Ciencia Rural</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    La Institución Educativa San José celebra con orgullo el gran éxito de su primera feria científica, un
                    evento que se convirtió en un escenario vibrante para la presentación de proyectos innovadores enfocados
                    en el desarrollo sostenible. Los estudiantes, con gran dedicación y creatividad, expusieron diversas
                    iniciativas que abordan problemas ambientales y agrícolas mediante soluciones tecnológicas avanzadas y
                    prácticas sostenibles. Desde sistemas de riego eficientes hasta energías renovables y técnicas de
                    reciclaje, cada proyecto destacó por su potencial impacto positivo en la comunidad y el entorno. Este
                    logro no solo refleja el compromiso de los estudiantes con la sostenibilidad, sino también su capacidad
                    para transformar sus conocimientos en acciones concretas que contribuyen a un futuro más verde y
                    sostenible. La feria no solo inspiró a los participantes, sino también a los asistentes, reafirmando el
                    papel fundamental de la educación en el desarrollo de nuevas generaciones conscientes y responsables.
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
                    <h5 class="modal-title" id="miModalLabel">Alianza con Cooperativa Local</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    La reciente alianza con la cooperativa local ha sido un hito significativo para la Institución Educativa
                    San José, estableciendo un vínculo sólido que promete mejorar tanto la educación como el desarrollo
                    comunitario. Esta colaboración tiene como objetivos principales fortalecer los recursos educativos,
                    promover el emprendimiento entre los estudiantes, y fomentar proyectos que impulsen el desarrollo
                    sostenible. Los beneficios incluyen acceso a recursos adicionales, oportunidades de prácticas y
                    formación, así como el apoyo a iniciativas estudiantiles. En última instancia, esta alianza enriquecerá
                    el aprendizaje de los estudiantes, desarrollando sus habilidades prácticas y preparándolos para
                    convertirse en líderes comprometidos con su comunidad y el medio ambiente.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

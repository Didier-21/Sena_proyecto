@extends('layouts.app')

@section('title', 'Dashboard - Institución Educativa Agropecuaria')

@section('contenido')
<link rel="stylesheet" href="style/css/plataforma.css">
<link rel="stylesheet" href="style/css/primaria.css">


    <header class="bg-white shadow-md rounded-lg p-4 mb-6">
        <h1 class="text-3xl font-bold text-center text-green-700">Bienvenido a la Institución Educativa San José CDR</h1>
        <h2 class="text-3xl font-bold text-center text-green-700">Panel de Control Usuario</h2>
        <p class="text-center text-gray-600">Tu espacio para aprender y crecer en el ámbito agropecuario.</p>



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
                            <a href="#" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalNoticia1">Leer más</a>
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
                            <a href="#" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalNoticia2">Leer más</a>
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
                            <a href="#" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#miModal">Leer más</a>
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
                    El reciente proyecto de cultivos hidropónicos iniciado por los estudiantes de la Institución Educativa San José marca un hito en la adopción de técnicas avanzadas de agricultura sostenible. Este innovador proyecto no solo les permite a los estudiantes adquirir conocimientos prácticos sobre el cultivo sin suelo, utilizando soluciones nutritivas para el crecimiento de las plantas, sino que también promueve el desarrollo de competencias en gestión agrícola y sostenibilidad ambiental. A través de este enfoque educativo, se fomenta una comprensión profunda de la importancia de conservar los recursos naturales y de la eficiencia en la producción de alimentos, preparando a los futuros líderes para enfrentar los desafíos del sector agropecuario con soluciones creativas y ecológicas.
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
                    La Institución Educativa San José celebra con orgullo el gran éxito de su primera feria científica, un evento que se convirtió en un escenario vibrante para la presentación de proyectos innovadores enfocados en el desarrollo sostenible. Los estudiantes, con gran dedicación y creatividad, expusieron diversas iniciativas que abordan problemas ambientales y agrícolas mediante soluciones tecnológicas avanzadas y prácticas sostenibles. Desde sistemas de riego eficientes hasta energías renovables y técnicas de reciclaje, cada proyecto destacó por su potencial impacto positivo en la comunidad y el entorno. Este logro no solo refleja el compromiso de los estudiantes con la sostenibilidad, sino también su capacidad para transformar sus conocimientos en acciones concretas que contribuyen a un futuro más verde y sostenible. La feria no solo inspiró a los participantes, sino también a los asistentes, reafirmando el papel fundamental de la educación en el desarrollo de nuevas generaciones conscientes y responsables.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Noticia 3 -->
    <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="miModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="miModalLabel">Alianza con Cooperativa Local</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    La reciente alianza con la cooperativa local ha sido un hito significativo para la Institución Educativa San José, estableciendo un vínculo sólido que promete mejorar tanto la educación como el desarrollo comunitario. Esta colaboración tiene como objetivos principales fortalecer los recursos educativos, promover el emprendimiento entre los estudiantes, y fomentar proyectos que impulsen el desarrollo sostenible. Los beneficios incluyen acceso a recursos adicionales, oportunidades de prácticas y formación, así como el apoyo a iniciativas estudiantiles. En última instancia, esta alianza enriquecerá el aprendizaje de los estudiantes, desarrollando sus habilidades prácticas y preparándolos para convertirse en líderes comprometidos con su comunidad y el medio ambiente.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

<!-- Cursos disponibles sección -->

<h2 class="text-3xl font-bold text-center text-green-700">Cursos Disponibles Gratuitos</h2>
<div class="container mt-4">
    <div class="row">
        <!-- Curso: Manejo de Residuos y Reciclaje -->
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="images/reciclajecurso.jpeg" alt="Curso de Manejo de Residuos y Reciclaje" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-green-500">Curso de Manejo de Residuos y Reciclaje en Nuestra Finca</h5>
                    <p class="card-text"><strong>Intensidad Horaria:</strong> 100 horas</p>
                    <p class="card-text"><strong>Modalidad:</strong> Presencial</p>
                    <p class="card-text"><strong>Certificación:</strong> O.N.G VIDA Y ALEGRIA EN EL CAMPO</p>
                    <p class="card-text">Descripción: Este curso aborda la importancia del manejo adecuado de residuos en entornos agrícolas. Se enseña sobre la clasificación, el reciclaje y la implementación de prácticas sostenibles en la finca.</p>
                    <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalResiduos">Ver Pensum Académico</button>
                </div>
            </div>
        </div>

        <!-- Curso: Hidropónico -->
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="images/hidrocurso.jpeg" alt="Curso Hidropónico" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-green-500">Curso Hidropónico con Énfasis en Sostenimiento Familiar</h5>
                    <p class="card-text"><strong>Intensidad Horaria:</strong> 80 horas</p>
                    <p class="card-text"><strong>Modalidad:</strong> Presencial</p>
                    <p class="card-text"><strong>Certificación:</strong> Universidad Real Academia </p>
                    <p class="card-text">Descripción: Este curso ofrece un enfoque práctico sobre técnicas de cultivo hidropónico, ideal para promover la sostenibilidad en el hogar. Se aprenderá sobre sistemas hidropónicos, mantenimiento y optimización de recursos.</p>
                    <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalHidroponico">Ver Pensum Académico</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Pensum Académico (Manejo de Residuos) -->
<div class="modal fade" id="modalResiduos" tabindex="-1" aria-labelledby="modalResiduosLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalResiduosLabel">Pensum Académico - Manejo de Residuos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Introducción al Manejo de Residuos</li>
                    <li>Tipos de Residuos en la Agricultura</li>
                    <li>Prácticas de Reciclaje</li>
                    <li>Planificación de una Finca Sostenible</li>
                    <li>Evaluación y Cierre</li>
                </ul>
            </div>
            <div class="modal-footer">
                <a href="pdf/formulariocurso.pdf"" class="btn btn-primary" download="formato.pdf">Descargar Formulario</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Pensum Académico (Hidroponía) -->
<div class="modal fade" id="modalHidroponico" tabindex="-1" aria-labelledby="modalHidroponicoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalHidroponicoLabel">Pensum Académico - Hidropónico</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Introducción a la Hidroponía</li>
                    <li>Sistemas Hidropónicos Comunes</li>
                    <li>Mantenimiento y Nutrición de Plantas</li>
                    <li>Producción Sostenible en el Hogar</li>
                    <li>Evaluación y Cierre</li>
                </ul>
            </div>
            <div class="modal-footer">
                <a href="pdf/formulariocurso.pdf" class="btn btn-primary" download="formato.pdf">Descargar Formulario</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- Plataforma solo para administradores sección -->

<div class="container mx-auto p-5" style="background-image: url('ruta/a/tu-imagen.jpg'); background-size: cover; background-position: center;">
    <!-- Contenedor Principal que enmarca todo -->
    <div class="bg-gray-100 p-6 rounded-lg shadow-lg border border-gray-300 bg-opacity-75">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Sección Proyectos -->
            <div class="bg-white p-4 rounded-lg shadow-md border border-green-200 transition-transform transform hover:scale-105 hover:shadow-lg flex flex-col items-center justify-center text-center">
                <h2 class="text-xl font-semibold text-green-600">PROYECTOS</h2>
                <p class="text-gray-700">Proyectos y valores que se realizan con los estudiantes.</p>
                <div class="mt-4 flex flex-col space-y-2 items-center">
                    <a href="/proyectos" class="btn btn-primary">Ver Proyectos</a>
                    <a href="/proyectos/create" class="btn btn-primary">CREAR Proyectos</a>
                </div>
            </div>

            <!-- Sección Gestiones -->
            <div class="bg-white p-4 rounded-lg shadow-md border border-green-200 transition-transform transform hover:scale-105 hover:shadow-lg flex flex-col items-center justify-center text-center">
                <h2 class="text-xl font-semibold text-green-600">GESTIONES</h2>
                <p class="text-gray-700">Gestiones realizadas en la vigencia.</p>
                <div class="mt-4 flex flex-col space-y-2 items-center">
                    <a href="/gestion" class="btn btn-primary">VER Y CREAR GESTIONES</a>
                </div>
            </div>

            <!-- Sección Prácticas -->
            <div class="bg-white p-4 rounded-lg shadow-md border border-green-200 transition-transform transform hover:scale-105 hover:shadow-lg flex flex-col items-center justify-center text-center">
                <h2 class="text-xl font-semibold text-green-600">PRACTICAS</h2>
                <p class="text-gray-700">Prácticas Agropecuarias.</p>
                <div class="mt-4 flex flex-col space-y-2 items-center">
                    <a href="/practicas" class="btn btn-primary">Ver PRACTICAS</a>
                    <a href="/practicas/create" class="btn btn-primary">CREAR PRACTICA AGROPECUARIA</a>
                </div>
            </div>
        </div>
    </div>
</div>





</section>
@endsection

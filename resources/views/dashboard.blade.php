@extends('layouts.app')

@section('title', 'Dashboard - Institución Educativa Agropecuaria')

@section('contenido')
    <header class="bg-white shadow-md rounded-lg p-4 mb-6">
        <h1 class="text-3xl font-bold text-center text-green-700">Bienvenido a la Institución Educativa San José CDR</h1>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <div class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-green-600">Cursos Disponibles</h2>
        <p class="text-gray-700">Explora nuestros cursos y programas educativos en el área agropecuaria.</p>
        <a href="#" class="btn btn-primary">leeer mas </a>
    </div>
    <div class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-green-600">Recursos Educativos</h2>
        <p class="text-gray-700">Accede a materiales y recursos que te ayudarán en tu aprendizaje.</p>
    </div>
    <div class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-green-600">PROYECTOS</h2>
        <p class="text-gray-700">Proyectos y valores que se realizan con los estudiantes.</p>
        <a href="/proyectos" class="btn btn-primary"> Ver Proyectos </a>
        <a href="/proyectos/create" class="btn btn-primary"> CREAR Proyectos </a>
    </div>
    <div class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-green-600">GESTIONES</h2>
        <p class="text-gray-700">Gestiones REalizadas en la vigencia.</p>
        <a href="/gestion" class="btn btn-primary"> VER Y CREAR GESTIONES </a>
    </div>
    <div class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-green-600">PRACTICAS</h2>
        <p class="text-gray-700">Practicas Agropecuarias.</p>
        <a href="/practicas" class="btn btn-primary"> Ver PRACTICAS </a>
        <a href="/practicas/create" class="btn btn-primary"> CREAR PRACTICA AGROPECUARIA </a>
    </div>
</section>
@endsection

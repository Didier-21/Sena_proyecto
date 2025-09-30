
@extends('layouts.app')

@section('title', 'Dashboard - Institución Educativa Agropecuaria')

@section('contenido')
<link rel="stylesheet" href="style/css/logros.css">
    <div class="container mt-5">
        <h1 class="text-center">Logros Académicos - Institución Educativa San José</h1>
        <div class="row mt-4">
            <!-- Logro 1 -->
            <div class="col-md-6 mb-4 d-flex align-items-stretch">
                <div class="card">
                    <img src="images/concurso.jpeg" class="card-img-top" alt="Logro 1">
                    <div class="card-body">
                        <h5 class="card-title">Primer Lugar en Competencia Matemática</h5>
                        <p class="card-text">Fecha: Abril 2024 <br> Los estudiantes de la Institución San José obtuvieron el primer lugar en la competencia intercolegial de matemáticas.</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalLogro1">DETALLES</button>
                    </div>
                </div>
            </div>
            <!-- Modal para Logro 1 -->
            <div class="modal fade" id="modalLogro1" tabindex="-1" role="dialog" aria-labelledby="modalLogro1Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLogro1Label">Primer Lugar en Competencia Matemática</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>El primer lugar en la competencia de matemáticas: Este logro es un reflejo del esfuerzo y dedicación de nuestros estudiantes y profesores, quienes trabajaron en equipo para alcanzar este objetivo, demostrando su esfuerzo y dedicación en todo momento. Este triunfo es un claro ejemplo del compromiso constante y la pasión que nuestros estudiantes y profesores ponen en su labor educativa. Cada participante demostró no solo conocimientos excepcionales en matemáticas, sino también habilidades para resolver problemas de manera creativa y eficiente.

                                Queremos resaltar especialmente al Docente CARLOS MARIO, cuyo liderazgo y entrega fueron fundamentales para alcanzar este éxito. Su dedicación y el valor agregado que aportó al proceso de preparación y participación en la competencia han sido invaluables. Su capacidad para inspirar y guiar a los estudiantes ha sido determinante para lograr este primer lugar. Este reconocimiento es un testimonio de su compromiso y excelencia en la enseñanza.

                                Este triunfo es una clara demostración de lo que se puede lograr cuando se trabaja con pasión y colaboración. Agradecemos a todos los involucrados por su esfuerzo y celebramos juntos este importante logro.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logro 2 -->
            <div class="col-md-6 mb-4 d-flex align-items-stretch">
                <div class="card">
                    <img src="images/ciencias.jpeg" class="card-img-top" alt="Logro 2">
                    <div class="card-body">
                        <h5 class="card-title">Feria de Ciencias</h5>
                        <p class="card-text">Fecha: Junio 2024 <br> Los estudiantes presentaron proyectos innovadores en la Feria de Ciencias local, destacando la importancia de la ciencia en la vida diaria.</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalLogro2">DETALLES</button>
                    </div>
                </div>
            </div>
            <!-- Modal para Logro 2 -->
            <div class="modal fade" id="modalLogro2" tabindex="-1" role="dialog" aria-labelledby="modalLogro2Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLogro2Label">Feria de Ciencias 2024</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Nuestros estudiantes trabajaron arduamente y exploraron diversas áreas científicas, demostrando un nivel impresionante de dedicación y pasión por sus proyectos. Cada grupo de estudiantes presentó propuestas innovadoras que reflejan no solo su creatividad, sino también un profundo compromiso con el aprendizaje y la investigación. Desde el desarrollo de soluciones tecnológicas hasta la exploración de nuevos conceptos teóricos, sus trabajos han sido un claro ejemplo de cómo la educación puede inspirar y motivar a las nuevas generaciones. Además, estos proyectos no solo evidencian su talento individual, sino también su capacidad para trabajar en equipo y colaborar efectivamente para alcanzar objetivos comunes. En resumen, su esfuerzo y dedicación destacan el valor de una educación comprometida con el desarrollo integral del estudiante..</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logro 3 -->
            <div class="col-md-6 mb-4 d-flex align-items-stretch">
                <div class="card">
                    <img src="images/idioma.jpeg" class="card-img-top" alt="Logro 3">
                    <div class="card-body">
                        <h5 class="card-title">Certificación en Idiomas</h5>
                        <p class="card-text">Fecha: Agosto 2024 <br> La institución logró certificar a un grupo de estudiantes en el idioma inglés, abriendo nuevas oportunidades de aprendizaje.</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalLogro3">DETALLES</button>
                    </div>
                </div>
            </div>
            <!-- Modal para Logro 3 -->
            <div class="modal fade" id="modalLogro3" tabindex="-1" role="dialog" aria-labelledby="modalLogro3Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLogro3Label">Certificación en Idiomas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Este logro marca un paso significativo en el desarrollo académico de nuestros estudiantes, destacando no solo su dedicación y esfuerzo, sino también la calidad de la educación que reciben. Al alcanzar este hito, nuestros estudiantes no solo adquieren conocimientos teóricos, sino también desarrollan habilidades prácticas y valiosas que serán esenciales en su futuro profesional.

                                Estas competencias incluyen el pensamiento crítico, la resolución de problemas, la colaboración y la capacidad de innovar, todas fundamentales en el competitivo mundo laboral actual. La experiencia y los conocimientos adquiridos a través de este logro les proporcionan una base sólida para enfrentar futuros desafíos y aprovechar oportunidades profesionales.

                                Estamos orgullosos de ver cómo nuestros estudiantes aprovechan estas experiencias para crecer y convertirse en líderes competentes y seguros de sí mismos, preparados para contribuir de manera significativa a la sociedad. Este éxito no solo es un reflejo de su capacidad individual, sino también de la comunidad educativa que los apoya y motiva a seguir superándose cada día.</p>
                        </div>
                    </div>
                </div>
            </div>

<!-- Logro 4 -->
<div class="col-md-6 mb-4 d-flex align-items-stretch">
    <div class="card">
        <img src="images/lectura.jpeg" class="card-img-top" alt="Logro 4">
        <div class="card-body">
            <h5 class="card-title">Participación en el Concurso de Lectura</h5>
            <p class="card-text">Fecha: Septiembre 2024 <br> Estudiantes participaron en el Concurso Nacional de Lectura, demostrando su pasión por la literatura.</p>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalLogro4">DETALLES</button>
        </div>
    </div>
</div>

<!-- Modal para Logro 4 -->
<div class="modal fade" id="modalLogro4" tabindex="-1" role="dialog" aria-labelledby="modalLogro4Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLogro4Label">Participación en el Concurso de Lectura</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>La participación de nuestros estudiantes en el Concurso Nacional de Lectura es un testimonio de su amor por la literatura y su dedicación al arte de las letras. Este logro no solo refleja su compromiso con la lectura, sino también su capacidad para analizar, interpretar y apreciar obras literarias de diversas épocas y estilos.

                    Competir en un evento de esta magnitud requiere un profundo conocimiento literario y habilidades críticas que nuestros estudiantes han desarrollado a lo largo de su formación. Sus presentaciones se destacaron por su elocuencia, originalidad y profundidad de pensamiento, resultado de horas de lectura y enriquecedoras discusiones literarias.

                    Estos jóvenes no solo han sobresalido en el ámbito académico, sino que también han asumido el papel de embajadores de la literatura, inspirando a otros a explorar el fascinante mundo de los libros y a reconocer el poder transformador que la lectura puede tener en nuestras vidas.</p>
            </div>
        </div>
    </div>
</div>


<div class="text-center align-bottom mt-4">
    <p class="lead mb-0 text-center">

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection

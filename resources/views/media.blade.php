
@extends('layouts.app')

@section('title', 'Media')

@section('contenido')
<link rel="stylesheet" href="style/css/primaria.css">
<!-- Sección de Media Técnica -->
<div class="hero-section text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Media Técnica en Agroindustria y Tecnología Digital</h1>
        <p class="lead">Formamos técnicos rurales con competencias en agroindustria, tecnología y emprendimiento</p>
        <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#registroModal">
            Conoce nuestro programa
        </button>
    </div>
</div>

<!-- Perfil del Egresado -->
<div class="container my-5">
    <h2 class="text-center mb-4">Perfil del Egresado</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="images/tecnologiaagricola.jpeg" class="card-img-top" alt="Tecnología Agrícola">
                <div class="card-body">
                    <h3 class="card-title">Competencias Tecnológicas</h3>
                    <ul class="card-text">
                        <li>Manejo de software especializado para agricultura de precisión</li>
                        <li>Implementación de sistemas de riego automatizados</li>
                        <li>Uso de drones para monitoreo de cultivos</li>
                        <li>Análisis de datos agrícolas mediante herramientas digitales</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="images/competecnologica.jpeg" class="card-img-top" alt="Agroindustria">
                <div class="card-body">
                    <h3 class="card-title">Competencias Agroindustriales</h3>
                    <ul class="card-text">
                        <li>Procesos de transformación de productos agrícolas</li>
                        <li>Gestión de cadenas de producción sostenible</li>
                        <li>Certificación en buenas prácticas agrícolas</li>
                        <li>Manejo de maquinaria agrícola moderna</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Áreas de Especialización -->
<div class="container my-5">
    <h2 class="text-center mb-4">Áreas de Especialización</h2>
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <i class="fas fa-laptop-code fa-3x mb-3"></i>
                    <h3 class="card-title">Agricultura Digital</h3>
                    <p class="card-text">Sistemas de información geográfica, IoT en agricultura, Apps de gestión agrícola</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <i class="fas fa-seedling fa-3x mb-3"></i>
                    <h3 class="card-title">Producción Sostenible</h3>
                    <p class="card-text">Técnicas de cultivo orgánico, sistemas agroforestales, certificaciones verdes</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <i class="fas fa-industry fa-3x mb-3"></i>
                    <h3 class="card-title">Procesamiento</h3>
                    <p class="card-text">Transformación de alimentos, control de calidad, cadena de valor agroindustrial</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <i class="fas fa-chart-line fa-3x mb-3"></i>
                    <h3 class="card-title">Emprendimiento</h3>
                    <p class="card-text">Marketing digital agrícola, gestión de proyectos, comercio electrónico rural</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Proyectos Tecnológicos -->
<div class="container my-5">
    <h2 class="text-center mb-4">Proyectos Tecnológicos Aplicados</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="images/agroindustria.jpeg" class="card-img-top" alt="Smart Farming">
                <div class="card-body">
                    <h3 class="card-title">Smart Farming</h3>
                    <p class="card-text">Implementación de sensores IoT para monitoreo de cultivos, sistema de riego automatizado y estaciones meteorológicas digitales.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="images/comercerural.jpeg" class="card-img-top" alt="E-commerce Rural">
                <div class="card-body">
                    <h3 class="card-title">E-commerce Rural</h3>
                    <p class="card-text">Desarrollo de plataformas de comercio electrónico para productos agrícolas locales y conexión directa con mercados urbanos.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Alianzas Estratégicas -->
<div class="container my-5">
    <h2 class="text-center mb-4">Alianzas Estratégicas</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <i class="fas fa-university fa-3x mb-3"></i>
                    <h3 class="card-title">SENA</h3>
                    <p class="card-text">Articulación con programas técnicos y tecnológicos en agroindustria</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <i class="fas fa-handshake fa-3x mb-3"></i>
                    <h3 class="card-title">Empresas Agrícolas</h3>
                    <p class="card-text">Prácticas empresariales y proyectos colaborativos con el sector productivo</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <i class="fas fa-globe fa-3x mb-3"></i>
                    <h3 class="card-title">Centros de Investigación</h3>
                    <p class="card-text">Participación en proyectos de investigación agrícola y desarrollo rural</p>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Enfoque Rural -->
<div class="container">
    <div class="rural-emphasis">
        <h3>Educación Rural de Calidad</h3>
        <p class="lead">Nuestro modelo educativo integra el contexto rural con la excelencia académica:</p>
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li>Huerta escolar pedagógica</li>
                    <li>Proyectos ambientales</li>
                    <li>Valoración de la cultura local</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>Tecnología adaptada al campo</li>
                    <li>Alimentación saludable</li>
                    <li>Participación comunitaria</li>
                </ul>
            </div>
        </div>
    </div>
</div>

 <!-- Valores y Características -->
 <section class="valores-section">
    <div class="container">
        <h2 class="text-center mb-5">¿Por qué elegirnos?</h2>
        <div class="row">
            <div class="col-md-3 text-center mb-4">
                <div class="icon-box">🌱</div>
                <h4>Educación Ambiental</h4>
                <p>Fomentamos el amor y cuidado por la naturaleza</p>
            </div>
            <div class="col-md-3 text-center mb-4">
                <div class="icon-box">👥</div>
                <h4>Grupos Reducidos</h4>
                <p>Atención personalizada para cada estudiante</p>
            </div>
            <div class="col-md-3 text-center mb-4">
                <div class="icon-box">🎯</div>
                <h4>Metodología Activa</h4>
                <p>Aprendizaje basado en proyectos y experiencias</p>
            </div>
            <div class="col-md-3 text-center mb-4">
                <div class="icon-box">🤝</div>
                <h4>Comunidad Educativa</h4>
                <p>Integración familia-escuela-comunidad</p>
            </div>
        </div>
    </div>
</section>


    <!-- Modal de Registro -->
    <div class="modal fade" id="registroModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Solicitud de Información / Registro</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form class="custom-form">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Nombre del Acudiente</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" required>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Nombre del Estudiante</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Edad del Estudiante</label>
                                <input type="number" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Grado de Interés</label>
                            <select class="form-select" required>
                                <option value="">Seleccione un grado</option>
                                <option value="prejardin">Pre Jardín</option>
                                <option value="jardin">Jardín</option>
                                <option value="primaria">Primaria</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mensaje o Consulta</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Enviar Solicitud</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

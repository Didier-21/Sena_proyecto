<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/css/primaria.css">
</head>
<body>

 <!-- Navbar con el formulario -->
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <img src="{{ asset('images/logo.png') }}" alt="CDR" style="width: 40px; height: auto;">
                <a class="navbar-brand" >San Jose CDR</a>
                <a class="navbar-brand" href="{{ route('home') }}">Mi cole</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Como es
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/mision">Misión</a></li>
                                <li><a class="dropdown-item" href="/vision">Visión</a></li>
                                <li><a class="dropdown-item" href="/logroaca">Logros académicos</a></li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Gestión Administrativa Y financiera
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/gestion-juridica">Gestión jurídica</a></li>
                                <li><a class="dropdown-item" href="/logros-directivos">Logros Directivos</a></li>
                                <li><a class="dropdown-item" href="/proyectos-productivos">Proyectos Productivos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Escolaridad
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/primaria">Primaria</a></li>
                                <li><a class="dropdown-item" href="/secundaria">Secundaria</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Media Técnica</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Talento Humano
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Docentes</a></li>
                                <li><a class="dropdown-item" href="#">Administrativos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Directivos</a></li>
                            </ul>
                        </li>
                    </ul>
                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#matriculaModal">Matricúlate ya</button>
                        <button class="btn btn-primary me-2" type="button" onclick="window.location.href='/login'">Iniciar</button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Modal para el formulario de matrícula -->
<div class="modal fade" id="matriculaModal" tabindex="-1" aria-labelledby="matriculaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="matriculaModalLabel">Formulario de Matrícula</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <!-- Datos del Estudiante -->
                    <h6>Datos del Estudiante</h6>
                    <div class="mb-3">
                        <label for="nombreEstudiante" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="nombreEstudiante" required>
                    </div>
                    <div class="mb-3">
                        <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fechaNacimiento" required>
                    </div>

                    <div class="mb-3">
                        <label for="grado" class="form-label">Grado</label>
                        <select class="form-select" id="grado" required onchange="mostrarOpcionesGrado()">
                            <option selected disabled>Seleccione el grado</option>
                            <option value="Jardin">Jardín</option>
                            <option value="Primaria">Primaria</option>
                            <option value="Secundaria">Secundaria</option>
                            <option value="MediaTecnica">Media Técnica</option>
                        </select>
                    </div>

                    <!-- seleccionar subgrado -->
                    <div class="mb-3" id="subgradoContainer" style="display: none;">
                        <label for="subgrado" class="form-label">Subgrado</label>
                        <select class="form-select" id="subgrado" required>
                            <!-- Las opciones se llenarán según el grado seleccionado -->
                        </select>
                    </div>

                    <!-- Script para mostrar opciones de subgrado según el grado seleccionado -->
                    <script>
                    function mostrarOpcionesGrado() {
                        const grado = document.getElementById("grado").value;
                        const subgradoContainer = document.getElementById("subgradoContainer");
                        const subgrado = document.getElementById("subgrado");

                        // Vaciar las opciones previas
                        subgrado.innerHTML = "";

                        // Mostrar el submenú solo si hay opciones específicas para el grado seleccionado
                        if (grado === "Jardin" || grado === "Primaria" || grado === "Secundaria") {
                            subgradoContainer.style.display = "block";

                            let opciones = [];

                            if (grado === "Jardin") {
                                opciones = ["Párvulos", "Pre-Jardín", "Jardín"];
                            } else if (grado === "Primaria") {
                                opciones = ["Primero", "Segundo", "Tercero", "Cuarto", "Quinto"];
                            } else if (grado === "Secundaria") {
                                opciones = ["Sexto", "Séptimo", "Octavo", "Noveno", "Décimo", "Once"];
                            }

                            // Añadir opciones al subgrado
                            opciones.forEach(function(opcion) {
                                const optionElement = document.createElement("option");
                                optionElement.value = opcion;
                                optionElement.textContent = opcion;
                                subgrado.appendChild(optionElement);
                            });
                        } else {
                            // Ocultar el submenú si no aplica
                            subgradoContainer.style.display = "none";
                        }
                    }
                    </script>

                    <!-- Datos del Acudiente -->
                    <h6>Datos del Acudiente</h6>
                    <div class="mb-3">
                        <label for="nombreAcudiente" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="nombreAcudiente" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefonoAcudiente" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="telefonoAcudiente" required>
                    </div>
                    <div class="mb-3">
                        <label for="emailAcudiente" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="emailAcudiente">
                    </div>

                    <!-- Selección de la Sede -->
                    <div class="mb-3">
                        <label for="sede" class="form-label">Sede</label>
                        <select class="form-select" id="sede" required>
                            <option selected disabled>Seleccione la sede</option>
                            <option value="Sede Principal">Sede Principal CDR</option>
                            <option value="Sede Secundaria">Sede Secundaria</option>
                            <option value="Sede Rural">Jardín Nuevo Siglo</option>
                        </select>
                    </div>

                    <!-- Botón de envío -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Enviar Matrícula</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


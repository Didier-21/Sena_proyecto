<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CDR-SAN JOSE - @yield('title')</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="style/css/navbar_footer.css">
    <link rel="stylesheet" href="style/css/primaria.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg w-100">
            <div class="container-fluid">
                <img src="{{ asset('images/logo.png') }}" alt="CDR" style="width: 40px; height: auto;">
                <a class="navbar-brand" href="{{ route('home') }}">San Jose CDR</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Quienes somos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('mision') }}">Misión</a></li>
                                <li><a class="dropdown-item" href="/vision">Visión</a></li>
                                <li><a class="dropdown-item" href="/estudiantew">Perfil del Estudiante</a></li>
                                <li><a class="dropdown-item" href="/perfildocente">Perfil del Docente</a></li>
                                <li><a class="dropdown-item" href="/filosofia">Filosofía Institucional</a></li>
                                <li><a class="dropdown-item" href="/logroaca">Logros académicos</a></li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Gestión Administrativa Y financiera
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/gestion-juridica">Gestión jurídica</a></li>
                                <li><a class="dropdown-item" href="/logros-directivos">Logros Directivos</a></li>
                                <li><a class="dropdown-item" href="/proyectos-productivos">Proyectos Productivos</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Escolaridad
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/primaria">Primaria</a></li>
                                <li><a class="dropdown-item" href="/secundaria">Secundaria</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/media">Media Técnica</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Talento Humano
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/docentes">Docentes</a></li>
                                <li><a class="dropdown-item" href="/administrativos">Administrativos</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/directivos">Directivos</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Botón Matricúlate ya --><!-- Navbar con el formulario -->
                    <button class="btn btn-success" type="button" data-bs-toggle="modal"
                        data-bs-target="#matriculaModal">Matricúlate ya</button>

                    <form class="d-flex" role="search">
                        @if (auth()->user())
                            <label for="" class="text-white">{{ auth()->user()->email }}</label>
                            <!-- Cambié la clase del botón de cerrar sesión para que sea igual al de Matricúlate ya -->
                            <button class="btn btn-success me-2" type="button"
                                onclick="window.location.href='/logout'">Cerrar sesión</button>
                        @else
                            <!-- Cambié la clase del botón de iniciar sesión para que sea igual al de Matricúlate ya -->
                            <button class="btn btn-success" type="button"
                                onclick="window.location.href='/login'">Iniciar sesión</button>
                        @endif
                    </form>
                </div>
            </div>
        </nav>
        @yield('contenido')
        @yield('logro')
        @yield('scripts')
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Contacto</h3>
                    <div class="contact-info">
                        <p><i class="fas fa-phone-alt"></i> (+57) 3113115990</p>
                        <p><i class="fas fa-envelope"></i> sanjose@valledelcauca.gov.co</p>
                        <p><i class="fas fa-map-marker-alt"></i> Corregimiento San José, La Victoria Valle</p>
                        <p><i class="fas fa-clock"></i> Lunes a Viernes: 7:00 AM - 4:00 PM</p>
                    </div>
                </div>

                <div class="footer-section">
                   <h3>Enlaces Rápidos</h3>
<ul class="list-unstyled">
    <li>
        <a href="https://www.valledelcauca.gov.co/documentos/12569/calendario-academico/" class="text-light text-decoration-none">
            <i class="fas fa-calendar-alt me-2"></i>Calendario Académico
        </a>
    </li>
    <li>
        <a href="/gestion-juridica" class="text-light text-decoration-none">
            <i class="fas fa-user-graduate me-2"></i>Juridica
        </a>
    </li>
    <li>
        <a href="https://consultas.bibliovalle.gov.co/cgi-bin/koha/opac-user.pl" class="text-light text-decoration-none">
            <i class="fas fa-book me-2"></i>Biblioteca Virtual
        </a>
    </li>
    <li>
        <a href="https://www.valledelcauca.gov.co/publicaciones/60538/recepcion-de-solicitudes-pqrsd/" class="text-light text-decoration-none">
            <i class="fas fa-headset me-2"></i>Atención a la Ciudadanía
        </a>
    </li>
</ul>
                </div>

                <div class="footer-section">
                    <h3>Síguenos</h3>
                    <div class="social-buttons">
                        <a href="https://facebook.com/" class="social-btn facebook" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                            Facebook
                        </a>
                        <a href="https://twitter.com/" class="social-btn twitter" target="_blank">
                            <i class="fab fa-twitter"></i>
                            Twitter
                        </a>
                        <a href="https://instagram.com/" class="social-btn instagram" target="_blank">
                            <i class="fab fa-instagram"></i>
                            Instagram
                        </a>
                        <a href="https://youtube.com/" class="social-btn youtube" target="_blank">
                            <i class="fab fa-youtube"></i>
                            YouTube
                        </a>
                    </div>

                    <div class="visitor-counter">
                        <h4>Visitantes</h4>
                        <div class="counter-number">
                            <i class="fas fa-users"></i>
                            <span id="visitorCount">000023</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <p>© 2025 Institución Educativa San José. Todos los derechos reservados.</p>
            </div>

            <a href="https://wa.me/573113115990" class="whatsapp-button" target="_blank">
                <i class="fab fa-whatsapp fa-2x"></i>
            </a>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script>
                // Simulación básica de contador de visitas
                // En un caso real, esto se conectaría a una base de datos
                let visitorCount = localStorage.getItem('visitorCount') || 00023;
                visitorCount = parseInt(visitorCount) + 1;
                localStorage.setItem('visitorCount', visitorCount);
                document.getElementById('visitorCount').textContent = visitorCount.toLocaleString();
            </script>
            <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Incluye FontAwesome -->
        </footer>
    </div>
    <!-- Modal para el formulario de matrícula -->
    <div class="modal fade" id="matriculaModal" tabindex="-1" aria-labelledby="matriculaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="matriculaModalLabel">Formulario de Matrícula</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formularioMatricula" onsubmit="enviarFormulario(event)">
                        <!-- Datos del Estudiante -->
                        <h6>Datos del Estudiante</h6>
                        <div class="mb-3">
                            <label for="nombreEstudiante" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombreEstudiante" name="nombreEstudiante"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="grado" class="form-label">Grado</label>
                            <select class="form-select" id="grado" name="grado" required
                                onchange="mostrarOpcionesGrado()">
                                <option selected disabled>Seleccione el grado</option>
                                <option value="Jardin">Jardín</option>
                                <option value="Primaria">Primaria</option>
                                <option value="Secundaria">Secundaria</option>
                                <option value="MediaTecnica">Media Técnica</option>
                            </select>
                        </div>
                        <div class="mb-3" id="subgradoContainer" style="display:none;">
                            <label for="subgrado" class="form-label">Subgrado</label>
                            <select class="form-select" id="subgrado" name="subgrado" required>
                            </select>
                        </div>

                        <!-- Datos del Acudiente -->
                        <h6>Datos del Acudiente</h6>
                        <div class="mb-3">
                            <label for="nombreAcudiente" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombreAcudiente" name="nombreAcudiente"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="telefonoAcudiente" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="telefonoAcudiente"
                                name="telefonoAcudiente" required>
                        </div>
                        <div class="mb-3">
                            <label for="emailAcudiente" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="emailAcudiente" name="emailAcudiente"
                                required>
                        </div>

                        <!-- Selección de la Sede -->
                        <div class="mb-3">
                            <label for="sede" class="form-label">Sede</label>
                            <select class="form-select" id="sede" name="sede" required>
                                <option selected disabled>Seleccione la sede</option>
                                <option value="Sede Principal">Sede Principal CDR</option>
                                <option value="Sede Secundaria">Sede Secundaria</option>
                                <option value="Sede Rural">Jardín Nuevo Siglo</option>
                            </select>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar Matrícula</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Agregar EmailJS -->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

    <script>
        // Inicializar EmailJS con tu clave pública
        (function() {
            emailjs.init("Ecl1KROp40xK3X9S_");
        })();

        function mostrarOpcionesGrado() {
            const grado = document.getElementById("grado").value;
            const subgradoContainer = document.getElementById("subgradoContainer");
            const subgrado = document.getElementById("subgrado");

            subgrado.innerHTML = "";

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

                opciones.forEach(function(opcion) {
                    const optionElement = document.createElement("option");
                    optionElement.value = opcion;
                    optionElement.textContent = opcion;
                    subgrado.appendChild(optionElement);
                });
            } else {
                subgradoContainer.style.display = "none";
            }
        }

        function enviarFormulario(event) {
            event.preventDefault();

            const form = document.getElementById('formularioMatricula');
            const formData = new FormData(form);
            const templateParams = {
                nombreEstudiante: formData.get('nombreEstudiante'),
                fechaNacimiento: formData.get('fechaNacimiento'),
                grado: formData.get('grado'),
                subgrado: formData.get('subgrado'),
                nombreAcudiente: formData.get('nombreAcudiente'),
                telefonoAcudiente: formData.get('telefonoAcudiente'),
                emailAcudiente: formData.get('emailAcudiente'),
                sede: formData.get('sede')
            };

            emailjs.send(
                    'matriculas2024', // ID del servicio de EmailJS
                    'template_lkqltz8', // ID de la plantilla de EmailJS
                    templateParams
                )
                .then(function(response) {
                    alert('¡Formulario enviado correctamente!');
                    form.reset();
                    $('#matriculaModal').modal('hide');
                }, function(error) {
                    alert('Error al enviar el formulario: ' + error);
                });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

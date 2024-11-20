<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CDR-SAN JOSE - @yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .navbar {
            background-color: #044506;
        }

        .navbar-brand,
        .nav-link,
        .dropdown-item {
            color: hsl(212, 57%, 82%) !important;
            font-family: 'Arial', sans-serif;
            font-weight: bold;
        }

        .navbar-brand:hover,
        .nav-link:hover,
        .dropdown-item:hover {
            color: #5f0f40 !important;
        }

        .dropdown-menu {
            background-color: #3c6a55;
        }

        .dropdown-divider {
            border-color: #7f8c8d;
        }

        .btn-primary {
            background-color: #3498db;
            border-color: #467696;
            font-family: 'Arial', sans-serif;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #1c6ea4;
        }

        .form-control {
            border-radius: 20px;
            font-family: 'Arial', sans-serif;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #93dcec;
            color: #000000;
        }

        .navbar-brand img {
            margin-right: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
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
                                Como es
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/mision">Misión</a></li>
                                <li><a class="dropdown-item" href="/vision">Visión</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/logroaca">Logros académicos</a></li>
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
                                <li><a class="dropdown-item" href="#">Secundaria</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Media Técnica</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Talento Humano
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Docentes</a></li>
                                <li><a class="dropdown-item" href="#">Administrativos</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Directivos</a></li>
                            </ul>
                        </li>

                    </ul>
                    <form class="d-flex" role="search"method=">
                        @if (auth()->user())
                            <label for="" class="text-white">{{ auth()->user()->email }}</label>
                            <button class="btn btn-primary me-2" type="button"
                                onclick="window.location.href='/logout'">Cerrar sesion</button>
                            @else
                            <button class="btn btn-primary me-2" type="button"
                                onclick="window.location.href='/login'">Iniciar sesion</button>
                            @endif
                      </form>
                </div>
            </div>
        </nav>
        <br><br><br>

        @yield('contenido')
        @yield('logro')
        <footer class="bg-dark text-white text-center text-lg-start mt-auto">
            <div class="container p-4">
                <div class="row">
                    <!-- Columna 1 -->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Acerca de nosotros</h5>
                        <p>
                            Somos una empresa dedicada a brindar soluciones innovadoras. Nuestra misión es mejorar la
                            vida de nuestros clientes a través de la tecnología.
                        </p>
                    </div>

                    <!-- Columna 2 -->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Enlaces útiles</h5>
                        <ul class="list-unstyled mb-0">
                            <li><a href="#!" class="text-white">Inicio</a></li>
                            <li><a href="#!" class="text-white">Servicios</a></li>
                            <li><a href="#!" class="text-white">Contacto</a></li>
                            <li><a href="#!" class="text-white">Política de privacidad</a></li>
                        </ul>
                    </div>

                    <!-- Columna 3 -->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Síguenos</h5>
                        <ul class="list-unstyled d-flex justify-content-center">
                            <li><a href="#!" class="text-white me-3"><i class="fab fa-facebook"></i>
                                    Facebook</a></li>
                            <li><a href="#!" class="text-white me-3"><i class="fab fa-twitter"></i> Twitter</a>
                            </li>
                            <li><a href="#!" class="text-white"><i class="fab fa-instagram"></i> Instagram</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Columna 4 -->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Contacto</h5>
                        <p>Teléfono: (555) 555-5555</p>
                        <p>Email: contacto@ejemplo.com</p>
                    </div>
                </div>
            </div>

            <!-- Línea de copyright -->
            <div class="text-center p-3" style="background-color: rgba(78, 178, 236, 0.2);">
                © 2023 Tu Empresa:
                <a class="text-white" href="https://tuempresa.com/">tuempresa.com</a>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

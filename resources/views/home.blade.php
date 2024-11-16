<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CDR-SAN JOSE - @yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <img src="{{ asset('images/logo.png') }}" alt="CDR" style="width: 40px; height: auto;">
                <a class="navbar-brand">San Jose CDR</a>
                <a class="navbar-brand" href="{{ route('home') }}">Mi cole</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100">
                        <li class="nav-item dropdown flex-grow-1">
                            <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Como es
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/mision">Misión</a></li>
                                <li><a class="dropdown-item" href="/vision">Visión</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/logroaca">Logros académicos</a></li>
                                <li><a class="dropdown-item" href="/gestion-juridica">Gestión jurídica</a></li>
                                <li><a class="dropdown-item" href="/logros-directivos">Logros Directivos</a></li>
                                <li><a class="dropdown-item" href="/proyectos-productivos">Proyectos Productivos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown flex-grow-1">
                            <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Escolaridad
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/primaria">Primaria</a></li>
                                <li><a class="dropdown-item" href="#">Secundaria</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Media Técnica</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown flex-grow-1">
                            <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

                    <button class="btn btn-primary me-2" type="button" onclick="window.location.href='/login'">Login</button>
                </div>
            </div>
        </nav>
    </div>


    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-content text-center">
            <h1 class="display-4 fw-bold">Institución Educativa San José</h1>
            <p class="lead mt-3">Formando líderes rurales con excelencia y valores</p>
            <a href="#" class="btn btn-success btn-lg mt-4">Conoce más sobre nosotros</a>
        </div>
    </section>

    <!-- Quick Access Cards -->
    <section class="quick-access py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <a href="/juridica" class="text-decoration-none">
                        <div class="access-card">
                            <img src="/api/placeholder/400/200" alt="Gestión Jurídica">
                            <div class="access-overlay">Gestión Jurídica</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="container text-center">
            <p>La IE San José es una institución educativa rural comprometida con la formación integral y el desarrollo sostenible de nuestra comunidad.</p>
            <p>&copy; 2024 CDR San José</p>
        </div>
    </footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

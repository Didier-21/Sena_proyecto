<!DOCTYPE html>
<html>
<head>
    <title>Jhon_Hernandez - @yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Personalización del navbar */
        .navbar {
            background-color: #78e14b; /* Color de fondo personalizado */
        }
        .navbar-brand, .nav-link, .dropdown-item {
            color: #ecf0f1 !important; /* Color del texto */
            font-family: 'Arial', sans-serif; /* Tipo de letra */
            font-weight: bold; /* Negrita */
        }
        .navbar-brand:hover, .nav-link:hover, .dropdown-item:hover {
            color: #3498db !important; /* Color al pasar el ratón */
        }
        .dropdown-menu {
            background-color: #34495e; /* Color de fondo del menú desplegable */
        }
        .dropdown-divider {
            border-color: #7f8c8d; /* Color del divisor en el menú desplegable */
        }

        /* Estilo de los botones */
        .btn-primary {
            background-color: #3498db; /* Color de fondo personalizado */
            border-color: #467696; /* Color del borde */
            font-family: 'Arial', sans-serif; /* Tipo de letra */
            font-weight: bold; /* Negrita */
        }
        .btn-primary:hover {
            background-color: #2980b9; /* Color de fondo al pasar el ratón */
            border-color: #1c6ea4; /* Color del borde al pasar el ratón */
        }

        /* Estilo de los inputs de búsqueda */
        .form-control {
            border-radius: 20px; /* Bordes redondeados */
            font-family: 'Arial', sans-serif; /* Tipo de letra */
        }

        /* Estilo general */
        body {
            font-family: 'Arial', sans-serif; /* Tipo de letra */
            background-color: #93dcec; /* Color de fondo de la página */
            color: #14c33d; /* Color del texto */
        }

        /* Margen personalizado para la imagen del logo */
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

                <a class="navbar-brand" href="#">I.E San Jose CDR</a>
                <a class="navbar-brand" href="{{ route('home') }}">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mi Colegio
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Misión</a></li>
                                <li><a class="dropdown-item" href="#">Visión</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Logros académicos</a></li>
                                <li><a class="dropdown-item" href="#">Gestión jurídica</a></li>
                                <li><a class="dropdown-item" href="#">Logros Directivos</a></li>
                                <li><a class="dropdown-item" href="#">Proyectos Productivos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Escolaridad
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Primaria</a></li>
                                <li><a class="dropdown-item" href="#">Secundaria</a></li>
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
                    <form class="d-flex" role="BUSQUEDA">
                        <input class="form-control me-2" type="search" placeholder="Búsqueda" aria-label="Search">
                        <button class="btn btn-primary" type="submit">BUSCAR</button>
                    </form>

                </div>
            </div>
        </nav>

        <br><br><br>

        @yield('contenido')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>





@section('title', 'Lista de Prácticas')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Lista de Prácticas</h1>

        <style>
            /* Estilos para la tabla */
            .table {
                background-color: #f8f9fa; /* Color de fondo de la tabla */
                border-radius: 8px; /* Bordes redondeados para la tabla */
                overflow: hidden; /* Para mantener los bordes redondeados en las esquinas */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra alrededor de la tabla */
            }

            /* Estilo para las celdas de encabezado */
            .table thead th {
                background-color: #343a40; /* Color de fondo para los encabezados */
                color: #fff; /* Color del texto de los encabezados */
                text-align: center; /* Centrar texto en los encabezados */
                padding: 10px; /* Espaciado interno */
            }

            /* Estilo para las celdas de datos */
            .table tbody td {
                background-color: #fff; /* Color de fondo para las celdas de datos */
                color: #343a40; /* Color del texto */
                padding: 10px; /* Espaciado interno */
                text-align: center; /* Centrar texto en las celdas */
            }

            /* Alternar color de fondo para filas impares */
            .table tbody tr:nth-child(odd) {
                background-color: #e9ecef;
            }

            /* Estilo para los botones */
            .btn-warning {
                background-color: #ffc107;
                border-color: #ffc107;
                color: #343a40;
                border-radius: 20px; /* Botones redondeados */
            }

            .btn-danger {
                background-color: #dc3545;
                border-color: #dc3545;
                color: #fff;
                border-radius: 20px; /* Botones redondeados */
            }

            .btn-warning:hover, .btn-danger:hover {
                background-color: #343a40; /* Cambiar color al pasar el ratón */
                color: #fff; /* Color del texto al pasar el ratón */
            }

            /* Alinear el contenido de las celdas al centro */
            .table td, .table th {
                vertical-align: middle;
            }
        </style>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tipo de Proyecto</th>
                    <th>Grado</th>
                    <th>Apellidos y Nombres</th>
                    <th>Horas</th>
                    <th>Docente</th>
                    <th>Acciones</th> <!-- Agrega una columna para los botones de acción -->
                </tr>
            </thead>
            <tbody>
                @foreach ($practice as $item)
                    <tr>
                        <td>{{ $item->tipo_proyecto }}</td>
                        <td>{{ $item->grado }}</td>
                        <td>{{ $item->apellidos_nombres }}</td>
                        <td>{{ $item->horas }}</td>
                        <td>{{ $item->docente }}</td>
                        <td>
                            <!-- Botón para Editar -->
                            <a href="{{ route('practicas.edit', $item->id) }}" class="btn btn-warning btn-sm">Editar</a>

                            <!-- Botón para Eliminar -->
                            <form action="{{ route('practicas.destroy', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que quieres eliminar esta práctica?');">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

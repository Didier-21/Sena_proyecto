@extends('layouts.app')

@section('title', 'MISIÓN - Institución Educativa Agropecuaria')

@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurídica</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/css/juridica.css" rel="stylesheet">

</head>
<body>
    <div class="header">
        <h1> Componente Legal Institución Educativa San José</h1>
        <p>Comprometido con la educación de calidad y la normatividad vigente.</p>
    </div>

    <div class="container mt-5">
        <h2 class="text-center">Contratos Publicados</h2>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="image-preview">
                        <img src="images/mantenimiento.jpg" style="width: 100%; height: 200px;" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Contrato de Mantenimiento</h5>
                        <p class="card-text">Valor del contrato: $5,000</p>
                        <p class="card-text">Fecha del contrato: 01/02/2024</p>
                        <p class="card-text">Detalles: Mantenimiento de instalaciones.</p>
                        <a href="pdf/contrato1.pdf" download="contrato1.pdf" class="btn btn-primary">Descargar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="image-preview">
                        <img src="images/alimentacion.jpg" style="width: 100%; height: 200px;" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Contrato de Alimentación</h5>
                        <p class="card-text">Valor del contrato: $12,000</p>
                        <p class="card-text">Fecha del contrato: 15/03/2024</p>
                        <p class="card-text">Detalles: Servicio de alimentación.</p>
                        <a href="pdf/contrato2.pdf" download="pdf/contrato2.pdf" class="btn btn-primary">Descargar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="image-preview">
                        <img src="images/transporte.jpg" style="width: 100%; height: 200px;" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Contrato de Transporte</h5>
                        <p class="card-text">Valor del contrato: $8,000</p>
                        <p class="card-text">Fecha del contrato: 20/04/2024</p>
                        <p class="card-text">Detalles: Transporte escolar.</p>
                        <a href="pdf/contrato3.pdf" download="contrato3.pdf" class="btn btn-primary">Descargar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#proximosContratosModal">
                Ver Próximos Contratos o Servicios
            </button>

        </div>
    </div>

    <!-- Modal proximo contratos -->
    <div class="modal fade" id="proximosContratosModal" tabindex="-1" role="dialog" aria-labelledby="proximosContratosModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="proximosContratosModalLabel">Próximos Contratos o Servicios Requeridos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li><strong>Servicios de limpieza:</strong> Necesitamos contratar servicios de limpieza para el segundo semestre del año.
                            <br><strong>Precio:</strong> $3,000,000 COP
                            <br><strong>Duración:</strong> 6 meses
                            <br><strong>Requisitos mínimos:</strong> Empresa certificada en servicios de limpieza, experiencia mínima de 2 años.
                        </li>
                        <li><strong>Contratación de profesores:</strong> Se requiere la contratación de dos profesores para las nuevas asignaturas.
                            <br><strong>Precio:</strong> $4,500,000 COP por profesor
                            <br><strong>Duración:</strong> 1 año académico
                            <br><strong>Requisitos mínimos:</strong> Título universitario en el área correspondiente, experiencia mínima de 3 años en enseñanza.
                        </li>
                        <li><strong>Servicio de psicología:</strong> Contrato para atención psicológica destinada a estudiantes, a iniciar en junio.
                            <br><strong>Precio:</strong> $2,000,000 COP
                            <br><strong>Duración:</strong> 1 año
                            <br><strong>Requisitos mínimos:</strong> Licencia profesional en psicología, experiencia mínima de 2 años en atención a adolescentes.
                        </li>
                        <li><strong>Mejoras en infraestructura:</strong> Proyecto para ampliación de aulas y mejoras en instalaciones deportivas.
                            <br><strong>Precio:</strong> $15,000,000 COP
                            <br><strong>Duración:</strong> 8 meses
                            <br><strong>Requisitos mínimos:</strong> Empresa constructora certificada, experiencia mínima de 5 años en proyectos similares.
                        </li>
                    </ul>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center align-bottom mt-4">
        <p class="lead mb-0 text-center">
        <a href="javascript:history.back()" class="btn btn-primary btn-lg px-5 return-button">
            <i class="fas fa-arrow-left me-2"></i>Regresar
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection

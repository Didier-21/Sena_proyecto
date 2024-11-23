@extends('layouts.app')


@section('title', 'Proyecto - Institución Educativa San José')

@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos Productivos - I.E. San José</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style/css/primaria.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

</head>

<section class="hero-section text-center">
    <div class="container">
        <h1 class="text-center text-primary mb-4">
            <i class="fas fa-leaf me-2"></i>
            Proyectos Productivos
        </h1 nuestro equipo directivo en pro de la excelencia educativa.</p>
    </div>
</section>


    <div class="container my-4">
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="text-center text-primary mb-4">
                    <i class="fas fa-leaf me-2"></i>
                    Proyectos Productivos
                </h1>
            </div>
        </div>

        <!-- Tarjetas de Resumen -->
        <div class="row mb-4">
            <div class="col-md-3 mb-3">
                <div class="card stats-card">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2">Total Inversión</h6>
                        <h3 class="card-title">$28.500.000</h3>
                        <div class="mt-2">
                            <i class="fas fa-arrow-up"></i>
                            <small>15% vs mes anterior</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stats-card">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2">Total Utilidades</h6>
                        <h3 class="card-title">$44.700.000</h3>
                        <div class="mt-2">
                            <i class="fas fa-arrow-up"></i>
                            <small>22% vs mes anterior</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stats-card">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2">ROI Promedio</h6>
                        <h3 class="card-title">56.8%</h3>
                        <div class="mt-2">
                            <i class="fas fa-arrow-up"></i>
                            <small>8% vs mes anterior</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stats-card">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2">Proyectos Activos</h6>
                        <h3 class="card-title">4</h3>
                        <div class="mt-2">
                            <i class="fas fa-check"></i>
                            <small>Todos operativos</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráficos -->
        <div class="row mb-4">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Rendimiento por Proyecto</h5>
                        <div class="chart-container">
                            <canvas id="rendimientoChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Evolución Mensual</h5>
                        <div class="chart-container">
                            <canvas id="evolucionChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pestañas de Proyectos -->
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" id="projectTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#piscicultura">
                            <i class="fas fa-fish me-2"></i>Piscicultura
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#ganaderia">
                            <i class="fas fa-cow me-2"></i>Ganadería
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#porcicultura">
                            <i class="fas fa-piggy-bank me-2"></i>Porcicultura
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#avicultura">
                            <i class="fas fa-kiwi-bird me-2"></i>Avicultura
                        </a>
                    </li>
                </ul>

                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="piscicultura">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Descripción del Proyecto</h4>
                                <p class="text-muted">
                                    Cultivo de tilapia roja y cachama en estanques controlados.
                                    Sistema de producción sostenible con tecnología de recirculación.
                                </p>

                                <h5 class="mt-4">Proceso Productivo</h5>
                                <div class="process-step">Adecuación de estanques</div>
                                <div class="process-step">Siembra de alevinos</div>
                                <div class="process-step">Control de alimentación</div>
                                <div class="process-step">Monitoreo de calidad del agua</div>
                                <div class="process-step">Cosecha programada</div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h5 class="card-title">Información Financiera</h5>
                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <h6>Inversión Total</h6>
                                                <p class="h4 text-primary">$5.000.000</p>
                                            </div>
                                            <div class="col-6">
                                                <h6>Utilidad Mensual</h6>
                                                <p class="h4 text-success">$8.500.000</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <h6>ROI</h6>
                                                <p class="h4 text-info">70%</p>
                                            </div>
                                            <div class="col-6">
                                                <h6>Tiempo Retorno</h6>
                                                <p class="h4">4 meses</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content mt-3">
                        <div class="tab-pane fade show active" id="ganaderia">
                          <div class="row">
                            <div class="col-md-6">
                              <h4>Descripción del Proyecto</h4>
                              <p class="text-muted"> Este proyecto se enfoca en la cría de ganado bovino de alta calidad, optimizando el uso de recursos mediante prácticas sostenibles y responsables. La producción de leche y carne se llevará a cabo en un sistema integrado que prioriza el bienestar animal y la salud del ecosistema.</p>
                              <h5 class="mt-4">Proceso Productivo</h5>
                              <div class="process-step">Selección de razas adecuadas</div>
                              <div class="process-step">Implementación de prácticas de manejo sostenible</div>
                              <div class="process-step">Alimentación balanceada y nutrición</div>
                              <div class="process-step">Monitoreo de salud y bienestar animal</div>
                              <div class="process-step">Cosecha de productos (leche y carne)</div>
                            </div>
                            <div class="col-md-6">
                              <div class="card bg-light">
                                <div class="card-body">
                                  <h5 class="card-title">Información Financiera</h5>
                                  <div class="row mt-3">
                                    <div class="col-6">
                                      <h6>Inversión Total</h6>
                                      <p class="h4 text-primary">\$10.000.000</p>
                                    </div>
                                    <div class="col-6">
                                      <h6>Utilidad Mensual</h6>
                                      <p class="h4 text-success">\$12.000.000</p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-6">
                                      <h6>ROI</h6>
                                      <p class="h4 text-info">80%</p>
                                    </div>
                                    <div class="col-6">
                                      <h6>Tiempo Retorno</h6>
                                      <p class="h4">5 meses</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane fade" id="porcicultura">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Descripción del Proyecto</h4>
                                <p class="text-muted">
                                    Cría de cerdos en un sistema integrado con enfoque en bienestar animal y sostenibilidad. Proceso de producción eficiente para optimizar la calidad de la carne.
                                </p>

                                <h5 class="mt-4">Proceso Productivo</h5>
                                <div class="process-step">Selección de razas</div>
                                <div class="process-step">Construcción de instalaciones adecuadas</div>
                                <div class="process-step">Alimentación balanceada</div>
                                <div class="process-step">Manejo sanitario</div>
                                <div class="process-step">Cosecha y procesamiento de carne</div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h5 class="card-title">Información Financiera</h5>
                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <h6>Inversión Total</h6>
                                                <p class="h4 text-primary">\$7.000.000</p>
                                            </div>
                                            <div class="col-6">
                                                <h6>Utilidad Mensual</h6>
                                                <p class="h4 text-success">\$10.000.000</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <h6>ROI</h6>
                                                <p class="h4 text-info">60%</p>
                                            </div>
                                            <div class="col-6">
                                                <h6>Tiempo Retorno</h6>
                                                <p class="h4">5 meses</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="porcicultura">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Descripción del Proyecto</h4>
                                <p class="text-muted">
                                    Cría de cerdos en un sistema integrado con enfoque en bienestar animal y sostenibilidad. Proceso de producción eficiente para optimizar la calidad de la carne.
                                </p>

                                <h5 class="mt-4">Proceso Productivo</h5>
                                <div class="process-step">Selección de razas</div>
                                <div class="process-step">Construcción de instalaciones adecuadas</div>
                                <div class="process-step">Alimentación balanceada</div>
                                <div class="process-step">Manejo sanitario</div>
                                <div class="process-step">Cosecha y procesamiento de carne</div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h5 class="card-title">Información Financiera</h5>
                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <h6>Inversión Total</h6>
                                                <p class="h4 text-primary">\$7.000.000</p>
                                            </div>
                                            <div class="col-6">
                                                <h6>Utilidad Mensual</h6>
                                                <p class="h4 text-success">\$10.000.000</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <h6>ROI</h6>
                                                <p class="h4 text-info">60%</p>
                                            </div>
                                            <div class="col-6">
                                                <h6>Tiempo Retorno</h6>
                                                <p class="h4">5 meses</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="avicultura">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Descripción del Proyecto</h4>
                                <p class="text-muted">
                                    Producción de pollo en sistema de cama profunda, garantizando un manejo higiénico y sostenible para la obtención de carne de alta calidad.
                                </p>

                                <h5 class="mt-4">Proceso Productivo</h5>
                                <div class="process-step">Construcción de galpones</div>
                                <div class="process-step">Recepción y manejo de pollitos</div>
                                <div class="process-step">Alimentación y control sanitario</div>
                                <div class="process-step">Monitoreo de crecimiento</div>
                                <div class="process-step">Cosecha y distribución</div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h5 class="card-title">Información Financiera</h5>
                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <h6>Inversión Total</h6>
                                                <p class="h4 text-primary">\$4.000.000</p>
                                            </div>
                                            <div class="col-6">
                                                <h6>Utilidad Mensual</h6>
                                                <p class="h4 text-success">\$7.200.000</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <h6>ROI</h6>
                                                <p class="h4 text-info">80%</p>
                                            </div>
                                            <div class="col-6">
                                                <h6>Tiempo Retorno</h6>
                                                <p class="h4">3 meses</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Configuración de los gráficos
        document.addEventListener('DOMContentLoaded', function() {
            // Gráfico de Rendimiento (principal para comparación)
            const rendimientoData = [70, 50, 57, 60]; // Datos de rendimiento de cada sector
            const rendimientoCtx = document.getElementById('rendimientoChart').getContext('2d');
            new Chart(rendimientoCtx, {
                type: 'bar',
                data: {
                    labels: ['Piscicultura', 'Ganadería', 'Porcicultura', 'Avicultura'],
                    datasets: [{
                        label: 'Rendimiento (%)',
                        data: rendimientoData,
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.7)',
                            'rgba(75, 192, 192, 0.7)',
                            'rgba(255, 99, 132, 0.7)',
                            'rgba(255, 206, 86, 0.7)'
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });

            // Gráfico de evolución para el proyecto de piscicultura
            const evolucionCtx = document.getElementById('evolucionChart').getContext('2d');
            new Chart(evolucionCtx, {
                type: 'line',
                data: {
                    labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Utilidad Mensual',
                        data: [4.2, 4.5, 4.8, 5.2, 5.5, 5.8], // Utilidad mensual para piscicultura
                        borderColor: 'rgba(54, 162, 235, 1)',
                        tension: 0.4,
                        fill: true,
                        backgroundColor: 'rgba(54, 162, 235, 0.1)'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });

            // Gráficos de rendimiento (porcicultura)
            const rendimientoCtx2 = document.getElementById('rendimientoChart2').getContext('2d');
            new Chart(rendimientoCtx2, {
                type: 'bar',
                data: {
                    labels: ['Porcicultura'],
                    datasets: [{
                        label: 'Rendimiento (%)',
                        data: [60], // Rendimiento de porcicultura
                        backgroundColor: 'rgba(255, 99, 132, 0.7)'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });

            // Gráfico de evolución para el proyecto de porcicultura
            const evolucionCtx2 = document.getElementById('evolucionChart2').getContext('2d');
            new Chart(evolucionCtx2, {
                type: 'line',
                data: {
                    labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Utilidad Mensual',
                        data: [5.0, 5.3, 5.5, 6.0, 6.2, 6.5], // Utilidad mensual para porcicultura
                        borderColor: 'rgba(255, 99, 132, 1)',
                        tension: 0.4,
                        fill: true,
                        backgroundColor: 'rgba(255, 99, 132, 0.1)'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });

            // Gráficos para avicultura
            const rendimientoCtx3 = document.getElementById('rendimientoChart3').getContext('2d');
            new Chart(rendimientoCtx3, {
                type: 'bar',
                data: {
                    labels: ['Avicultura'],
                    datasets: [{
                        label: 'Rendimiento (%)',
                        data: [80], // Rendimiento de avicultura
                        backgroundColor: 'rgba(255, 206, 86, 0.7)'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });

            // Gráfico de evolución para el proyecto de avicultura
            const evolucionCtx3 = document.getElementById('evolucionChart3').getContext('2d');
            new Chart(evolucionCtx3, {
                type: 'line',
                data: {
                    labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Utilidad Mensual',
                        data: [6.5, 6.8, 7.0, 7.5, 7.8, 8.0], // Utilidad mensual para avicultura
                        borderColor: 'rgba(255, 206, 86, 1)',
                        tension: 0.4,
                        fill: true,
                        backgroundColor: 'rgba(255, 206, 86, 0.1)'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
@endsection

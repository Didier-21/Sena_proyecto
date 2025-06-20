@extends('layouts.app')

@section('title', 'PERFIL DEL DOCENTE - Institución Educativa San José')

@section('contenido')
<link rel="stylesheet" href="style/css/mision.css">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="mision-card card shadow-lg border-0 mb-5">
                    <div class="card-body p-5">
                        <h1 class="mision-title text-center mb-4">
                            Perfil del Docente Institución Educativa San José.
                        </h1>
                        <div class="text-center mb-4">
                            <hr class="divider">
                        </div>

                         <div class="mision-content tex-align" style="text-align: justify;">
                            <p class="lead mb-0">
                               Conocer el contexto educativo y la Pedagogía conceptual para aplicar en su currículo. Comprometido con los derechos y deberes que tiene como persona profesional y paralelamente con las obligaciones adquiridas desde su quehacer educativo.
                                Definir su proyecto de formación permanente, centrado en la vivencia de experiencias significativas que imparten conocimiento y gestan estrategias para la vida personal y social de los estudiantes en formación.
                                Debe poseer autonomía para tomar decisiones que respondan con efectividad a su compromiso social y humano.
                                Poseer habilidades de comunicación y relación interpersonales.

                            </p>
                        </div>

                        <div class="text-center mt-4">
                            <p class="lead mb-0 text-center">
                                <a href="javascript:history.back()" class="btn btn-primary btn-lg px-5 return-button">
                                    <i class="fas fa-arrow-left me-2"></i>Regresar
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

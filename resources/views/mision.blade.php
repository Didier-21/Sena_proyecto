<link rel="stylesheet" href="style/css/mision.css">
@extends('layouts.app')

@section('title', 'MISIÓN - Institución Educativa Agropecuaria')

@section('contenido')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="mision-card card shadow-lg border-0 mb-5">
                    <div class="card-body p-5">
                        <h1 class="mision-title text-center mb-4">
                            Misión de la Institución Educativa Agropecuaria San José
                        </h1>
                        <div class="text-center mb-4">
                            <hr class="divider">
                        </div>

                        <div class="mision-content">
                            <p class="lead mb-0">
                                LA MISIÓN DE LA INSTITUCIÓN EDUCATIVA AGROPECUARIA SAN JOSÉ ES FORMAR PROFESIONALES ÍNTEGROS
                                CON UN ENFOQUE EN LA SOSTENIBILIDAD, PROMOVIENDO EL DESARROLLO AGROPECUARIO Y LA
                                CONSERVACIÓN DEL MEDIO AMBIENTE MEDIANTE UNA EDUCACIÓN DE CALIDAD QUE FORTALEZCA LAS
                                COMPETENCIAS TÉCNICAS Y SOCIO-EMOCIONALES DE NUESTROS ESTUDIANTES.
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

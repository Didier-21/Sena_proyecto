
@extends('layouts.app')

@section('title', 'Dashboard - Institución Educativa Agropecuaria')

@section('contenido')
<link rel="stylesheet" href="style/css/vision.css">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="vision-card card shadow-lg border-0 mb-5">
                    <div class="card-body p-5">
                        <h1 class="mision-title text-center mb-4">
                            Visión de la Institución Educativa San José
                        </h1>
                        <div class="text-center mb-4">
                            <hr class="divider">
                        </div>

                        <div class="vision-content">
                            <p class="lead mb-0">
                                PROPORCIONAR UNA EDUCACIÓN INTEGRAL BASADA EN VALORES, CON UN ENFOQUE SOSTENIBLE Y UNA FORMACIÓN TÉCNICA ESPECIALIZADA EN EL SECTOR AGROPECUARIO, QUE FOMENTE EL CRECIMIENTO PERSONAL Y PROFESIONAL DE LOS ESTUDIANTES, IMPULSANDO SU COMPROMISO CON LA CONSERVACIÓN DEL MEDIO AMBIENTE Y EL DESARROLLO DE LA COMUNIDAD. BUSCAMOS FORMAR LÍDERES CAPACES DE CONTRIBUIR ACTIVAMENTE AL PROGRESO AGROPECUARIO, ADAPTÁNDOSE A LOS CAMBIOS SOCIALES Y TECNOLÓGICOS, Y QUE SE DESTAQUEN POR SUS LOGROS
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

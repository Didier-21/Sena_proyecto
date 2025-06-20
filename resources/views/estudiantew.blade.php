@extends('layouts.app')

@section('title', 'PERFIL DEL ESTUIDANTE - Institución Educativa San José')

@section('contenido')
<link rel="stylesheet" href="style/css/mision.css">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="mision-card card shadow-lg border-0 mb-5">
                    <div class="card-body p-5">
                        <h1 class="mision-title text-center mb-4">
                            Perfil del Estudiate Institución Educativa San José.
                        </h1>
                        <div class="text-center mb-4">
                            <hr class="divider">
                        </div>

                       <div class="mision-content tex-align" style="text-align: justify;">
                            <p class="lead mb-0">
                               Se pretende que el estudiante de la Institución Educativa San José sea una persona formada en valores éticos y morales, líder y crítico constructivo, que valore el entorno, que reconozca la importancia del agro y lo pecuario; respetuosa y cumplidor de sus deberes como ciudadano, capaz de contribuir al desarrollo de su entorno y desenvolverse laboralmente con pertinencia en el campo académico y humanístico, siempre teniendo presente su cultura y sus orígenes.





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


@extends('layouts.app')

@section('title', 'MISIÓN - Institución Educativa Agropecuaria')

@section('contenido')
<link rel="stylesheet" href="style/css/mision.css">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="mision-card card shadow-lg border-0 mb-5">
                    <div class="card-body p-5">
                        <h1 class="mision-title text-center mb-4">
                            Misión de la Institución Educativa San José
                        </h1>
                        <div class="text-center mb-4">
                            <hr class="divider">
                        </div>

                        <div class="mision-content tex-align" style="text-align: justify;">
                            <p class="lead mb-0">
                               En La institución Educativa San José, de carácter público, tiene la misión de formar integralmente, estudiantes bachilleres técnicos agropecuarios desde los niveles de preescolar, básica primaria, básica secundaria y media técnica; además la formación de adultos en bachillerato académico del de La Victoria y vecinos, capaces de resolver ética y responsablemente los desafíos del mejoramiento y progreso del campo  en los aspectos económicos, sociales y culturales; con los criterios de inclusión, respeto por la diversidad, el medio ambiente y la sana convivencia.


                            </p>
                        </div>

                        <div class="text-center mt-4">
    <p class="lead mb-0 text-center">
        <a href="javascript:history.back()" class="btn btn-primary return-button" style="padding: 0.25rem 0.75rem; font-size: 1rem; font-weight: normal;">
            <i class="fas fa-arrow-left me-2"></i>Regresar
        </a>
    </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

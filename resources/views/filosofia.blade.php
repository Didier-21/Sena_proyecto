@extends('layouts.app')

@section('title', 'FILOSOFÍA INSTITUCIONAL - Institución Educativa San José')

@section('contenido')
<link rel="stylesheet" href="style/css/mision.css">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="mision-card card shadow-lg border-0 mb-5">
                    <div class="card-body p-5">
                        <h1 class="mision-title text-center mb-4">
                            Filosofía Institucional.
                        </h1>
                        <div class="text-center mb-4">
                            <hr class="divider">
                        </div>

                       <div class="mision-content" style="text-align: justify; white-space: pre-line;">
                         <p class="lead mb-0">
                            La Institución Educativa San José se fundamenta sobre el modelo de la Pedagogía conceptual y participa del paradigma educativo de formar para la vida y desarrollar competencias afectivas. En sus principios filosóficos tiene presente la Constitución Política de 1991. (Art. 1) y la Ley General de la Educación de 1994, en sus planteamientos sobre:
El respeto a los derechos humanos.
-	La paz.
-	La democracia.
-	La práctica del trabajo
-	La ocupación del tiempo libre para el mejoramiento cultural y científico, y la protección del medio ambiente. (Art. 67)
La Institución tiene unos objetivos definidos como formar en contexto y contribuir al desarrollo de la región, que le permiten identificar las necesidades, priorizándolas y generando las expectativas de acuerdo al perfil institucional a saber:
Prestar un servicio de calidad en todos los niveles, grados y educación para jóvenes extra edad y adultos ofrecidos.
Formar a mediano plazo, ciudadanos respetuosos de la vida, amantes de la paz, justos, solidarios, tolerantes, con capacidad de crítica y analítica, comprometidos en el desarrollo institucional, local y a nivel regional y otros
Los medios que garantizan el conocimiento del horizonte institucional existen y serán utilizados permanentemente tales como medios visuales, material de constante observación, escritos; para mantener actualizada a la comunidad educativa sobre la visión y misión, logrando con ello despertar el sentido de pertenencia al interior de la comunidad educativa.



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

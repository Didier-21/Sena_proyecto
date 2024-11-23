@extends('layouts.app')

@section('titulo', 'Listado Proyectos CDR')

@section('contenido')

<h3 class="text-center">LISTADO DE PROYECTOS PRODUCTIVOS
    <br>
    CONCENTRACION DE DESARROLLO RURAL SAN JOSE
</h3>
<br>
<div class="row">
    @foreach ($proyectoa as $proyectob)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <style>
                    .text-center {
      text-align: center; /* Centrar el texto */
      color: rgba(112, 6, 27, 0.705); ; /* Color del texto */
      font-size: 32px; /* Tamaño de fuente */
      margin-bottom: 20px; /* Espaciado inferior */

    }


                    .card-body {
      background-color: #899a8c; /* Fondo gris claro */
      text-align: center; /* Centrar el contenido */
      padding: 20px; /* Espaciado interior */
      border-radius: 10px; /* Bordes redondeados */
    }

    .card-body .card-title {
      color: #007bff; /* Color del título */
      font-size: 24px; /* Tamaño de fuente del título */
      margin-bottom: 10px; /* Espaciado inferior del título */
    }

    .card-body .card-text {
      color: #184c79; /* Color del texto */
      font-size: 18px; /* Tamaño de fuente del texto */
      margin-bottom: 15px; /* Espaciado inferior del texto */
    }

    .card-body .btn {
      background-color: #346ec1; /* Color de fondo del botón */
      border: none; /* Sin borde */
      padding: 15px 20px; /* Espaciado interno del botón */
      font-size: 20px; /* Tamaño de fuente del botón */
      border-radius: 5px; /* Bordes redondeados del botón */
      color: rgb(18, 35, 166); /* Color del texto del botón */
      text-decoration: none; /* Sin subrayado */
      display: inline-block; /* Para aplicar padding y otros estilos correctamente */
      margin-top: 10px; /* Espaciado superior */
    }

    .card-body .btn:hover {
      background-color: #b31846; /* Color de fondo del botón al pasar el mouse */
    }
  </style>


                <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($proyectob->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $proyectob->nombre }}</h5>
                  <p class="card-text">{{ $proyectob->tipo }}</p>
                  <p class="card-text">{{ $proyectob->valor }}</p>
                  <a href="/proyectos/{{$proyectob->id}}" class="btn btn-success">detalles del proyecto</a>
                </div>
            </div>
        </div>
    @endforeach
</div>




@endsection

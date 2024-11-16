@extends('layouts.app')

@section('titulo', 'Editar proyecto productivo')

@section('contenido')

<h3 class="text-center">MODULO DE EDITAR
    <br>
    PROYECTO PRODUCTIVO
</h3>
{{--se utiliza el atributo enctype para poder subir archivos--}}
<form action="/proyectos/{{$proyectoa->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="NOMBRE" class="form-label">MODIFIQUE EL NOMBRE DEL PROYECTO</label>
        <input type="varchar" value="{{$proyectoa->nombre}}" class="form-control" id="nombre" name="nombre" class="form-control">
      </div>

      <div class="mb-3">
          <label for="TIPO PROYECTO" class="form-label">MODIFIQUE EL TIPO DE PROYECTO</label>
          <input type="varchar" value="{{$proyectoa->tipo}}" class="form-control" id="tipo" name="tipo" class="form-control">
        </div>

      <div class="mb-3">
          <label for="CANTIDAD" class="form-label">MODIFIQUE LA CANTIDAD DE ANIMALES</label>
          <input type="double" value="{{$proyectoa->cantidad}}" class="form-control" id="cantidad" name="cantidad" class="form-control">
      </div>

      <div class="mb-3">
          <label for="VALOR" class="form-label">AGREGUE UN NUEVO VALOR</label>
          <input type="double" value="{{$proyectoa->valor}}" class="form-control" id="valor" name="valor"class="form-control">
      </div>

      <div class="mb-3">
          <label for="imagen">AGREGUE UNA FACTURA O SOPORTE NUEVA</label>
      <br>
          <input type="file" id="imagen" name="imagen">

      </div>
      <br>
      <button type="submit" class="btn btn-success">ACTUALIZAR</button>
  </form>

  <style>
    body {
        font-family: 'Arial', sans-serif; /* Fuente general */
        background-color: #93dcec; /* Color de fondo */
        margin: 0;
        padding: 20px;
    }

    .container {
        max-width: 1000px; /* Ancho máximo del contenedor */
        margin: 0 auto; /* Centrar el contenedor */
        padding: 20px;
        background-color: #93dcec; /* Color de fondo del contenedor */
        border-radius: 20px; /* Bordes redondeados */
        box-shadow: 0 4px 8px rgba(43, 20, 126, 0.1); /* Sombra */
    }

    h3.text-center {
        text-align: center; /* Centrar el texto */
        color: #18ea09; /* Color del texto */
        font-size: 30px; /* Tamaño de fuente */
        margin-bottom: 20px; /* Espaciado inferior */
    }

    .form-label {
        font-weight: bold; /* Negrita para las etiquetas */
        color: #555; /* Color del texto de las etiquetas */
    }

    .form-control {
        width: 100%; /* Ancho completo */
        padding: 10px; /* Espaciado interno */
        margin-bottom: 15px; /* Espaciado inferior */
        border: 1px solid #ccc; /* Borde */
        border-radius: 5px; /* Bordes redondeados */
        font-size: 16px; /* Tamaño de fuente */
    }

    .btn {
        display: inline-block; /* Mostrar inline con otros elementos */
        padding: 10px 20px; /* Espaciado interno */
        border: none; /* Sin borde */
        border-radius: 5px; /* Bordes redondeados */
        font-size: 16px; /* Tamaño de fuente */
        cursor: pointer; /* Cambiar cursor al pasar sobre el botón */
        transition: background-color 0.3s ease; /* Transición suave para el color de fondo */
    }

    .btn-success {
        background-color: #28a745; /* Color de fondo del botón */
        color: white; /* Color del texto del botón */
    }

    .btn-success:hover {
        background-color: #218838; /* Color de fondo del botón al pasar el mouse */
    }
</style>

@endsection

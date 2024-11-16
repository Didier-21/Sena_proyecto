@extends('layouts.app')

@section('titulo', 'Crear Practica ')

@section('contenido')

<br>
<div class="d-flex justify-content-center">
    <h3>CREAR PRACTICA EN PROYECTO AGROPECUARIO</h3>
</div>

    <form action="/practicas" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="TIPO PROYECTO" class="form-label">TIPO DE PROYECTO</label>
          <input type="varchar" class="form-control" id="tipo_proyecto" name="tipo_proyecto">
        </div>

        <div class="mb-3">
            <label for="GRADO" class="form-label">GRADO ESCOLAR</label>
            <input type="varchar" class="form-control" id="grado" name="grado">
          </div>

        <div class="mb-3">
            <label for="APELLIDOS Y NOMBRES" class="form-label">APELLIDOS Y NOMBRES</label>
            <input type="varchar" class="form-control" id="apellidos_nombres" name="apellidos_nombres">
        </div>

        <div class="mb-3">
            <label for="HORAS" class="form-label">HORAS</label>
            <input type="double" class="form-control" id="horas" name="horas">
        </div>

        <div class="mb-3">
            <label for="DOCENTE" class="form-label">DOCENTE ORIENTADOR</label>
            <input type="varchar" class="form-control" id="docente" name="docente">
        </div>


        </div>
        <br>


        <button style="text-align: center;" type="submit" class="btn btn-success">GUARDAR</button>

    </form>
<link rel="stylesheet" href="{{asset("css/app.css")}}">




<style>
    body {
        background-color: #93dcec;
    }

    .form-container {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-top: 30px;
        animation: fadeIn 1s ease-in-out;
    }

    .form-label {
        color: #343a40;
        font-weight: bold;
    }

    .form-control {
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #28a745;
        box-shadow: 0 0 8px rgba(40, 167, 69, 0.4);
    }

    .btn-success {
        background-color: #28a745;
        tex-aling: center;
        border-color: #28a745;
        transition: background-color 0.3s ease;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity


@endsection

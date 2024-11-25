@extends('layouts.app')



@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Gestiones Institucionales</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 30px;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
        }
        .card img {
            max-width: 100%;
            height: auto;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
        .btn-info:hover {
            background-color: #138496;
            border-color: #117a8b;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Listado de Gestiones Institucionales</h4>
            </div>
            <div class="card-body">
                <a href="{{ route('gestion.create') }}" class="btn btn-primary mb-3">Crear Nueva Gestión</a>
                <div class="row">
                    @foreach ($gestione as $gestionea)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $gestionea->tipo }}</h5>
                                    <p class="card-text">{{ $gestionea->descripcion }}</p>
                                    @if ($gestionea->imagen)
                                        <img src="{{ Storage::url($gestionea->imagen) }}" alt="Imagen de {{ $gestionea->tipo }}">
                                    @else
                                        <p>No disponible</p>
                                    @endif
                                    <a href="{{ route('gestion.show', $gestionea->id) }}" class="btn btn-info btn-sm mt-2">Detalles</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
 @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

</body>
</html>
@endsection

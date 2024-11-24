<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Proyecto Productivo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #f8f9fa;
        }
        .form-title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.75rem;
            color: #343a40;
        }
        .btn-custom {
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #218838;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h3 class="form-title">INGRESAR EL PROYECTO PRODUCTIVO</h3>
    <form action="/proyectos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">NOMBRE</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">TIPO DE PROYECTO</label>
            <input type="text" class="form-control" id="tipo" name="tipo" required>
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">CANTIDAD</label>
            <input type="number" step="0.01" class="form-control" id="cantidad" name="cantidad" required>
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">VALOR</label>
            <input type="number" step="0.01" class="form-control" id="valor" name="valor" required>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">FACTURA O SOPORTE</label>
            <input type="file" class="form-control" id="imagen" name="imagen">
        </div>
        <button type="submit" class="btn btn-success btn-custom">Guardar</button>
    </form>
</div>

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

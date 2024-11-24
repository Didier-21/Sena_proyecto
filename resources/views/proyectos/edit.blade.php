<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo de Editar Proyecto Productivo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Fondo suave */
            color: #333; /* Color de texto */
        }
        .form-container {
            background-color: #fff; /* Fondo blanco para el cuadro */
            border-radius: 15px; /* Bordes redondeados */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Sombra suave */
            padding: 30px; /* Espaciado interno */
            max-width: 600px; /* Ancho máximo del cuadro */
            margin: 50px auto; /* Centrar el cuadro en el medio de la página */
        }
        h3 {
            margin-bottom: 20px; /* Espaciado inferior en el encabezado */
        }
        .form-label {
            font-weight: bold; /* Resaltar las etiquetas */
        }
        button {
            margin-top: 20px; /* Espaciado superior del botón */
        }
    </style>
</head>
<body>

<div class="form-container">
    <h3 class="text-center">MÓDULO DE EDITAR<br>PROYECTO PRODUCTIVO</h3>
    {{-- Se utiliza el atributo enctype para poder subir archivos --}}
    <form action="/proyectos/{{$proyectoa->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="nombre" class="form-label">MODIFIQUE EL NOMBRE DEL PROYECTO</label>
            <input type="text" value="{{$proyectoa->nombre}}" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="mb-3">
            <label for="tipo" class="form-label">MODIFIQUE EL TIPO DE PROYECTO</label>
            <input type="text" value="{{$proyectoa->tipo}}" class="form-control" id="tipo" name="tipo" required>
        </div>

        <div class="mb-3">
            <label for="cantidad" class="form-label">MODIFIQUE LA CANTIDAD DE ANIMALES</label>
            <input type="number" value="{{$proyectoa->cantidad}}" class="form-control" id="cantidad" name="cantidad" step="0.01" required>
        </div>

        <div class="mb-3">
            <label for="valor" class="form-label">AGREGUE UN NUEVO VALOR</label>
            <input type="number" value="{{$proyectoa->valor}}" class="form-control" id="valor" name="valor" step="0.01" required>
        </div>

        <div class="mb-3">
            <label for="imagen" class="form-label">AGREGUE UNA FACTURA O SOPORTE NUEVO</label>
            <input type="file" id="imagen" name="imagen" class="form-control-file" required>
        </div>

        <button type="submit" class="btn btn-success btn-lg btn-block">ACTUALIZAR</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

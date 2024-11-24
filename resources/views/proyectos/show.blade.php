<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .button-group .btn {
            margin: 5px; /* Espaciado entre botones */
        }
        .card {
            transition: transform 0.2s; /* Transición al hacer hover */
            box-shadow: 0 4px 15px rgba(0,0,0,0.2); /* Sombra del cuadro */
            border-radius: 10px; /* Bordes redondeados */
        }
        .card:hover {
            transform: scale(1.02); /* Efecto al pasar el mouse */
        }
        /* Estilos adicionales para la imagen */
        .card-img-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
    </style>
</head>
<body>

<div class="card text-center" style="width: 600px; margin: 20px auto;">
    <img style="height: 400px; width: 100%; object-fit: cover;" src="{{ Storage::url($proyectoa->imagen) }}" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">Tipo: {{$proyectoa->tipo}}</p>
        <p class="card-text">Cantidad: {{$proyectoa->cantidad}}</p>
        <div class="button-group">
            <a href="/proyectos/{{$proyectoa->id}}/edit" class="btn btn-warning btn-lg">Editar proyecto</a>
            <form action="{{ route('proyectos.destroy', $proyectoa->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este proyecto?');" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-lg">Eliminar Proyecto</button>
            </form>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('proyectos.index') }}" class="btn btn-secondary btn-lg">Volver a la lista de proyectos</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



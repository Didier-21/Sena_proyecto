<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Institucional</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            display: flex;
            justify-content: center;
            height: 100vh; /* Ajusta la altura para centrar verticalmente */
        }

        .card {
            width: 100%; /* Ancho completo */
            max-width: 600px; /* Máximo ancho */
            border-radius: 15px; /* Bordes redondeados */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Sombra */
            transition: transform 0.2s; /* Transición suave */
        }

        .card:hover {
            transform: scale(1.02); /* Efecto de escala al pasar el ratón */
        }

        .card-header {
            background-color: #0ead0e; /* Color de fondo */
            color: white; /* Color del texto */
        }

        .form-control,
        .form-control-file {
            border-radius: 10px; /* Bordes redondeados en los campos */
        }

        button {
            border-radius: 10px; /* Bordes redondeados en el botón */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Crear Gestión Institucional</h4>
            </div>
            <div class="card-body">
                <form action="/gestion" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select id="tipo" name="tipo" class="form-control" required>
                            <option value="" disabled selected>Seleccione un Tipo de Gestión</option>
                            <option value="GA.ADMIN">Gestión Administrativa</option>
                            <option value="GA.ACADE">Gestión Académica</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="clase">Clase</label>
                        <select id="clase" name="clase" class="form-control" required>
                            <option value="" disabled selected>Seleccione una Opción</option>
                            <option value="Clase1">Estratégico</option>
                            <option value="Clase2">Docencia</option>
                            <option value="Clase3">Investigación</option>
                            <option value="Clase4">Apoyo Académico</option>
                            <option value="Clase5">Apoyo Integral</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea id="descripcion" name="descripcion" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="date" id="fecha" name="fecha" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imagen</label>
                        <input type="file" id="imagen" name="imagen" class="form-control-file">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

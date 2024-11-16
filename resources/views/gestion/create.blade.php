<!-- resources/views/create.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Gestión Institucional</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
                            <option value="Tipo1">Gestión Administrativa</option>
                            <option value="Tipo2">Gestión Academica</option>s

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="clase">Clase</label>
                        <select id="clase" name="clase" class="form-control" required>
                            <option value="" disabled selected>Seleccione una Opción</option>
                            <option value="Clase1">Estrategico</option>
                            <option value="Clase2">Docencia</option>
                            <option value="Clase3">Investigación</option>
                            <option value="Clase3">Apoyo Academico</option>
                            <option value="Clase3">Apoyo Integral</option>


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

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

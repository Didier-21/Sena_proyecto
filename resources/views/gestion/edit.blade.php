
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Gestión Institucional</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Editar Gestión Institucional</h4>
            </div>
            <div class="card-body">
                <!-- Formulario de edición -->
                <form action="{{ route('gestion.update', $gestione->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Utiliza PUT para la actualización -->
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select id="tipo" name="tipo" class="form-control" required>
                            <option value="" disabled>Seleccione un Tipo de Gestión</option>
                            <option value="Tipo1" {{ $gestione->tipo == 'Tipo1' ? 'selected' : '' }}>Gestión Administrativa</option>
                            <option value="Tipo2" {{ $gestione->tipo == 'Tipo2' ? 'selected' : '' }}>Gestión Académica</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="clase">Clase</label>
                        <select id="clase" name="clase" class="form-control" required>
                            <option value="" disabled>Seleccione una Opción</option>
                            <option value="Clase1" {{ $gestione->clase == 'Clase1' ? 'selected' : '' }}>Estrategico</option>
                            <option value="Clase2" {{ $gestione->clase == 'Clase2' ? 'selected' : '' }}>Docencia</option>
                            <option value="Clase3" {{ $gestione->clase == 'Clase3' ? 'selected' : '' }}>Investigación</option>
                            <option value="Clase4" {{ $gestione->clase == 'Clase4' ? 'selected' : '' }}>Apoyo Académico</option>
                            <option value="Clase5" {{ $gestione->clase == 'Clase5' ? 'selected' : '' }}>Apoyo Integral</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $gestione->nombre }}" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea id="descripcion" name="descripcion" class="form-control" rows="3" required>{{ $gestione->descripcion }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="date" id="fecha" name="fecha" class="form-control" value="{{ $gestione->fecha }}" required>
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imagen</label>
                        <input type="file" id="imagen" name="imagen" class="form-control-file">
                        @if ($gestione->imagen)
                            <img src="{{ Storage::url($gestione->imagen) }}" alt="Imagen actual" class="img-fluid mt-2" style="max-height: 150px;">
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('gestion.index') }}" class="btn btn-secondary">Cancelar</a>
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



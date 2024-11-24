



<<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa; /* Color de fondo suave */
        margin: 0;
        padding: 0;
        color: BLACK; /* Color del texto principal */
        display: flex; /* Usamos Flexbox para centrar el contenido */
        justify-content: center; /* Centra horizontalmente */
        align-items: center; /* Centra verticalmente */
        height: 100vh; /* Altura completa de la ventana */
    }

    .container {
        max-width:400px; /* Amplitud máxima del contenedor */
        margin: auto;
        padding: 20px;
        background-color: #ffffff; /* Fondo blanco para el contenedor */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Sombra más pronunciada */
        border-radius: 10px; /* Bordes redondeados */
        transition: transform 0.2s; /* Transición suave para el efecto de hover */
    }

    .container:hover {
        transform: scale(1.02); /* Efecto de aumento al pasar el ratón */
    }

    h1 {
        font-size: 24px; /* Tamaño de fuente del título */
        margin-bottom: 20px; /* Espaciado debajo del título */
        color: green; /* Color verde para el título */
        text-align: center; /* Centra el título */
    }

    .form-label {
        font-weight: bold; /* Etiquetas en negrita */
        margin-bottom: 5px; /* Espacio debajo de las etiquetas */
        display: block; /* Asegura que ocupen el ancho completo */
    }

    .form-control {
        border: 1px solid #ced4da; /* Color de borde sutil */
        border-radius: 4px; /* Bordes redondeados */
        padding: 10px; /* Relleno dentro de los campos */
        width: 100%; /* Campos ocupan el ancho completo */
        box-sizing: border-box; /* Para incluir el padding en el ancho total */
        margin-bottom: 15px; /* Espacio debajo de los campos */
    }

    .btn {
        display: inline-block; /* Hace que los botones se alineen adecuadamente */
        padding: 10px 20px; /* Relleno de los botones */
        border-radius: 5px; /* Bordes redondeados */
        transition: background-color 0.3s, transform 0.2s; /* Transiciones suaves */
        text-decoration: none; /* Sin subrayado en enlaces */
    }

    .btn-success {
        background-color: #28a745; /* Color de fondo verde */
        border: none; /* Sin borde */
        color: white; /* Texto blanco */
    }

    .btn-secondary {
        background-color: #6c757d; /* Color de fondo gris */
        border: none; /* Sin borde */
        color: white; /* Texto blanco */
    }

    .btn-success:hover {
        background-color: #218838; /* Color verde oscuro al pasar el ratón */
        transform: scale(1.05); /* Efecto de aumento en hover */
    }

    .btn-secondary:hover {
        background-color: #5a6268; /* Color gris oscuro al pasar el ratón */
        transform: scale(1.05); /* Efecto de aumento en hover */
    }
</style>


    <div class="container mt-5">


        <h1 style="text-align: center;">Editar Práctica Agropecuaria</h1>


        <form action="{{ route('practicas.update', $practice->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Especifica que es una actualización -->

            <div class="mb-3">
                <label for="tipo_proyecto" class="form-label">Tipo de Proyecto</label>
                <input type="text" class="form-control" id="tipo_proyecto" name="tipo_proyecto" value="{{ $practice->tipo_proyecto }}" required>
            </div>

            <div class="mb-3">
                <label for="grado" class="form-label">Grado</label>
                <input type="text" class="form-control" id="grado" name="grado" value="{{ $practice->grado }}" required>
            </div>

            <div class="mb-3">
                <label for="apellidos_nombres" class="form-label">Apellidos y Nombres</label>
                <input type="text" class="form-control" id="apellidos_nombres" name="apellidos_nombres" value="{{ $practice->apellidos_nombres }}" required>
            </div>

            <div class="mb-3">
                <label for="horas" class="form-label">Horas</label>
                <input type="number" class="form-control" id="horas" name="horas" value="{{ $practice->horas }}" required>
            </div>

            <div class="mb-3">
                <label for="docente" class="form-label">Docente</label>
                <input type="text" class="form-control" id="docente" name="docente" value="{{ $practice->docente }}" required>
            </div>

            <button type="submit" class="btn btn-success">Actualizar Práctica</button>
            <a href="{{ route('practicas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>




    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa; /* Color de fondo suave */
            margin: 0;
            padding: 0;
            color: #343a40;
        }

        .form-container {
            max-width: 600px; /* Amplitud máxima del contenedor */
            margin: 50px auto; /* Centramos el contenedor y le damos margen vertical */
            padding: 20px;
            background-color: #ffffff; /* Fondo blanco para el contenedor */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Sombra */
            border-radius: 10px; /* Bordes redondeados */
            transition: transform 0.2s; /* Transición suave para el efecto de hover */
        }

        .form-container:hover {
            transform: scale(1.02); /* Efecto de aumento al pasar el ratón */
        }

        h3 {
            font-size: 24px; /* Tamaño de fuente del título */
            margin-bottom: 20px; /* Espaciado debajo del título */
            color: #28a745; /* Color verde para el título */
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
            width: 100%; /* Botón ocupa el ancho completo */
        }

        .btn-success {
            background-color: #28a745; /* Color de fondo verde */
            border: none; /* Sin borde */
            color: white; /* Texto blanco */
        }

        .btn-success:hover {
            background-color: #218838; /* Color verde oscuro al pasar el ratón */
            transform: scale(1.05); /* Efecto de aumento en hover */
        }
    </style>

    <div class="form-container">
        <div class="d-flex justify-content-center">
            <h3>CREAR PRACTICA EN PROYECTO AGROPECUARIO</h3>
        </div>

        <form action="/practicas" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="tipo_proyecto" class="form-label">TIPO DE PROYECTO</label>
                <input type="text" class="form-control" id="tipo_proyecto" name="tipo_proyecto" required>
            </div>

            <div class="mb-3">
                <label for="grado" class="form-label">GRADO ESCOLAR</label>
                <input type="text" class="form-control" id="grado" name="grado" required>
            </div>

            <div class="mb-3">
                <label for="apellidos_nombres" class="form-label">APELLIDOS Y NOMBRES</label>
                <input type="text" class="form-control" id="apellidos_nombres" name="apellidos_nombres" required>
            </div>

            <div class="mb-3">
                <label for="horas" class="form-label">HORAS</label>
                <input type="number" class="form-control" id="horas" name="horas" required>
            </div>

            <div class="mb-3">
                <label for="docente" class="form-label">DOCENTE ORIENTADOR</label>
                <input type="text" class="form-control" id="docente" name="docente" required>
            </div>

            <button type="submit" class="btn btn-success">GUARDAR</button>
        </form>
    </div>


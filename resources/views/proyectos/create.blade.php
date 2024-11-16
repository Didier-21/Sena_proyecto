

@section('titulo', 'Crear proyecto')

@section('contenido')

<br>
    <h3>INGRESAR EL PROYECTO PRODUCTIVO</h3>
    <form action="/proyectos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="NOMBRE" class="form-label">NOMBRE</label>
          <input type="varchar" class="form-control" id="nombre" name="nombre">
        </div>

        <div class="mb-3">
            <label for="TIPO PROYECTO" class="form-label">TIPO DE PROYECTO</label>
            <input type="varchar" class="form-control" id="tipo" name="tipo">
          </div>

        <div class="mb-3">
            <label for="CANTIDAD" class="form-label">CANTIDAD</label>
            <input type="double" class="form-control" id="cantidad" name="cantidad">
        </div>

        <div class="mb-3">
            <label for="VALOR" class="form-label">VALOR</label>
            <input type="double" class="form-control" id="valor" name="valor">
        </div>

        <div class="mb-3">
            <label for="imagen" class="form-label">FACTURA O SOPORTE</label>
        <br>
            <input type="file" id="imagen" name="imagen">

        </div>
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
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

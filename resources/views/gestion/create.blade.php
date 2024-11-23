@extends('layouts.app')

@section('title', 'Crear Gestión Institucional')

@section('contenido')
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
@endsection

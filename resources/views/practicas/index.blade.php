@extends('layouts.app')

@section('title', 'Crear Gestión Institucional')

@section('contenido')



    <div class="container mt-5">
        <h1 class="text-center">Lista de Prácticas</h1>

        <style>
            /* Estilos para la tabla */
            .table {
                background-color: #f8f9fa; /* Color de fondo de la tabla */
                border-radius: 8px; /* Bordes redondeados para la tabla */
                overflow: hidden; /* Para mantener los bordes redondeados en las esquinas */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra alrededor de la tabla */
            }

            /* Estilo para las celdas de encabezado */
            .table thead th {
                background-color: #343a40; /* Color de fondo para los encabezados */
                color: #fff; /* Color del texto de los encabezados */
                text-align: center; /* Centrar texto en los encabezados */
                padding: 10px; /* Espaciado interno */
            }

            /* Estilo para las celdas de datos */
            .table tbody td {
                background-color: #fff; /* Color de fondo para las celdas de datos */
                color: #343a40; /* Color del texto */
                padding: 10px; /* Espaciado interno */
                text-align: center; /* Centrar texto en las celdas */
            }

            /* Alternar color de fondo para filas impares */
            .table tbody tr:nth-child(odd) {
                background-color: #e9ecef;
            }

            /* Estilo para los botones */
            .btn-warning {
                background-color: #ffc107;
                border-color: #ffc107;
                color: #343a40;
                border-radius: 20px; /* Botones redondeados */
            }

            .btn-danger {
                background-color: #dc3545;
                border-color: #dc3545;
                color: #fff;
                border-radius: 20px; /* Botones redondeados */
            }

            .btn-warning:hover, .btn-danger:hover {
                background-color: #343a40; /* Cambiar color al pasar el ratón */
                color: #fff; /* Color del texto al pasar el ratón */
            }

            /* Alinear el contenido de las celdas al centro */
            .table td, .table th {
                vertical-align: middle;
            }
        </style>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tipo de Proyecto</th>
                    <th>Grado</th>
                    <th>Apellidos y Nombres</th>
                    <th>Horas</th>
                    <th>Docente</th>
                    <th>Acciones</th> <!-- Agrega una columna para los botones de acción -->
                </tr>
            </thead>
            <tbody>
                @foreach ($practice as $item)
                    <tr>
                        <td>{{ $item->tipo_proyecto }}</td>
                        <td>{{ $item->grado }}</td>
                        <td>{{ $item->apellidos_nombres }}</td>
                        <td>{{ $item->horas }}</td>
                        <td>{{ $item->docente }}</td>
                        <td>
                            <!-- Botón para Editar -->
                            <a href="{{ route('practicas.edit', $item->id) }}" class="btn btn-warning btn-sm">Editar</a>

                            <!-- Botón para Eliminar -->
                            <form action="{{ route('practicas.destroy', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que quieres eliminar esta práctica?');">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection

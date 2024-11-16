@extends('layouts.app')

@section('titulo', 'Detalle Proyecto')

@section('contenido')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($proyectoa->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text">tipo: {{$proyectoa->tipo}}</p>
        <p class="card-text">cantidad: {{$proyectoa->cantidad}}</p>
    </div>
    <br>
    <a href="/proyectos/{{$proyectoa->id}}/edit" class="btn btn-warning">Editar proyecto</a>
    {{-- <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-dark">Editar curso</a> --}}
</div>

<!-- Botón de eliminar -->
<div class="d-flex justify-content-center">
<form action="{{ route('proyectos.destroy', $proyectoa->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este proyecto?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger mt-3">Eliminar Proyecto</button>
</form>
</div>
</div>
<div class="d-flex justify-content-center">
<a href="{{ route('proyectos.index') }}" class="btn btn-secondary mt-3">Volver a la lista de proyectos</a>
</div>


@endsection






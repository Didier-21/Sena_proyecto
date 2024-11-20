@extends('layouts.app')

@section('title', 'Dashboard - Institución Educativa Agropecuaria')

@section('contenido')
<header class="bg-white shadow-md rounded-lg p-4 mb-6">
    <h1 class="text-3xl font-bold text-center text-green-700">Bienvenido a la Institución Educativa Agropecuaria</h1>
    <p class="text-center text-gray-600">Tu espacio para aprender y crecer en el ámbito agropecuario.</p>
</header>

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <div class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-green-600">Últimas Noticias</h2>
        <p class="text-gray-700">Mantente informado sobre las últimas novedades y eventos en nuestra institución.</p>
    </div>
    <div class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-green-600">Cursos Disponibles</h2>
        <p class="text-gray-700">Explora nuestros cursos y programas educativos en el área agropecuaria.</p>
        <a href="#" class="btn btn-primary">leeer mas </a>
    </div>
    <div class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-green-600">Recursos Educativos</h2>
        <p class="text-gray-700">Accede a materiales y recursos que te ayudarán en tu aprendizaje.</p>
    </div>
    <div class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-green-600">Proyectos</h2>
        <p class="text-gray-700">Explora los proyectos que afrece nuestra institucion educativa.</p>
        <a href="/proyectos" class="btn btn-primary"> Ver Proyectos </a>
    </div>
</section>
@endsection

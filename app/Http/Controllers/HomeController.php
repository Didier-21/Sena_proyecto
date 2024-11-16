<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Puedes obtener datos que desees mostrar en la página de inicio
        $proyectos = Proyecto::latest()->take(5)->get();
        $proyectos = proyecto::latest()->take(5)->get(); // Últimos 5 proyectos

        // Pasar datos a la vista
        return view('home', compact('proyectos'));
    //
}
}

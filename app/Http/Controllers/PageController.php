<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PageController;

class PageController extends Controller
{
    public function mision()
    {
        return view('mision'); // Retorna la vista para Misión
    }

    public function vision()
    {
        return view('vision'); // Retorna la vista para Visión
    }

    public function logrosAcademicos()
    {
        return view('logros-academicos'); // Retorna la vista para Logros Académicos
    }

    public function gestionJuridica()
    {
        return view('gestion-juridica'); // Retorna la vista para Gestión Jurídica
    }

    public function logrosDirectivos()
    {
        return view('logros-directivos'); // Retorna la vista para Logros Directivos
    }

    public function proyectosProductivos()
    {
        return view('proyectos-productivos'); // Retorna la vista para Proyectos Productivos
    }

    public function primaria()
    {
        return view('primaria'); // Retorna la vista de primaria
    }

    public function secundaria()
    {
        return view('secundaria'); // Retorna la vista de secundaria
    }

    public function media()
    {
        return view('media'); // Retorna la vista de media tecnica
    }

    public function docentes()
    {
        return view('docentes'); // Retorna la vista de media tecnica
    }
}


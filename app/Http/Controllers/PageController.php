<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

     public function estudiantew()
    {
        return view('estudiantew'); // Retorna la vista para perfil del estudiante

    }

public function perfildocente()
    {
        return view('perfildocente'); // Retorna la vista para perfil del docente

    }
public function filosofia()
    {
        return view('filosofia'); // Retorna la vista para filosofia institucional
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
        return view('docentes'); // Retorna la vista de docentes

    }

    public function administrativos()
    {
        return view('administrativos'); // Retorna la vista de administrativos

    }

    public function directivos()
    {
        return view('directivos'); // Retorna la vista de directivos

    }
}


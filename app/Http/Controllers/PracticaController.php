<?php

namespace App\Http\Controllers;

use App\Models\Practica;
use Illuminate\Http\Request;

class PracticaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $practice = Practica::all();
       return view('practicas.index', compact('practice')); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('practicas.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $practice= new Practica();
        $practice->tipo_proyecto = $request->input('tipo_proyecto');
        $practice->grado = $request->input('grado');
        $practice->apellidos_nombres = $request->input('apellidos_nombres');
        $practice->horas = $request->input('horas');
        $practice->docente = $request->input('docente');

        $practice->save();
        return 'SE GUARDO CON EXITO LA PRACTICA AGROPECUARIA REALIZADA';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $practice = Practica::find($id);
        return view('practicas.show', compact('practice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $practice = Practica::find($id);
        return view('practicas.edit',compact('practice'));//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $practice = Practica::findOrFail($id);

        // Actualizar los campos con los datos del formulario.
        $practice->tipo_proyecto = $request->input('tipo_proyecto');
        $practice->grado = $request->input('grado');
        $practice->apellidos_nombres = $request->input('apellidos_nombres');
        $practice->horas = $request->input('horas');
        $practice->docente = $request->input('docente');

        // Guardar los cambios en la base de datos.
        $practice->save();

        return 'SE ACTUALIZÓ CON ÉXITO LA PRÁCTICA AGROPECUARIA';//
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // Buscar la práctica correspondiente al ID.
    $practice = Practica::findOrFail($id);

    // Eliminar la práctica de la base de datos.
    $practice->delete();

    return 'SE ELIMINÓ CON ÉXITO LA PRÁCTICA AGROPECUARIA';
        //
    }
}

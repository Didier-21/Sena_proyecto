<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $proyectoa = Proyecto::all();
       return view('proyectos.index', compact('proyectoa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyectos.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $proyectoa= new Proyecto();
        $proyectoa->nombre = $request->input('nombre');
        $proyectoa->tipo = $request->input('tipo');
        $proyectoa->cantidad = $request->input('cantidad');
        $proyectoa->valor = $request->input('valor');
        if($request->hasFile('imagen')){
            $proyectoa->imagen = $request->file('imagen')->store('public/proyectos');
            }
        $proyectoa->save();
        return 'Guardado con éxito el proyecto productivo del colegio San Jose en Ingreso';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $proyectoa = Proyecto::find($id);
        return view('proyectos.show', compact('proyectoa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $proyectoa = Proyecto::find($id);
        return view('proyectos.edit',compact('proyectoa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $proyectoa = Proyecto::find($id);
        $proyectoa->fill($request->except('imagen'));
        if($request->hasFile('imagen')){
        $proyectoa->imagen = $request->file('imagen')->store('public/proyectos');
        $proyectoa->save();
        return 'LA MODIFICACION SE REALIZO CON EXITO AL PROYECTO PRODUCTIVO';
    }



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // Buscar el proyecto por su ID
    $proyectoa = Proyecto::find($id);

    // Verificar si se encontró el proyecto
    if ($proyectoa) {
        // Eliminar el proyecto
        $proyectoa->delete();
        // Redirigir a la vista de lista de proyectos con un mensaje de éxito
        return redirect()->route('proyectos.index')->with('success', 'El proyecto se ha eliminado con éxito.');
    } else {
        // Si no se encontró el proyecto, redirigir con un mensaje de error
        return redirect()->route('proyectos.index')->with('error', 'El proyecto no fue encontrado.');
        //
    }
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gestion;
use Illuminate\Support\Facades\Storage;

class GestionController extends Controller
{
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        $gestione = Gestion::all();
        return view('gestion.index', compact('gestione'));

    }

    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        return view('gestion.create');
    }

    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        // Lógica para almacenar un nuevo elemento
        $gestione= new Gestion();
        $gestione->tipo = $request->input('tipo');
        $gestione->clase = $request->input('clase');
        $gestione->nombre = $request->input('nombre');
        $gestione->descripcion = $request->input('descripcion');
        $gestione->fecha = $request->input('fecha');
        if($request->hasFile('imagen')){
            $gestione->imagen = $request->file('imagen')->store('public/gestionescdr');
            }
        $gestione->save();
        return redirect()->route('gestion.index')->with('success', 'SE GUARDO CON ÉXTO LA GESTIÓN A LA INSTITUCIÓN');
    }

    public function show(Request $request,$id)
    {
        $request->user()->authorizeRoles(['admin']);
        $gestione = Gestion::find($id);
        return view('gestion.show', compact('gestione'));
        // Lógica para mostrar un elemento específico
    }

    public function edit(Request $request,$id)
    {
        $request->user()->authorizeRoles(['admin']);
        $gestione = Gestion::find($id);
        return view('gestion.edit',compact('gestione'));

        // Lógica para mostrar el formulario de edición
    }

    public function update(Request $request, $id)
    {
        $request->user()->authorizeRoles(['admin']);
        $gestione = Gestion::findOrFail($id);

        // Actualizar los campos del modelo
        $gestione->tipo = $request->input('tipo');
        $gestione->clase = $request->input('clase');
        $gestione->nombre = $request->input('nombre');
        $gestione->descripcion = $request->input('descripcion');
        $gestione->fecha = $request->input('fecha');

        // Manejar la carga de la imagen
        if ($request->hasFile('imagen')) {
            // Eliminar la imagen antigua si existe
            if ($gestione->imagen) {
                Storage::delete($gestione->imagen);
            }
            // Guardar la nueva imagen y actualizar la ruta en el modelo
            $path = $request->file('imagen')->store('public/imagenes');
            $gestione->imagen = $path;
        }

        // Guardar los cambios en la base de datos
        $gestione->save();

        // Redirigir al usuario con un mensaje de éxito

        return redirect()->route('gestion.index')->with('success', 'GESTIÓN ACTUALIZADA CON ÉXITO.');
        // Lógica para actualizar un elemento específico
    }

    public function destroy(Request $request,$id)
    {
        $request->user()->authorizeRoles(['admin']);
        // Obtener el registro existente
        $gestione = Gestion::findOrFail($id);

        // Eliminar la imagen asociada si existe
        if ($gestione->imagen) {
            Storage::delete($gestione->imagen);
        }

        // Eliminar el registro de la base de datos
        $gestione->delete();

        // Redirigir al usuario con un mensaje de éxito
        return redirect()->route('gestion.index')->with('success', 'SE ELIMINO CON ÉXITO LA GESTIÓN A LA INSTITUCIÓN');
        // Lógica para eliminar un elemento específico
    }
}

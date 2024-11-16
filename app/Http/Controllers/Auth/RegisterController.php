<?php

namespace App\Http\Controllers\Auth;
use App\Models\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    // Muestra el formulario de registro
    public function showRegistrationForm()
    {
        return view('auth.register'); // Asegúrate de que esta vista exista
    }

    // Maneja el registro de un nuevo usuario
    public function register(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $user = User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
    ]);

    // Asignar rol de usuario por defecto
    $userRole = Role::where('name', 'user')->first();
    $user->roles()->attach($userRole->id);

    Auth::login($user);

    return redirect()->route('dashboard');
}
}

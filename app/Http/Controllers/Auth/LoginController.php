<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Muestra el formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('auth.login'); // Asegúrate de que la vista exista en resources/views/auth/login.blade.php
    }

    // Maneja el inicio de sesión
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirigir a la página deseada después de un inicio de sesión exitoso
            return redirect()->intended('dashboard');
        }

        // Redirigir de nuevo con un mensaje de error
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden.',
        ]);
    }

    // Maneja el cierre de sesión
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/dashboard'); // Redirigir a la página principal después del cierre de sesión
    }
}

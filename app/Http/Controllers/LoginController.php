<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard'; // Cambia '/dashboard' a la ruta que desees

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function create()
    {
        return view('auth.login'); // Asegúrate de tener la vista correspondiente
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirigir al usuario después de un inicio de sesión exitoso
            return redirect()->intended($this->redirectPath());
        }

        // Si falla el inicio de sesión, redirige de nuevo con error
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden.',
        ]);
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        return redirect('/dashboard'); // Cambia esto por la redirección que desees
    }
}

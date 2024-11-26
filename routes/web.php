<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PracticaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\GestionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;


Route::get('/', function () {
    return view('home');
});
Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos');
Route::middleware(['auth'])->group(function () {
    Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos');
    Route::resource('/proyectos', ProyectoController::class);
});
// ->middleware('role:admin');

Route::resource('/practicas', PracticaController ::class);
Route::middleware(['auth'])->group(function () {
    Route::get('/practicas', [PracticaController::class, 'index'])->name('practicas');
    Route::resource('/practicas', PracticaController::class);
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('register', [RegisterController::class, 'register'])->name('register');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('/gestion', GestionController::class);
Route::middleware(['auth'])->group(function () {
    Route::get('/gestion', [GestionController::class, 'index'])->name('gestion');
    Route::resource('/gestion', GestionController::class);
});



// Ruta para la Misión
Route::get('/mision', [PageController::class, 'mision'])->name('mision');

// Ruta para la Visión
Route::get('/vision', [PageController::class, 'vision'])->name('vision');

// Ruta para Logros Académicos
Route::get('/logroaca', [PageController::class, 'logrosAcademicos'])->name('logros.academicos');

// Ruta para Gestión Jurídica
Route::get('/gestion-juridica', [PageController::class, 'gestionJuridica'])->name('gestion.juridica');

// Ruta para Logros Directivos
Route::get('/logros-directivos', [PageController::class, 'logrosDirectivos'])->name('logros.directivos');

// Ruta para Proyectos Productivos
Route::get('/proyectos-productivos', [PageController::class, 'proyectosProductivos'])->name('proyectos.productivos');

//Ruta  para primaria
Route::get('/primaria', [PageController::class, 'primaria'])->name('primaria');
//Ruta para Secundaria
Route::get('/secundaria', [PageController::class, 'secundaria'])->name('secundaria');
//Ruta para Media Tecnica
Route::get('/media', [PageController::class, 'media'])->name('media');
//docentes
Route::get('/docentes', [PageController::class, 'docentes'])->name('docentes');
//Administrativos
Route::get('/administrativos', [PageController::class, 'administrativos'])->name('administrativos');
//Directivos
Route::get('/directivos', [PageController::class, 'directivos'])->name('ddirectivos');


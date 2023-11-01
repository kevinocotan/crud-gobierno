<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

// Definir rutas CRUD para el controlador ProyectoController
Route::resource('proyectos', ProyectoController::class);

// Ruta personalizada para descargar un PDF de proyectos
Route::get('informes', [ProyectoController::class, 'informe'])->name('informes');

Route::get('/proyectos/download-pdf', [ProyectoController::class, 'generatePDF'])->name('proyectos.pdf');
Route::get('informes', [ProyectoController::class, 'informe'])->name('informes');
Route::get('/proyectos/{proyecto}/download-pdf', [ProyectoController::class, 'downloadPDF'])->name('proyectos.downloadPDF');

// Otras rutas específicas de tu aplicación
// ...


Route::get('/', function () {
    return view('welcome');
});

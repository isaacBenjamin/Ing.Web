<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// routes/web.php


use App\Http\Controllers\LibroController;


Route::controller(LibroController::class)->group(function(){

    Route::get('/registrar-libro',      'registrarLibro');
    Route::post('/guardar-libro',       'guardarLibro');
    Route::get('/',                     'mostrarCatalogo')->name('catalogo');
    Route::get('/tomar-prestado/{id}',  'tomarPrestado')->name('tomar-prestado');
    Route::get('/libros-prestados',     'mostrarLibrosPrestados')->name('libros-prestados');
    Route::post('/devolver-libro/{id}', 'devolverLibro');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

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
    Route::get('/catalogo',             'mostrarCatalogo');
    Route::get('/tomar-prestado/{id}',  'tomarPrestado');
    Route::get('/libros-prestados',     'mostrarLibrosPrestados');
    Route::post('/devolver-libro/{id}', 'devolverLibro');

});


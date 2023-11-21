<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function registrarLibro()
    {
        // Lógica para mostrar el formulario de registro de libros
    }

    public function guardarLibro(Request $request)
    {
        // Lógica para guardar un libro en la base de datos
    }

    public function mostrarCatalogo()
    {
        $libros = Libro::where('disponibilidad', true)->get();

        return view('libros.catalogo', ['libros' => $libros]);
    }

    public function tomarPrestado($id)
    {
        // Lógica para tomar prestado un libro
    }

    public function mostrarLibrosPrestados()
    {
        // Lógica para mostrar los libros prestados por el usuario
    }

    public function devolverLibro($id)
    {
        // Lógica para devolver un libro
    }
}

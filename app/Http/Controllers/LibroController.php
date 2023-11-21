<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Libro;


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
        //tomarPrestadoLogic
    }

    public function mostrarLibrosPrestados()
    {
        // Logica para mostrar libros prestados
    }

    public function devolverLibro($id)
    {
        // Lógica para devolver un libro
    }
}

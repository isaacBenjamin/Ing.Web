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

        $libro = Libro::findOrFail($id);

        if ($libro->disponibilidad) {
            // Actualizar disponibilidad del libro
            $libro->disponibilidad = false;
            $libro->save();

            // Registrar la transacción o realizar otras acciones necesarias.

            return redirect()->route('catalogo')->with('success', 'Libro tomado prestado exitosamente.');
        } else {
            return redirect()->route('catalogo')->with('error', 'Este libro no está disponible actualmente.');
        }

    }
    public function mostrarLibrosPrestados()
    {
        // Obtenemos el usuario autenticado
        $usuario = Auth::user();

        // Obtén los libros prestados por el usuario
        $librosPrestados = $usuario->librosPrestados;

        return view('libros.prestados', ['librosPrestados' => $librosPrestados]);
    }

    public function devolverLibro($id)
    {
        // Lógica para devolver un libro
    }
}

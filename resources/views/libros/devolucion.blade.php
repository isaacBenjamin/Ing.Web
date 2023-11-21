@extends('template')

@section('content')
    <h2>Mis Préstamos</h2>
    
    @if(count($prestamos) > 0)
        <ul>
            @foreach($prestamos as $prestamo)
                <li>
                    Libro: {{ $prestamo->libro->titulo }} <br>
                    Fecha de Préstamo: {{ $prestamo->fecha_prestamo }} <br>
                    Fecha de Devolución: {{ $prestamo->fecha_devolucion ?? 'No devuelto aún' }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No tienes libros prestados en este momento.</p>
    @endif
@endsection
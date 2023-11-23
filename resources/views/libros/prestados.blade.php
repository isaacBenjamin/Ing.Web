<!-- resources/views/libros/prestados.blade.php -->

@extends('template')

@section('content')
    <h1>Libros Prestados</h1>

    @if (count($librosPrestados) > 0)
        <ul>
            @foreach ($librosPrestados as $libro)
                <li>{{ $libro->titulo }} ({{ $libro->autor }})</li>
            @endforeach
        </ul>
    @else
        <p>No tienes libros prestados actualmente.</p>
    @endif
@endsection

@extends('template')

@section('content')

    <h1>Catálogo de Libros</h1>

    @if (count($libros) > 0)
        @foreach ($libros as $libro)
            <div>
                <h3>{{ $libro->titulo }}</h3>
                <p>Autor: {{ $libro->autor }}</p>
                <p>Género: {{ $libro->genero }}</p>
                <a href="/tomar-prestado/{{ $libro->id }}">Tomar Prestado</a>
            </div>
        @endforeach
    @else
        <p>No hay libros disponibles en este momento.</p>
    @endif

@endsection

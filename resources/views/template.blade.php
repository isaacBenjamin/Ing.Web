<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ParcialDos</title>
</head>

<body>
    <p>
        <a href="{{ route('catalogo') }}">Catálogo</a>
        <a href="{{ route('libros-prestados') }}">Préstamos</a>

        @auth
        <a href="{{ route('dashboard')}}">Dashboard</a>
        @else
        <a href="{{ route('login')}}">Login</a>
        @endauth
    </p>

    <hr>

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </div>

</body>

</html>

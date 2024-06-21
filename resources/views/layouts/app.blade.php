
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <header>
        <!-- Aquí puedes incluir tu menú de navegación -->
    </header>

    <main class="container" style="background: #e7e7e7;">
        <a href="{{ url('/') }}">inicio</a>
        <h4 class="text-center">My-Blog</h4>
        @yield('content')
    </main>

    <footer>
        <!-- Aquí puedes incluir tu pie de página -->
    </footer>
</body>
</html>
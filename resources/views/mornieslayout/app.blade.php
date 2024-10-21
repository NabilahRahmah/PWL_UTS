<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mornies')</title>
    <link rel="stylesheet" href="{{ asset('css/mornies.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Mornies</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="{{ url('/tentang') }}">Tentang Kami</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/penghargaan') }}">Penghargaan</a></li>
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>

    <footer class="text-center">
        <p>&copy; 2024 Mornies</p>
    </footer>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DreamTravel - Esplora il Mondo')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="{{ route('home') }}">🌍 DreamTravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto align-items-center">
                    <a class="nav-link px-3" href="{{ route('home') }}">Home</a>
                    <a class="nav-link px-3" href="{{ route('travels.index') }}">Tutti i Viaggi</a>
                    <a class="nav-link btn btn-warning text-dark fw-bold ms-2 px-4 shadow-sm"
                        href="{{ route('travels.booking') }}">Prenota Ora</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenuto principale -->
    <main class="grow py-4">
        @if (session('success'))
            <div class="container">
                <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0">&copy; 2026 DreamTravel - Progettato con cura ed eleganza.</p>
        </div>
    </footer>

</body>

</html>

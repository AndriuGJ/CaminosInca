
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="theme-color" content="#202124">

    <title>@yield('title', 'Rally Caminos del Inca')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="min-h-screen bg-marfil text-carbon antialiased">

    @include('components.header')

    <main id="contenido">
        @yield('content')
    </main>

    @include('components.footer')

    @stack('scripts')
</body>
</html>

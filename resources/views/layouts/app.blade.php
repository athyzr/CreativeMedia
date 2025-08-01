<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Vite Assets -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Stack Styles -->
    @stack('styles')
</head>
<body>
    <div id="app">
        {{-- Navbar default Laravel --}}
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <!-- Navbar content -->
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Stack Scripts -->
    @stack('scripts')
</body>
</html>

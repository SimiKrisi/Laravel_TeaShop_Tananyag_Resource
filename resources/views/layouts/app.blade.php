<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name', 'Tea Shop')}} - @yield('title', 'Kezdőlap')</title>
    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('teas.index') }}">{{ config('app.name', 'Tea Shop') }}</a>
            <ul>
                <li><a href="{{ route('teas.index') }}">Kezdőlap</a></li>
                <li><a href="{{ route('teas.index') }}">Termékek</a></li>
                <li><a href="{{ route('teas.index') }}">Kapcsolat</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div>
            <p>&copy; 2023 {{ config('app.name', 'Tea Shop') }}. Minden jog fenntartva.</p>
            <p>Készült sok szenvedéllyel.   </p>
        </div>
    </footer>
    @stack('scripts')
</body>
</html>
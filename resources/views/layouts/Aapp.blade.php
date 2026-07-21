<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{config('app.name', 'Tea Shop')}} - @yield('title', 'Kezdőlap')</title>
</head>
{{-- sötét háttér, világos betűszín --}}
<body class="bg-[#1a0a0a] text-white">
    <header class="bg-[#1a0a0a] text-white p-4">
        <nav>
            
            <ul>
                <li><a href="{{ route('teas.index') }}">Statisztikák</a></li>
                <li><a href="{{ route('teas.index') }}">Termékek</a></li>
                <li><a href="{{ route('teas.index') }}">Rendelések</a></li>
            </ul>
        </nav>
    </header>
    <main class="container mx-auto py-8">
        @yield('content')
    </main>
    <footer class="bg-[#1a0a0a] text-white p-4 mt-8">
        <div>
            <p>&copy; 2023 {{ config('app.name', 'Tea Shop') }}. Minden jog fenntartva.</p>
            <p>Készült sok szenvedéllyel.   </p>
        </div>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
    @livewireStyles
</head>
<body>
    <header>
        <x-navbar>

        </x-navbar>
    </header>
        <x-sidebar>

        </x-sidebar>

        @yield('contenido')


    <footer>

    </footer>
    @livewireScripts
</body>
</html>
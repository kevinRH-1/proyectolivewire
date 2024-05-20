<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <title>@yield('title')</title>
    @livewireStyles
</head>
<body>
    <header>
        <x-navbar>

        </x-navbar>
        <x-sidebar>

        </x-sidebar>

    </header>
    <main class=" w-11/12 m-auto pt-20">
        @yield('contenido')
    </main>
        


    <footer>

    </footer>
    @livewireScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>


    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>
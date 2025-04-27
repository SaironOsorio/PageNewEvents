<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Perfil</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        @livewireScripts
    </head>
    <body>
        <x-navbar />

        <!-- Hero Section -->
        <section class="bg-white ">
            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold leading-tight text-gray-900 "><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Ya Disponibles</span> Nuestro eventos</h2>
                    <p class="mb-6 font-light text-gray-500  md:text-lg">Encuentra nuestros eventos disponibles para reservar</p>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <livewire:events />
        </section>

        <x-footer />    
    </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        
        <x-navbar />

    <!-- Hero Section -->
    <section class="bg-white">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Estamos Mejorando para ti, <span class="text-blue-600 dark:text-blue-500">IVAO CO EVENTO</span> Version 2.</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl poppins-light">
                    Una versión, con un diseño renovado y un sistema optimizado. Muy pronto podrás disfrutar de una experiencia más moderna, rápida y centrada en tus necesidades como piloto.
                </p>
                <br>
                <a href="./Pages/eventos.html" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white  focus:ring-4 focus:outline-none focus:ring-pink-200 poppins-medium">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-transparent ">
                    Ver Eventos
                    </span>
                    </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex ">
                <img class="w-full " src="{{asset('Images/pc-info.png')}}" alt="dashboard image">
            </div>             
        </div>
        
    </section>

    <section class="bg-white">
        <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Nuevas Caracteristicas.</h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg poppins-light"> Hemos rediseñado completamente la plataforma para ofrecerte una experiencia más fluida y moderna. Ahora puedes visualizar el estado de los vuelos, los pilotos conectados, detalles del avión, duración estimada y mucho más. Todo optimizado con una interfaz clara y adaptativa.</p>
                <a href="#" class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                    Get started
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
                <ol class="relative border-s border-gray-200 dark:border-gray-700">                  
                    <li class="mb-10 ms-6">            
                        <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white">
                            <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </span>
                        <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 nunito-semibold">Application UI v2.0.0</h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 poppins-light ">Actualizada Marzo 19, 2025</time>
                        <p class="mb-4 text-base font-normal text-gray-500 poppins-regular">Hemos finalizado la nueva versión del sistema de eventos de IVAO CO. Esta actualización incluye mejoras en diseño, rendimiento y usabilidad, pensadas para ofrecerte una mejor experiencia como piloto virtual.</p>
                    </li>
                    <li class="mb-10 ms-6">
                        <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white">
                            <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 nunito-semibold">Siembrief <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">Actualizada</span></h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500 poppins-light">Actualizado 19 Marzo, 2025</time>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400 poppins-regular"> Ahora puedes generar tu plan de vuelo directamente desde la plataforma con integración completa a SimBrief. ¡Más rápido, más práctico y totalmente adaptado para nuestros eventos!</p>
                    </li>
                    <li class="ms-6">
                        <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white">
                            <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 nunito-semibold">Nuevas Funcionalidades <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">Nueva</span></h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 poppins-light">Creada Marzo 19, 2025</time>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400 poppins-regular">  Ahora podrás visualizar en tiempo real el avión asignado, la cantidad de participantes, la duración del vuelo y el estado de cada piloto. Además, incluimos estadísticas detalladas, filtros dinámicos y una experiencia más intuitiva para todos los eventos.</p>
                    </li>
                </ol>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Footer -->
    <footer class="p-4 bg-white md:p-8 lg:p-10 ">
        <div class="mx-auto max-w-screen-xl text-center">
            <a href="#" class="flex items-center">
                <img src="{{asset('Images/logoTag.svg')}}" class="h-16 w-auto" alt="Ivao Co Logo" />
            </a>
            <p class="my-6 text-gray-500 dark:text-gray-400">&copy; <span id="year"></span> IVAO CO. Todos los derechos reservados.</p>
            <p class="my-6 text-gray-500 dark:text-gray-400">Desarrollado por DevOp Colombia</p>
            <p class="my-6 text-gray-500 dark:text-gray-400">Contact: co-web@ivao.aero</p> 
        </div>
    </footer>
        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>

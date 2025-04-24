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
        <header>
            <!-- Navbar -->
            <nav class="bg-white border-gray-200">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{url('/')}}" class="flex items-center">
                    <img src="{{ asset('images/LogoTag.svg') }}" class="h-16 w-auto" alt="Ivao Co Logo" />
                </a>
            
                <!-- Botones visibles solo en pantallas grandes -->
                <div class="flex md:order-2 space-x-3 md:space-x-4 rtl:space-x-reverse">
                    <button type="button" class="hidden md:inline-flex text-white bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center me-2 mb-2">
                    <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 20a7.966 7.966 0 0 1-5.002-1.756v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z" clip-rule="evenodd" />
                    </svg>
                    Iniciar Sesión con IVAO
                    </button>
                    <button type="button" class="hidden md:inline-flex py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-gray-700 focus:ring-4 focus:ring-gray-100">
                    Registrarse
                    </button>
                    
                    <!-- Botón Hamburguesa -->
                    <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                    </button>
                </div>
            
                <!-- Menú colapsable -->
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <a href="./Pages/eventos.html" class="block py-2 px-3 md:p-0 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 poppins-medium">Evento
                        <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full poppins-medium">New</span>
                        </a>
                    </li>
                    <li>
                        <button id="dropdownPilotoLink" data-dropdown-toggle="dropdownPiloto" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:p-0 md:w-auto cursor-pointer poppins-medium">Piloto
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                        </button>
                        <div id="dropdownPiloto" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 ">
                        <ul class="py-2 text-sm text-gray-700">
                            <li><a href="./Pages/eventos.html" class="block px-4 py-2 hover:bg-gray-100 poppins-regular">Reservar</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 poppins-regular">Información</a></li>
                        </ul>
                        </div>
                    </li>
                    <li>
                        <button id="dropdownControladorLink" data-dropdown-toggle="dropdownControlador" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:p-0 md:w-auto cursor-pointer poppins-medium">Controlador
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                        </button>
                        <div id="dropdownControlador" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                        <ul class="py-2 text-sm text-gray-700">
                            <li><a href="./Pages/Page/eventoController.html" class="block px-4 py-2 hover:bg-gray-100 poppins-regular">Reservar</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 poppins-regular">Información</a></li>
                        </ul>
                        </div>
                    </li>
                    <li><a href="#" class="block py-2 px-3 md:p-0 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 poppins-medium">Estadística</a></li>
            
                    <!-- 👇 Botones visibles solo en menú hamburguesa -->
                    <li class="md:hidden mt-3">
                        <button type="button" class="w-full text-white bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mb-2">
                        <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 20a7.966 7.966 0 0 1-5.002-1.756v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z" clip-rule="evenodd" />
                        </svg>
                        Iniciar Sesión con IVAO
                        </button>
                        <button type="button" class="w-full py-2.5 px-5 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-gray-700 focus:ring-4 focus:ring-gray-100">
                        Registrarse
                        </button>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>      
            <!-- End Navbar -->
        </header>

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

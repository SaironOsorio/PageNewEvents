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
        <script>
            /*Greetings code for the profile view*/
            function obtenerSaludo() {
                const hora = new Date().getHours();
                let saludo = "";
            
                if (hora >= 6 && hora < 12) {
                saludo = "¡Buenos días!";
                } else if (hora >= 12 && hora < 18) {
                saludo = "¡Buenas tardes!";
                } else {
                saludo = "¡Buenas noches!";
                }
            
                return saludo;
            }
            
            console.log(obtenerSaludo());
            
            document.addEventListener("DOMContentLoaded", () => {
                const elementoSaludo = document.getElementById("greetings");
                if (elementoSaludo) {
                elementoSaludo.textContent = obtenerSaludo();
                }
            });
        </script>

    </head>
<body>
    <x-navbar />

    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="max-w-screen-md">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 nunito-semibold"><span id="greetings"></span> , {{ auth()->user()->name }} 👋🏻</h2>
                <p class="mb-8 font-light text-gray-500 sm:text-xl poppins-light">Bienvenido a nuestra plataforma  <span class="text-blue-600 dark:text-blue-500">Eventos Co</span>, Explora nuestras funcionalidades y disfruta de la experiencia. A continuación te mostraremos algunos datos.
                 <p>
                    <div class="flex items-center p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800" role="alert">
                        <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                          <span class="font-medium">Advertencia</span> Si algunos de los datos de aquí no son correctos. <a class="text-blue-600" href="#">Actualizar Datos</a>
                        </div>
                        <div>
                            Estos Datos solo aplicaran cambios en esta plataforma.
                          </div>
                      </div>
                 </p>
                 <p>
                    <div class="flex p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                        <svg class="shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                          <span class="font-medium">{{auth()->user()->name}},Tus datos registrados en ivao son :</span>
                            <ul class="mt-1.5 list-disc list-inside">
                              <li>Correo Electronico : {{auth()->user()->email}}</li>
                              <li>Divicion : {{auth()->user()->Division_id}}</li>
                          </ul>
                        </div>
                      </div>
                 </p>
                </p>
            </div>
        </div>
    </section>
    </div>
    <hr class="bg-gray-200 border-0 h-px w-1/2 mx-auto" />
    
</body>
</html>
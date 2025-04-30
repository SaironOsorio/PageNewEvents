<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    @livewireStyles
</head>
<body>
        <!-- Hero Section -->
        <section class="bg-white py-8 antialiased md:py-16">
            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
              <h2 class="text-xl font-semibold text-gray-900  sm:text-2xl">Elige un vuelo segun tu disponibilidad </h2>
              <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                  <div class="space-y-6">
    
                    <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm -800 md:p-6">
                      <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                        <div class="h-14 w-36 flex items-center justify-center">
                            <img class="max-h-full max-w-full object-contain" src="#" alt="Logo aerolínea" />
                          </div>
                        <div class="flex items-center justify-between md:order-3 md:justify-end">
                          <div class="text-end md:order-4 md:w-32">
                            <p class="text-base font-bold text-gray-900 ">#842</p>
                          </div>
                        </div>
          
                        <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                            <div class="text-base font-medium text-gray-900 flex items-center justify-between gap-3">
                                <span>CALI</span>
                              
                                <!-- Separador con línea y texto -->
                                <span class="relative flex items-center w-full max-w-[80px]">
                                  <hr class="w-full h-px bg-gray-200">
                                  <span class="absolute left-1/2 -translate-x-1/2 bg-white px-2 text-sm text-gray-400">1h:39m</span>
                                </span>
                              
                                <span>PANAMA</span>
                              </div>
                              <div class="my-6">
                                <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full">Hora para reserva : 18:30:00</span>
                                <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">Internacional</span>
                              </div>
                              <hr class="bg-gray-200 border-0 h-px w-full" />  
                                
                          <div class="flex items-center gap-4">
                            <a href="../Page/informacion.html" type="button" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 hover:underline cursor-pointer">
                              <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                              </svg>
                              Reservar
                            </a>
          
                            <a type="button" class="inline-flex items-center text-sm font-medium text-red-600 ">
                              <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                              </svg>
                              No reservado
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
    
                    <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm -800 md:p-6">
                        <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                            <div class="h-14 w-36 flex items-center justify-center">
                                <img class="max-h-full max-w-full object-contain" src="#" alt="Logo aerolínea" />
                            </div>
                          <div class="flex items-center justify-between md:order-3 md:justify-end">
                            <div class="text-end md:order-4 md:w-32">
                              <p class="text-base font-bold text-gray-900 ">#6909</p>
                            </div>
                          </div>
            
                          <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                              <div class="text-base font-medium text-gray-900 flex items-center justify-between gap-3">
                                  <span>GUAPI</span>
                                
                                  <!-- Separador con línea y texto -->
                                  <span class="relative flex items-center w-full max-w-[80px]">
                                    <hr class="w-full h-px bg-gray-200">
                                    <span class="absolute left-1/2 -translate-x-1/2 bg-white px-2 text-sm text-gray-400">0h:50m</span>
                                  </span>
                                
                                  <span>CALI</span>
                                </div>
                                <div class="my-6">
                                  <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full">Hora para reserva : 11:32:00</span>
                                  <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">Nacional</span>
                                </div>
                                <hr class="bg-gray-200 border-0 h-px w-full" />  
                                  
                            <div class="flex items-center gap-4">
    
            
                              <a type="button" class="inline-flex items-center text-sm font-medium text-green-600 ">
                                <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd"/>
                                  </svg>
                                Reservado
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
    
                  </div>
                </div>
              </div>
            </div>
    </section>
</body>
</html>
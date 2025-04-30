<div >
    <section class="bg-white py-8 antialiased md:py-16">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="mx-auto max-w-5xl">
                <div class="my-8 xl:mb-16 xl:mt-12">
                    <img class="w-full" src="{{ asset('storage/'.$event->image_secondary) }}" alt="{{ $event->name }}" />
                </div>
                <div class="mb-6 space-y-6 md:mb-12"> 
                    <p class="text-base font-normal text-gray-500">{!! $event->description !!}</p>
                </div>
                <section class="bg-white dark:bg-gray-900">
                    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
                        <dl class="grid max-w-screen-md gap-8 mx-auto text-gray-900 sm:grid-cols-3 dark:text-white">
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-3xl md:text-4xl font-extrabold">{{$days}}</dt>
                                <dd class="font-light text-gray-500 dark:text-gray-400">Dias</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-3xl md:text-4xl font-extrabold">{{$hours}}</dt>
                                <dd class="font-light text-gray-500 dark:text-gray-400">Horas</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-3xl md:text-4xl font-extrabold">{{$minutes}}</dt>
                                <dd class="font-light text-gray-500 dark:text-gray-400">Minutos</dd>
                            </div>
                        </dl>
                    </div>
                  </section>
                <div class="text-center">
                    <a href="{{route('event.flights',$event->slug)}}" class="mb-2 mr-2 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100">Iterinarios</a>
                </div>
            </div>
        </div>
    </section>
    <script>
        setInterval(() => {
            // Llamamos al método de Livewire para actualizar el contador
            Livewire.emit('refreshTimer');
        }, 60000); // Actualiza cada minuto
    </script>

</div>


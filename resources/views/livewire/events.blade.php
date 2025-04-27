<div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
    <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
        @foreach($events as $event)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg ">
            <a href="./Page/Info.html">
                <img class="rounded-t-lg nunito-extrabold" src="{{ asset('storage/'.$event->image_primary) }}" alt="{{ $event->name }}" />
            </a>
            <div class="p-5">
                <a href="./Page/Info.html">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $event->name }}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 poppins-regular "> {!! \Illuminate\Support\Str::limit(strip_tags($event->description), 200, '...') !!}</p>
                <a href="{{route('event.detail', $event->slug)}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 poppins-medium ">
                    Participar
                     <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

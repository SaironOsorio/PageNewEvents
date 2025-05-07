@php
$bookFlights = $totalFlights > 0 ? round(($bookAll / $totalFlights) * 100, 0) : 0;
$unBookFlights = $totalFlights > 0 ? round(($unBookFlights / $totalFlights)*100, 0): 0
@endphp
<div class="col-span-2 grid grid-cols-2 justify-items-center items-center">
    <div class="col-span-2">
        <h1 class="text-center text-3xl font-bold mb-5">Estadisticas generales del evento</h1>
    </div>
    <div class="col-span-2">
        <div class="flex gap-6">
            <div class="font-semibold">
                <h5 class="mb-5">{{__('Booked flights')}}</h5>
                <div class="radial-progress text-[#0D2C99]" style="--value:{{$bookFlights}};" role="progressbar">
                    {{$bookFlights}}%
                </div>
            </div>
            <div class="font-semibold">
                <h5 class="mb-5">{{__('Available flights')}}</h5>
                <div class="radial-progress text-[#0D2C99]" style="--value:{{$unBookFlights}};" role="progressbar">
                    {{$unBookFlights}}%</div>
            </div>
        </div>
    </div>
</div>
<div>
    <section class="bg-white py-8 antialiased md:py-16">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="mx-auto max-w-5xl">
                <div class="my-8 xl:mb-16 xl:mt-12">
                    <h1 class="text-6xl font-bold mb-12">{{ $event->name }}</h1>
                    <img class="w-full" src="{{ asset('storage/'.$event->image_secondary) }}"
                        alt="{{ $event->name }}" />
                </div>
                <div class="mb-6 space-y-6 md:mb-12">
                    <p class="text-base font-normal text-gray-500">{!! $event->description !!}</p>
                </div>
                <div class="text-center mb-12">
                    <a href="{{route('event.flights',$event->slug)}}"
                        class="rounded-lg border border-gray-200 bg-[#0D2C99] text-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-[#3C55AC] hover:text-[#D7D7DC] focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100">Reserva
                        acá</a>
                </div>
                <div class="mb-12">
                    <x-stats :bookAll="$bookFlights->count()" :totalFlights="$allFlights->count()"
                        :unBookFlights="$unBookFlights->count()" />
                </div>
                <section class="bg-white dark:bg-gray-900 mb-12">
                    <div
                        class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6 bg-[#0D2C99] text-center">
                        <div class="text-4xl text-white font-semibold mb-5">
                            <h4 id="countdonwMsg">Falta:</h4>
                        </div>
                        <div class="grid auto-cols-max grid-flow-col gap-5 text-center text-white justify-center">
                            <div class="flex flex-col">
                                <span class="countdown font-mono text-5xl">
                                    <span style="--value:0;" aria-live="polite" aria-label="15"
                                        id="countdownDays">00</span>
                                </span>
                                days
                            </div>
                            <div class="flex flex-col">
                                <span class="countdown font-mono text-5xl">
                                    <span style="--value:0;" aria-live="polite" aria-label="10"
                                        id="countdownHours">00</span>
                                </span>
                                hours
                            </div>
                            <div class="flex flex-col">
                                <span class="countdown font-mono text-5xl">
                                    <span style="--value:0;" aria-live="polite" aria-label="24"
                                        id="countdownMinutes">00</span>
                                </span>
                                min
                            </div>
                            <div class="flex flex-col">
                                <span class="countdown font-mono text-5xl">
                                    <span style="--value:0;" aria-live="polite" aria-label="59"
                                        id="countdownSeconds">00</span>
                                </span>
                                sec
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </section>
    <script>
        const eventTime = {{$eventDate}} * 1000;

        var countDownDate = new Date(eventTime).getTime();
        $(window).on('load', function(){
        // Update the count down every 1 second
        var x = setInterval(function () {
            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor(
                (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            $('#countdownSeconds').css('--value', seconds);
            $('#countdownMinutes').css('--value', minutes);
            $('#countdownHours').css('--value', hours);
            $('#countdownDays').css('--value', days);



            // Display the result in the element with id="countdown"
            document.getElementById("countdonwMsg").innerHTML = "{{__('Time left')}}:";
            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                $('#countdownSeconds').css('--value', 0);
                $('#countdownMinutes').css('--value', 0);
                $('#countdownHours').css('--value', 0);
                $('#countdownDays').css('--value', 0);
                document.getElementById("countdonwMsg").innerHTML = "{{ __("NOW!") }}";
            }
        }, 1000);
        });
    </script>

</div>
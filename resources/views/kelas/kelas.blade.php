<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Calio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @livewireStyles
</head>

@livewire('nav')
<body class="font-sans bg-gray-100 scroll-smooth" data-aos="zoom-in">
    <div class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/images/kelasbg.jpeg') }}" class="w-full h-full object-cover" alt="Banner">
        </div>
        <div class="relative z-10 text-center text-white mt-20" data-aos="fade-up">
            <img src="{{ asset('assets/images/logotulisan.png') }}" class="h-14 mx-auto my-3" alt="Calio Logo">
        </div>
    </div>

    <div class="mx-auto mt-16 mb-20 px-4 sm:px-6 md:px-8 text-center">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary1 mb-8" data-aos="fade-up">MULAI TUJUANMU</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8"  data-aos="flip-down">
            <div
                class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out max-w-screen-lg">
                <a href="{{ url('/workout') }}">
                <img class="w-full h-48 object-cover mb-4 rounded-md" src="{{ asset('assets/images/workout.avif') }}"
                    alt="Card 1">
                </a>
                <h2 class="text-3xl font-bold mb-4 text-primary1">WORKOUT</h2>
                <p class="text-gray-700">Workout untuk membentuk dan memperindah tubuhmu.</p>
                <div class="mt-6">
                    <livewire:button :buttonText="'Mulai'" :buttonAction="'/workout'"
                        class="bg-primary1 text-white px-6 py-2 rounded-full hover:bg-primary2" />
                </div>
            </div>
            <div
                class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out max-w-screen-lg">
                <a href="{{ url('/cardio') }}">
                <img class="w-full h-48 object-cover mb-4 rounded-md" src="{{ asset('assets/images/cardio.avif') }}"
                    alt="Card 2">
                </a>
                <h2 class="text-3xl font-bold mb-4 text-primary1">CARDIO</h2>
                <p class="text-gray-600">Cardio untuk membuat tubuh menjadi lebih sehat dan bugar.</p>
                <div class="relative z-10 flex flex-col items-center py-5">
                    <livewire:button :buttonText="'Mulai'" :buttonAction="'/cardio'" />
                </div>
            </div>

            <div
                class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out max-w-screen-lg">
                <a href="{{ url('/yoga') }}">
                <img class="w-full h-48 object-cover mb-4 rounded-md" src="{{ asset('assets/images/yoga.avif') }}"
                    alt="Card 3">
                </a>
                <h2 class="text-3xl font-bold mb-4 text-primary1">YOGA</h2>
                <p class="text-gray-600">Yoga untuk membuat tubuh menjadi rileks dan lega.</p>
                <div class="relative z-10 flex flex-col items-center py-5">
                    <livewire:button :buttonText="'Mulai'" :buttonAction="'/yoga'" />
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @livewire('footer')
    @livewireScripts
</body>

</html>

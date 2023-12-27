<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

<body class="bg-gray-100 justify-center">
    @livewire('nav')

    <div class="flex flex-row justify-center space-x-8 my-20">

        <div class="flex flex-col items-start">
            <div
                class="bg-white max-w-md p-8 rounded-lg shadow-md mb-8 hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out">
                <a href="{{ url('/jadwal') }}">
                    <img src="{{ asset('assets/images/hatha.jpeg') }}" alt="Yoga"
                        class="w-full h-48 object-cover rounded-md mb-4">
                </a>
                <h2 class="text-2xl font-bold text-primary1 mb-2">Hatha</h2>
                <p class="text-gray-600 mb-4">Menggabungkan postur tubuh (asana) dan teknik pernapasan (pranayama) untuk
                    mencapai keseimbangan antara tubuh dan pikiran.</p>
                <div class="relative z-10 flex flex-col items-center py-5">
                    <livewire:button :buttonText="'Atur'" :buttonAction="'/jadwal'" />
                </div>
            </div>

            <div
                class="bg-white max-w-md p-8 rounded-lg shadow-md mb-8 hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out">
                <a href="{{ url('/jadwal') }}">
                    <img src="{{ asset('assets/images/vanyasa.jpeg') }}" alt="Yoga"
                        class="w-full h-48 object-cover rounded-md mb-4">
                </a>
                <h2 class="text-2xl font-bold text-primary1 mb-2">Vanyasa</h2>
                <p class="text-gray-600 mb-4">Fokus pada pergerakan yang lancar dan berkelanjutan yang diselaraskan
                    dengan pernapasan.</p>
                <div class="relative z-10 flex flex-col items-center py-5">
                    <livewire:button :buttonText="'Atur'" :buttonAction="'/jadwal'" />
                </div>
            </div>

        </div>

        <div class="flex flex-col items-start my-5">

            <div
                class="bg-white max-w-md p-8 rounded-lg shadow-md mb-8 hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out">
                <a href="{{ url('/jadwal') }}">
                    <img src="{{ asset('assets/images/kundalini.jpeg') }}" alt="Yoga"
                        class="w-full h-48 object-cover rounded-md mb-4">
                </a>
                <h2 class="text-2xl font-bold text-primary1 mb-2">Kundalini</h2>
                <p class="text-gray-600 mb-4"> Fokus pada aktivasi energi kundalini, energi potensial yang terletak di
                    dasar tulang belakang.</p>
                <div class="relative z-10 flex flex-col items-center py-5">
                    <livewire:button :buttonText="'Atur'" :buttonAction="'/jadwal'" />
                </div>
            </div>

            <div
                class="bg-white max-w-md p-8 rounded-lg shadow-md mb-8 hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out">
                <a href="{{ url('/jadwal') }}">
                    <img src="{{ asset('assets/images/anusara.jpeg') }}" alt="Yoga"
                        class="w-full h-48 object-cover rounded-md mb-4">
                </a>
                <h2 class="text-2xl font-bold text-primary1 mb-2">Anusara</h2>
                <p class="text-gray-600 mb-4">Berfokus pada kesadaran hati dan pemahaman akan prinsip alam semesta.</p>
                <div class="relative z-10 flex flex-col items-center py-5">
                    <livewire:button :buttonText="'Atur'" :buttonAction="'/jadwal'" />
                </div>
            </div>

        </div>
    </div>

    @livewireScripts

</body>

</html>

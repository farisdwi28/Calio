<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workout</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-100 justify-center">
    @livewire('nav')

    <div class="flex flex-row justify-center my-20">

        <div class="flex flex-col items-start">
            <div
                class="bg-white max-w-md p-8 rounded-lg shadow-md mb-4 hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out">
                <a href="{{ url('/jadwal') }}">
                    <img src="{{ asset('assets/images/push up.avif') }}" alt="Sports"
                        class="w-full h-48 object-cover rounded-md mb-4">
                </a>
                <h2 class="text-2xl font-bold text-primary1 mb-2">Push Up</h2>
                <p class="text-gray-600 mb-4">Push Up melatih otot dada, trisep, bahu, dan inti. </p>
                <div class="relative z-10 flex flex-col items-center py-5">
                    <livewire:button :buttonText="'Atur'" :buttonAction="'/jadwal'" />
                </div>
            </div>

            <div
                class="bg-white max-w-md p-8 rounded-lg shadow-md mb-4 hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out">
                <a href="{{ url('/jadwal') }}">
                    <img src="{{ asset('assets/images/sit-ups.jpg') }}" alt="Sports"
                        class="w-full h-48 object-cover rounded-md mb-4">
                </a>
                <h2 class="text-2xl font-bold text-primary1 mb-2">Sit Up</h2>
                <p class="text-gray-600 mb-4">Sit Up dapat menguatkan otot perut.</p>
                <div class="relative z-10 flex flex-col items-center py-5">
                    <livewire:button :buttonText="'Atur'" :buttonAction="'/jadwal'" />
                </div>
            </div>

            <div
                class="bg-white max-w-md p-8 rounded-lg shadow-md mb-4 hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out">
                <a href="{{ url('/jadwal') }}">
                    <img src="{{ asset('assets/images/pull up.jpg') }}" alt="Sports"
                        class="w-full h-48 object-cover rounded-md mb-4">
                </a>
                <h2 class="text-2xl font-bold text-primary1 mb-2">Pull Up</h2>
                <p class="text-gray-600 mb-4">Pull Up meningkatkan kekuatan tubuh atas, khususnya otot punggung dan
                    bahu.</p>
                <div class="relative z-10 flex flex-col items-center py-5">
                    <livewire:button :buttonText="'Atur'" :buttonAction="'/jadwal'" />
                </div>
            </div>

        </div>

        <div class="flex flex-col items-start">

            <div
                class="bg-white max-w-md p-8 rounded-lg shadow-md mb-4 hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out">
                <a href="{{ url('/jadwal') }}">
                    <img src="{{ asset('assets/images/squat.jpg') }}" alt="Sports"
                        class="w-full h-48 object-cover rounded-md mb-4">
                </a>
                <h2 class="text-2xl font-bold text-primary1 mb-2">Squat</h2>
                <p class="text-gray-600 mb-4">Squat melatih otot paha, panggul, dan punggung.</p>
                <div class="relative z-10 flex flex-col items-center py-5">
                    <livewire:button :buttonText="'Atur'" :buttonAction="'/jadwal'" />
                </div>
            </div>

            <div
                class="bg-white max-w-md p-8 rounded-lg shadow-md mb-4 hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out">
                <a href="{{ url('/jadwal') }}">
                    <img src="{{ asset('assets/images/plank.jpg') }}" alt="Sports"
                        class="w-full h-48 object-cover rounded-md mb-4">
                </a>
                <h2 class="text-2xl font-bold text-primary1 mb-2">Plank</h2>
                <p class="text-gray-600 mb-4">Plank melatih otot punggung dan panggul.</p>
                <div class="relative z-10 flex flex-col items-center py-5">
                    <livewire:button :buttonText="'Atur'" :buttonAction="'/jadwal'" />
                </div>
            </div>

            <div
                class="bg-white max-w-md p-8 rounded-lg shadow-md mb-4 hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out">
                <a href="{{ url('/jadwal') }}">
                    <img src="{{ asset('assets/images/mountain clim.jpg') }}" alt="Sports"
                        class="w-full h-48 object-cover rounded-md mb-4">
                </a>
                <h2 class="text-2xl font-bold text-primary1 mb-2">Mountain Climbers</h2>
                <p class="text-gray-600 mb-4">Mountain Climbers melatih otot perut, lengan, dan kaki.</p>
                <div class="relative z-10 flex flex-col items-center py-5">
                    <livewire:button :buttonText="'Atur'" :buttonAction="'/jadwal'" />
                </div>
            </div>
        </div>
    </div>

    @livewireScripts

</body>

</html>

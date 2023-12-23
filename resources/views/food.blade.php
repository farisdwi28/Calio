<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <title>Menu Makanan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
@livewire('nav')
    <div class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/images/bgfood.jpg') }}" class="w-full h-full object-cover" alt="Banner">
        </div>
        <div class="relative z-10 text-center text-white mt-20">
            <img src="{{ asset('assets/images/logotulisan.png') }}" class="h-14 mx-auto my-3" alt="Calio Logo">
        </div>
    </div>

<div class="h-screen flex flex-col justify-center items-center">
    <h1 class="text-4xl text-primary1 font-bold mb-4 text-center">DAFTAR MENU</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <!-- Item 1 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md transform hover:scale-105 transition-transform duration-300">
            <img src="{{ asset('assets/images/Smoothiehijau.jpg') }}" alt="" class="w-full h-48 object-cover rounded-t-lg" />
            <div class="p-6">
                <h2 class="text-xl font-semibold mb-2 text-primary1">Smoothie Hijau</h2>
                <p class="text-gray-600">
                    Smoothie segar dengan campuran sayuran hijau, buah, dan yogurt
                    tanpa tambahan gula.
                </p>
            </div>
        </div>

        <!-- Item 2 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md transform hover:scale-105 transition-transform duration-300">
            <img src="{{ asset('assets/images/sayur.jpeg') }}" alt=""
                class="w-full h-48 object-cover rounded-t-lg" />
            <div class="p-6">
                <h2 class="text-xl font-semibold text-primary1 mb-2">Salad Sayur Segar</h2>
                <p class="text-gray-600">
                    Campuran berbagai sayuran segar dengan dressing rendah lemak.
                </p>
            </div>
        </div>

        <!-- Item 3 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md transform hover:scale-105 transition-transform duration-300">
            <img src="{{ asset('assets/images/buah.jpg') }}" alt=""
                class="w-full h-48 object-cover rounded-t-lg" />
            <div class="p-6">
                <h2 class="text-xl font-semibold text-primary1 mb-2">Smoothie Buah-buahan</h2>
                <p class="text-gray-600">
                    Smoothie segar dengan campuran berbagai buah-buahan tanpa tambahan
                    gula.
                </p>
            </div>
        </div>


        <!-- Item 4 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md transform hover:scale-105 transition-transform duration-300">
            <img src="{{ asset('assets/images/bowl.jpg') }}" alt=""
                class="w-full h-48 object-cover rounded-t-lg" />
            <div class="p-6">
                <h2 class="text-xl font-semibold text-primary1 mb-2">Quinoa Bowl</h2>
                <p class="text-gray-600">
                    Quinoa dengan sayuran, alpukat, dan protein tanpa lemak.
                </p>
            </div>
        </div>


    </div>


    <div class="relative z-10 flex flex-col items-center py-5">
            <livewire:button :buttonText="'Lihat Menu'" :buttonAction="'/food2'" />
    </div>

</div>

@livewire('footer')
@livewireScripts
</html>

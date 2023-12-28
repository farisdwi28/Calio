<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <title>Menu Makanan Sehat</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>


<body class="bg-gray-100">
    <div class="container mx-auto mt-8">
        <h1 class="text-4xl text-primary1 font-bold mb-4 text-center">DAFTAR MENU</h1>


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Item 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105">
                <img src="{{ asset('assets/images/sayur.jpeg') }}" alt="" class="w-full h-48 object-cover mb-4 rounded" />
                <h2 class="text-3xl font-bold mb-4 text-primary1">Salad Sayur Segar</h2>
                <p class="text-gray-600">
                    Campuran berbagai sayuran segar dengan dressing rendah lemak.
                </p>
                <div class="relative z-10 flex flex-row items-center">
                    <div class="mr-4 mt-5">
                        <livewire:button :buttonText="'Beli'" />
                    </div>
                    <div class="mt-5">
                        <a href="{{ url('/detail') }}">
                            <livewire:button :buttonText="'Lihat Detail'" :buttonAction="'/detail'" />
                        </a>
                    </div>
                </div>
            </div>


            <!-- Item 2 -->
            <div
                class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105">
                <img src="{{ asset('assets/images/buah.jpg') }}" alt="" class="w-full h-48 object-cover mb-4 rounded" />
                <h2 class="text-3xl font-bold mb-4 text-primary1">Smoothie Buah</h2>
                <p class="text-gray-600">
                    Smoothie segar dengan campuran berbagai buah-buahan tanpa tambahan
                    gula.
                </p>
                <div class="relative z-10 flex flex-row items-center">
                    <div class="mr-4 mt-5">
                        <livewire:button :buttonText="'Beli'" />
                    </div>
                    <div class="mt-5">
                        <livewire:button :buttonText="'Lihat Detail'" />
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div
                class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105">
                <img src="{{ asset('assets/images/bowl.jpg') }}" alt="" class="w-full h-48 object-cover mb-4 rounded" />
                <h2 class="text-3xl font-bold mb-4 text-primary1">Quinoa Bowl</h2>
                <p class="text-gray-600">
                    Quinoa dengan sayuran, alpukat, dan protein tanpa lemak.
                </p>
                <div class="relative z-10 flex flex-row items-center">
                    <div class="mr-4 mt-5">
                        <livewire:button :buttonText="'Beli'" />
                    </div>
                    <div class="mt-5">
                        <livewire:button :buttonText="'Lihat Detail'" />
                    </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div
                class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105">
                <img src="{{ asset('assets/images/Smoothie.jpg') }}"" alt="" class="w-full h-48 object-cover mb-4 rounded" />
                <h2 class="text-3xl font-bold mb-4 text-primary1">Smoothie Bowl</h2>
                <p class="text-gray-600">
                    Bowl berisi smoothie, granola, dan potongan buah-buahan.
                </p>
                <div class="relative z-10 flex flex-row items-center">
                    <div class="mr-4 mt-5">
                        <livewire:button :buttonText="'Beli'" />
                    </div>
                    <div class="mt-5">
                        <livewire:button :buttonText="'Lihat Detail'" />
                    </div>
                </div>
            </div>

            <!-- Item 5 -->
            <div
                class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105">
                <img src="{{ asset('assets/images/saladayam.jpeg') }}"alt="" class="w-full h-48 object-cover mb-4 rounded" />
                <h2 class="text-3xl font-bold mb-4 text-primary1">Salad Ayam </h2>
                <p class="text-gray-600">
                    Salad sehat dengan potongan ayam panggang, sayuran segar.
                </p>
                </p>
                <div class="relative z-10 flex flex-row items-center">
                    <div class="mr-4 mt-5">
                        <livewire:button :buttonText="'Beli'" />
                    </div>
                    <div class="mt-5">
                        <livewire:button :buttonText="'Lihat Detail'" />
                    </div>
                </div>
            </div>

            <!-- Item 6 -->
            <div
                class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105">
                <img src="{{ asset('assets/images/avocado toast.jpg') }}" alt="" class="w-full h-48 object-cover mb-4 rounded" />
                <h2 class="text-3xl font-bold mb-4 text-primary1">Avocado Toast</h2>
                <p class="text-gray-600">
                    Roti panggang dengan lapisan alpukat segar, tomat cherry, dan lada
                    hitam.
                </p>
                <div class="relative z-10 flex flex-row items-center">
                    <div class="mr-4 mt-5">
                        <livewire:button :buttonText="'Beli'" />
                    </div>
                    <div class="mt-5">
                        <livewire:button :buttonText="'Lihat Detail'" />
                    </div>
                </div>
            </div>

            <!-- Item 7 -->
            <div
                class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105">
                <img src="{{ asset('assets/images/chiapudding.webp') }}" alt="" class="w-full h-48 object-cover mb-4 rounded" />
                <h2 class="text-3xl font-bold mb-4 text-primary1">Chia Pudding</h2>
                <p class="text-gray-600">
                    Puding chia dengan lapisan buah-buahan segar dan biji chia, tanpa
                    tambahan gula.

                </p>
                <div class="relative z-10 flex flex-row items-center">
                    <div class="mr-4 mt-5">
                        <livewire:button :buttonText="'Beli'" />
                    </div>
                    <div class="mt-5">
                        <livewire:button :buttonText="'Lihat Detail'"/>
                    </div>
                </div>
            </div>

            <!-- Item 8 -->
            <div
                class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105">
                <img src="{{ asset('assets/images/salmon.jpg') }}" alt="" class="w-full h-48 object-cover mb-4 rounded" />
                <h2 class="text-3xl font-bold mb-4 text-primary1">Grilled Salmon</h2>
                <p class="text-gray-600">
                    Ikan salmon panggang dengan rempah segar, disajikan dengan sayuran
                    kukus.
                </p>
                <div class="relative z-10 flex flex-row items-center">
                    <div class="mr-4 mt-5">
                        <livewire:button :buttonText="'Beli'" />
                    </div>
                    <div class="mt-5">
                        <livewire:button :buttonText="'Lihat Detail'" />
                    </div>
                </div>
            </div>

            <!-- Item 9 -->
            <div
                class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105">
                <img src="{{ asset('assets/images/oatmeal.jpeg') }}" alt="" class="w-full h-48 object-cover mb-4 rounded" />
                <h2 class="text-3xl font-bold mb-4 text-primary1">Oatmeal</h2>
                <p class="text-gray-600">
                    Bubur oat dengan potongan buah-buahan segar dan madu sebagai pemanis
                    alami.
                </p>
                <div class="relative z-10 flex flex-row items-center">
                    <div class="mr-4 mt-5">
                        <livewire:button :buttonText="'Beli'" />
                    </div>
                    <div class="mt-5">
                        <livewire:button :buttonText="'Lihat Detail'" />
                    </div>
                </div>
            </div>

            <!-- Item 10 -->
            <div
                class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105">
                <img src="{{ asset('assets/images/GreekSalad.webp') }}" alt="" class="w-full h-48 object-cover mb-4 rounded" />
                <h2 class="text-3xl font-bold mb-4 text-primary1">Greek Salad</h2>
                <p class="text-gray-600">
                    Salad ala Yunani dengan campuran tomat, mentimun, feta, dan olive.
                </p>
                <div class="relative z-10 flex flex-row items-center">
                    <div class="mr-4 mt-5">
                        <livewire:button :buttonText="'Beli'" />
                    </div>
                    <div class="mt-5">
                        <livewire:button :buttonText="'Lihat Detail'" />
                    </div>
                </div>
            </div>

            <!-- Item 11 -->
            <div
                class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105">
                <img src="{{ asset('assets/images/sausalpukat.jpg') }}" alt="" class="w-full h-48 object-cover mb-4 rounded" />
                <h2 class="text-3xl font-bold mb-4 text-primary1">Sweet Potato Fries</h2>
                <p class="text-gray-600">
                    Kentang manis panggang yang dipotong memanjang, disajikan dengan
                    saus alpukat.
                </p>
                <div class="relative z-10 flex flex-row items-center">
                    <div class="mr-4 mt-5">
                        <livewire:button :buttonText="'Beli'" />
                    </div>
                    <div class="mt-5">
                        <livewire:button :buttonText="'Lihat Detail'" />
                    </div>
                </div>
            </div>

            <!-- Item 12 -->
            <div
                class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105">
                <img src="{{ asset('assets/images/Vegetable.jpg') }}" alt="" class="w-full h-48 object-cover mb-4 rounded" />
                <h2 class="text-3xl font-bold mb-4 text-primary1">Vegetable Stir-Fry</h2>
                <p class="text-gray-600">
                    Sayuran segar yang diaduk dengan bumbu rendah garam dan minyak
                    zaitun.
                </p>
                <div class="relative z-10 flex flex-row items-center">
                    <div class="mr-4 mt-5">
                        <livewire:button :buttonText="'Beli'" />
                    </div>
                    <div class="mt-5">
                        <livewire:button :buttonText="'Lihat Detail'" />
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>

</html>

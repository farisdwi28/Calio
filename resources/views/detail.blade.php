<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Healthy Food Information</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>


<body class="font-sans bg-gray-100 flex flex-col min-h-screen">

    <div class="flex-grow max-w-screen-md mx-auto mt-8 p-4 bg-white rounded-lg shadow-md flex flex-col md:flex-row items-center justify-center transition-all duration-500 ease-in-out transform hover:scale-105">

        <div class="md:flex-1 p-4">
            <div class="flex items-center mb-4">
                <h2 class="text-4xl font-extrabold text-primary1 mr-4">Salad Sayur Segar</h2>
                <div class="bg-primary1 text-white p-3 rounded-lg">
                    <p class="font-semibold text-lg">Rp.20.000</p>
                </div>
            </div>

            <p class="text-gray-800 mb-6">
                Temukan kelezatan sayuran segar yang menyehatkan dan nikmati nutrisi lengkap dalam setiap gigitan.
                Salad Sayur Segar membantu perjalanan menuju berat badan yang sehat dengan antioksidan alami dan
                kandungan airnya yang menjaga kelembapan kulit.
            </p>

            <div class="grid grid-cols-2 gap-4">
                <p><strong>Kalori:</strong> 9 g</p>
                <p><strong>Protein:</strong> 0.04g</p>
                <p><strong>Karbohidrat:</strong> 1.75g</p>
                <p><strong>Lemak:</strong> 0.13g</p>
                <div class="bg-primary1 text-white p-3 rounded-lg">
                    <p class="font-semibold text-lg">Rp.20.000</p>
                </div>
            </div>
        </div>

        <div class="md:flex-1">
            <img src="{{ asset('assets/images/sayur.jpeg') }}" alt="Salad Sayur Segar"
                class="w-full h-full object-cover rounded-lg shadow-md">
        </div>
    </div>

    <div class="mt-8">
        @livewire('footer')
    </div>

    @livewireScripts
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Makanan Sehat</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-100 font-sans">

    @livewire('nav')

    <main class="container mx-auto my-10 p-8 bg-white shadow-lg rounded-lg">

        <div class="grid md:grid-cols-2 gap-8 py-10">
            <div class="flex justify-center mb-8">
                <img src="https://source.unsplash.com/800x400/?healthy-food" alt="Makanan Sehat"
                    class="w-full max-w-2xl h-auto object-cover rounded shadow-lg transition-transform transform hover:scale-105">
            </div>

            <div class="p-5 py-10">
                <h2 class="text-3xl lg:text-4xl font-bold mb-4 text-gray-800">Manfaat Makanan Sehat</h2>

                <ul class="list-disc ml-8 text-lg text-gray-700">
                    <li>Menyediakan nutrisi yang dibutuhkan tubuh</li>
                    <li>Mengurangi risiko penyakit jantung</li>
                    <li>Mendukung penurunan berat badan</li>
                    <li>Meningkatkan energi dan daya tahan tubuh</li>
                </ul>

                <p class="mt-6 text-lg text-gray-800">Makanan sehat dapat membantu meningkatkan kualitas hidup dengan
                    menyediakan nutrisi penting yang mendukung fungsi tubuh secara optimal. Nutrisi ini tidak hanya
                    diperlukan untuk pertumbuhan dan perkembangan, tetapi juga untuk menjaga sistem kekebalan tubuh agar
                    tetap kuat melawan penyakit.</p>

                <p class="mt-6 text-lg text-gray-800">Terlepas dari manfaat fisik, makanan sehat juga dapat berkontribusi
                    pada kesejahteraan mental. Beberapa makanan dikenal memiliki efek positif pada suasana hati dan
                    keseimbangan emosional.</p>
            </div>
        </div>

    </main>

    @livewire('footer')
    @livewireScripts

</body>

</html>

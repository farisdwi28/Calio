<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Manfaat Yoga</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-100 font-sans">
    @livewire('nav')

    <main class="container mx-auto my-10 p-8 bg-white shadow-lg rounded-lg">

        <div class="grid md:grid-cols-2 gap-8 py-10">
            <div class="flex justify-center mb-8">
                <img src="https://source.unsplash.com/400x400/?yoga" alt="Yoga"
                    class="w-full max-w-2xl h-auto object-cover rounded shadow-lg transition-transform transform hover:scale-105">
            </div>

            <div class="p-5 py-10">
                <h2 class="text-3xl lg:text-4xl font-bold mb-4 text-gray-800">Manfaat Yoga untuk Kesehatan</h2>

                <p class="mt-6 text-lg text-gray-800">Yoga adalah praktik kuno yang berasal dari India yang mencakup
                    aspek-aspek fisik, mental, dan spiritual. Berikut adalah beberapa manfaat yoga untuk kesehatan:</p>

                <ul class="list-disc ml-8 text-lg text-gray-700">
                    <li>Meningkatkan fleksibilitas dan kekuatan tubuh</li>
                    <li>Mengurangi stres dan kecemasan</li>
                    <li>Memperbaiki postur tubuh</li>
                    <li>Meningkatkan konsentrasi dan fokus</li>
                </ul>

                <p class="mt-6 text-lg text-gray-800">Praktik yoga juga dapat membantu mencapai keseimbangan dalam
                    kehidupan sehari-hari dan meningkatkan kesejahteraan secara keseluruhan. Melalui perpaduan gerakan
                    tubuh, pernapasan, dan meditasi, seseorang dapat merasakan manfaat positif secara menyeluruh.</p>

                <p class="mt-6 text-lg text-gray-800">Selain manfaat fisik, yoga juga dapat menjadi sarana untuk
                    menemukan kedamaian batin dan menjalani gaya hidup yang lebih seimbang.</p>

                <p class="mt-6 text-lg text-gray-800">
                    Melalui latihan pernapasan yang terstruktur, yoga juga dapat memperbaiki fungsi sistem pernapasan dan
                    meningkatkan energi secara keseluruhan. Manfaat yoga tidak hanya terbatas pada aspek fisik,
                    tetapi juga mencakup pemahaman diri, peningkatan kesadaran, dan pencapaian keseimbangan holistik
                    dalam kehidupan sehari-hari.
                </p>
            </div>
        </div>

    </main>

    @livewire('footer')
    @livewireScripts
</body>

</html>

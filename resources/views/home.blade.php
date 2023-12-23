<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @livewireStyles
</head>

<body>
    @livewire('nav')
    <div class="h-screen relative flex items-center justify-center">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/images/bgnew.jpg') }}" class="w-full h-full opacity-70 object-cover">
        </div>
        <div class="relative z-5 text-center items-center" data-aos="fade-up">
            <img src="{{ asset('assets/images/logotulisan.png') }}" class="h-14 mx-auto my-3" alt="Calio Logo">
        </div>
    </div>

    <div class="flex justify-center my-20">
        <div class="text-center">
            <h1 class="text-4xl text-primary1 font-bold mb-4" data-aos="fade-down">RENCANAKAN TUJUAN <br> UNTUK TUBUH YANG SEHAT</h1>
            <p class="text-black mb-8" data-aos="fade-down">"Bukan hanya tentang olahraga, tapi juga tentang perubahan positif.<br> Temukan
                inspirasi di setiap rencana bersama kami dan tingkatkan kualitas hidup anda."</p>
            <div class="flex flex-cols-1 md:flex-cols-1 lg:flex-cols-2 xl:flex-cols-2 justify-center gap-10">
                <div class="flex flex-col justify-center text-center items-center" data-aos="fade-right">
                    <a href="{{ url('/food') }}">
                        <img src="{{ asset('assets/images/Food.jpeg') }}"
                            class="w-[150px] h-[150px] outline outline-primary1 rounded-full transform hover:scale-110 transition-all duration-300 ease-in-out">
                    </a>
                    <div class="relative z-10 flex flex-col items-center py-5">
                        <div class="relative z-10 flex flex-col items-center">
                            <livewire:button :buttonText="'Rencana Makan'" :buttonAction="'/food'" />
                        </div>
                    </div>
                    <p>Rencanakan makanan sehat <br> bersama kami. </p>
                </div>
                <div class="flex flex-col justify-center text-center items-center" data-aos="fade-left">
                    <a href="{{ url('/kelas') }}">
                        <img src="{{ asset('assets/images/Sport.jpeg') }}"
                            class="w-[150px] h-[150px] outline outline-primary1 rounded-full transform hover:scale-110 transition-all duration-300 ease-in-out">
                    </a>
                    <div class="relative z-10 flex flex-col items-center py-5">
                        <livewire:button :buttonText="'Kelas'" :buttonAction="'/kelas'" />
                    </div>
                    <p>Mulailah berolahraga <br> dimulai dari sini </p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-10">
        <h1 class="text-4xl text-primary1 font-bold mb-4" data-aos="fade-down">ARTIKEL SEPUTAR KESEHATAN</h1>
        <p class="text-black mb-8" data-aos="fade-down"><br>"Selami Dunia Kesehatan dengan Informasi Terkini! <br> Temukan Rangkuman Menarik
            dan Artikel Penuh Wawasan tentang Kesehatan Mental, Tips Gaya Hidup Sehat, Pengelolaan Stres,<br> serta
            Inovasi Terbaru dalam Dunia Kesehatan. Jangan Lewatkan Kesempatan untuk Meningkatkan Kualitas Hidup Anda
            melalui Pengetahuan <br> yang Mendalam di Artikel Kesehatan Kami yang Penuh Insight!"</p>
    </div>
    <div class="flex flex-row gap-3 relative justify-center my-14" data-aos="zoom-in">
        <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
            <div
                class="relative h-auto mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aGVhbHRoeSUyMGZvb2R8ZW58MHx8MHx8fDA%3D"
                    alt="card-image" />
            </div>
            <div class="p-6">
                <h5
                    class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                    Artikel Sehat
                </h5>
                <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                    Penting untuk menciptakan pola makan sehat dengan memasukkan berbagai jenis makanan dan membatasi
                    konsumsi gula tambahan, lemak jenuh, dan sodium. Makanan sehat bukan hanya tentang memenuhi
                    kebutuhan nutrisi, tetapi juga tentang menciptakan hubungan positif dengan makanan dan gaya hidup
                    sehat secara keseluruhan.
                </p>
            </div>
            <div class="p-6 pt-0">
                <div class="relative z-10 flex flex-col items-center py-5">
                    <livewire:button :buttonText="'Baca Lebih'" :buttonAction="'/artikel1'" />
                </div>
            </div>
        </div>
        <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
            <div
                class="relative h-auto mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                <img src="https://images.unsplash.com/photo-1588286840104-8957b019727f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8eW9nYXxlbnwwfHwwfHx8MA%3D%3D"
                    alt="card-image" />
            </div>
            <div class="p-6">
                <h5
                    class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                    Artikel Sehat
                </h5>
                <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                    Yoga adalah seni kuno yang menggabungkan gerakan tubuh, pernapasan, meditasi, dan filosofi untuk
                    mencapai keseimbangan dan keharmonisan antara tubuh, pikiran, dan jiwa. Lebih dari sekadar
                    serangkaian latihan fisik, yoga merupakan perjalanan batin yang mengundang individu untuk
                    menjelajahi dan menyatukan dimensi-dimensi mereka yang berbeda.. </p>
            </div>
            <div class="p-6 pt-0">
                <div class="relative z-10 flex flex-col items-center py-5">
                    <livewire:button :buttonText="'Baca Lebih'" :buttonAction="'/artikel'" />
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

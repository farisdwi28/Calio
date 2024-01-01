<div data-aos="zoom-in">
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
            <h1 class="text-4xl text-primary1 font-bold mb-4" data-aos="fade-down">RENCANAKAN TUJUAN <br> UNTUK TUBUH
                YANG SEHAT</h1>
            <p class="text-black mb-8" data-aos="fade-down">"Bukan hanya tentang olahraga, tapi juga tentang perubahan
                positif.<br> Temukan
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
        <p class="text-black mb-8" data-aos="fade-down"><br>"Selami Dunia Kesehatan dengan Informasi Terkini! <br>
            Temukan Rangkuman Menarik
            dan Artikel Penuh Wawasan tentang Kesehatan Mental, Tips Gaya Hidup Sehat, Pengelolaan Stres,<br> serta
            Inovasi Terbaru dalam Dunia Kesehatan. Jangan Lewatkan Kesempatan untuk Meningkatkan Kualitas Hidup Anda
            melalui Pengetahuan <br> yang Mendalam di Artikel Kesehatan Kami yang Penuh Insight!"</p>
    </div>
    <div class="flex flex-col">
        <div class="flex gap-3 relative justify-center my-14 overflow-x-scroll" data-aos="zoom-in">
            @if (count($articles) > 0)
                @foreach ($articles as $artikel)
                    <div
                        class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <a href="{{ url('/artikel', $artikel->id) }}">
                            <div
                                class="relative h-auto mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                                <img src="{{ url('storage/' . $artikel->photo) }}" alt="card-image" class="w-full h-80" />
                            </div>
                        </a>
                        <div class="p-6">
                            <h5
                                class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                {{ $artikel->title }}
                            </h5>
                            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                {{ $artikel->shortdescription }}
                            </p>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="relative z-10 flex flex-col items-center py-5">
                                <a href="{{ url('/artikel', $artikel->id) }}" type="button"
                                    class="group relative overflow-hidden bg-primary1 focus:ring-4 focus:ring-blue-300 inline-flex items-center px-7 py-2.5 rounded-lg text-white justify-center transition-all transform hover:scale-105">
                                    Lihat Artikel
                                    <svg class="z-40 ml-2 -mr-1 w-4 h-4 transition-all duration-300 transform group-hover:translate-x-1"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <div
                                        class="absolute inset-0 h-[200%] w-[200%] rotate-45 translate-x-[-70%] transition-all group-hover:scale-100 bg-white/30 group-hover:translate-x-[50%] z-20 duration-1000">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div
                    class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-2 text-3xl font-bold text-gray-900 text-primary1">Tidak Ada Artikel</h5>
                </div>
            @endif
        </div>
    </div>
</div>

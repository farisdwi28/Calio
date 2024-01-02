<div class="space-2">
    <div class="relative min-h-screen flex flex-col items-center justify-center overflow-hidden">
        <div class="absolute inset-0 flex flex-col items-center justify-center top-[-100%] bottom-[-40%]">
            <img src="{{ asset('assets/images/bgfood.jpg') }}" class="w-full h-1/6 object-cover" alt="Banner">
            <img src="{{ asset('assets/images/logotulisan.png') }}"
                class="h-20 mb-3 absolute top-1/2 transform -translate-y-1/2" alt="Banner Logo">
        </div>
        <div class="mb-8"> <!-- Add margin-bottom here -->
            <h1 class="text-4xl sm:text-5xl text-primary1 font-bold text-center mb-3 sm:mb-5 md:mb-8">MAKANAN</h1>
        </div>
    </div>

    <!-- Food Section -->
    <div
        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-5 mt-[-10%] sm:mt-[-15%] md:mt-[-20%] lg:mt-[-25%]">
        @foreach ($makans as $makan)
            @if ($makan->kategori == 'makanan')
                <div
                    class="bg-white rounded-lg overflow-hidden shadow-md transform hover:scale-105 transition-transform duration-300 mb-6 sm:mb-10 md:mb-14 lg:mb-8">
                    <img src="{{ url('storage/' . $makan->photo) }}" alt="{{ $makan->name }}"
                        class="w-full h-48 object-cover rounded-t-lg" />
                    <div class="p-4">
                        <h2 class="text-3xl font-bold mb-2 text-primary1">{{ $makan->name }}</h2>
                        <p class="text-semibold">{{ $makan->description }}</p>
                        <p class="text-primary1 font-bold">Harga: {{ $makan->harga }}</p>
                        <p class="text-primary1 font-bold">Stok: {{ $makan->stok }}</p>
                        <div class="relative z-10 flex flex-row items-center">
                            <div class="mr-4 mt-5">
                                <div class="relative z-10 flex flex-col items-center py-5">
                                    <a href="{{ url('/formpembayaran', $makan->id) }}" type="button"
                                        class="group relative overflow-hidden bg-primary1 focus:ring-4 focus:ring-blue-300 inline-flex items-center px-7 py-2.5 rounded-lg text-white justify-center transition-all transform hover:scale-105">
                                        Beli
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
                            <div class="mt-5">
                                <livewire:button :buttonText="'Lihat Detail'" />
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>


    <div class="mb-8"> <!-- Add margin-bottom here -->
        <h1 class="text-4xl sm:text-5xl text-primary1 font-bold text-center mb-3 sm:mb-5 md:mb-8">MINUMAN</h1>
    </div>
    <!-- Drink Section -->
    <div
        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-5 mt-2 sm:mt-6 md:mt-12 lg:mt-20">
        @foreach ($makans as $makan)
            @if ($makan->kategori == 'minuman')
                <div
                    class="bg-white rounded-lg overflow-hidden shadow-md transform hover:scale-105 transition-transform duration-300 mb-6 sm:mb-10 md:mb-14 lg:mb-8">
                    <img src="{{ url('storage/' . $makan->photo) }}" alt="{{ $makan->name }}"
                        class="w-full h-48 object-cover rounded-t-lg" />
                    <div class="p-4">
                        <h2 class="text-3xl font-bold mb-2 text-primary1">{{ $makan->name }}</h2>
                        <p class="text-semibold">{{ $makan->description }}</p>
                        <p class="text-primary1 font-bold">Harga: {{ $makan->harga }}</p>
                        <p class="text-primary1 font-bold">Stok: {{ $makan->stok }}</p>
                        <div class="relative z-10 flex flex-row items-center">
                            <div class="mr-4 mt-5">
                                <div class="relative z-10 flex flex-col items-center py-5">
                                    <a href="{{ url('/formpembayaran', $makan->id) }}" type="button"
                                        class="group relative overflow-hidden bg-primary1 focus:ring-4 focus:ring-blue-300 inline-flex items-center px-7 py-2.5 rounded-lg text-white justify-center transition-all transform hover:scale-105">
                                        Beli
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
                            <div class="mt-5">
                                <livewire:button :buttonText="'Lihat Detail'" />
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

</div>

<div>
    <div class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/images/bgfood.jpg') }}" class="w-full h-full object-cover" alt="Banner">
        </div>
        <div class="relative z-10 text-center text-white mt-20">
            <img src="{{ asset('assets/images/logotulisan.png') }}" class="h-14 mx-auto my-3" alt="Calio Logo">
        </div>
    </div>
    <div class="h-screen flex flex-col justify-center items-center">
        <h1 class="text-4xl text-primary1 font-bold mb-4 text-center mt-5 mb-10">DAFTAR MENU</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <!-- Item 1 -->
            @foreach ($makans as $makan)
                <div
                    class="bg-white rounded-lg overflow-hidden shadow-md transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ url('storage/' . $makan->photo) }}" alt=""
                        class="w-full h-48 object-cover rounded-t-lg" />
                    <div class="p-6">
                        <h2 class="text-3xl font-bold mb-2 text-primary1">{{ $makan->name }}</h2>
                        <p class="text-semibold">{{ $makan->description }}</p>
                        <p class="text-primary1 font-ibold">Harga: {{ $makan->harga }}</p>
                        <p class="text-primary1 font-bold">Stok: {{ $makan->stok }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="h-full flex flex-col justify-center items-center mb-10">
            <livewire:button :buttonText="'Lihat Menu'" :buttonAction="'/food2'" />
        </div>
    </div>
</div>

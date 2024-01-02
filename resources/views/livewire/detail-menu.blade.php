<div class="flex flex-col items-center justify-center pt-4">
    <h2 class="text-4xl font-extrabold text-primary1 text-center pb-4">Detail Menu</h2>
    <div class="flex-grow max-w-screen-md mx-auto p-4 bg-white rounded-lg shadow-md flex flex-col md:flex-row items-center justify-center transition-all duration-500 ease-in-out transform hover:scale-105">
        <div class="md:flex-1 p-4">
            <div class="flex items-center mb-4">
                <h2 class="text-4xl font-extrabold text-primary1 mr-4 hidden md:block">{{ $makanan->name }}</h2>
                <div class="bg-primary1 text-white p-3 rounded-lg">
                    <p class="font-semibold text-lg">{{ $makanan->harga }}</p>
                </div>
            </div>

            <p class="text-gray-800 mb-6">
                {{ $makanan->description }}
            </p>

            <p class="font-semibold"><strong>Kategori:</strong></p>
            <p>{{ $makanan->kategori }}</p>
        </div>

        <div class="md:flex-1">
            <img src="{{ url('storage/' . $makanan->photo) }}" alt="Salad Sayur Segar"
                class="w-full h-full object-cover rounded-lg shadow-md">
        </div>
    </div>
</div>

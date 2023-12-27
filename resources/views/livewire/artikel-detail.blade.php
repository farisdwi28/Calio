<div class="container mx-auto my-8 p-8 bg-white shadow-lg rounded-lg">
    <div class="grid md:grid-cols-2 gap-8 py-10">
        <div class="flex justify-center mb-8" data-aos="fade-right">
            <img src="{{ url('storage/' . $article->photo) }}" alt="Makanan Sehat"
                class="w-full max-w-2xl h-auto object-cover rounded shadow-lg transition-transform transform hover:scale-105 blur-sm hover:blur-none">
        </div>

        <div class="p-5 py-10" data-aos="fade-left">
            @if(isset($article))
                <h2 class="text-3xl lg:text-4xl font-bold mb-4 text-primary1">{{ $article->title }}</h2>
                <p class="mt-6 text-lg text-gray-800">{{ $article->description }}</p>
            @else
                <p class="text-lg text-gray-800">Artikel tidak ditemukan.</p>
            @endif
        </div>
    </div>
</div>

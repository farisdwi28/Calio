<div>
    <div class="flex flex-row justify-center my-20">
        @foreach ($Kelas as $kelas)
            <div class="flex flex-col items-start  mb-8 mx-4">
                <div class="bg-white max-w-md p-8 rounded-lg shadow-md mb-4 hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out">
                    <a href="{{ url('/jadwal') }}">
                        <img src="{{ url('storage/' . $kelas->photo) }}" alt="Sports"
                        class="w-full max-w-2xl h-auto object-cover rounded shadow-lg transition-transform transform hover:scale-105 blur-sm hover:blur-none">
                    </a>
                    <h2 class="text-2xl font-bold text-primary1 mb-2">{{ $kelas->title }}</h2>
                    <p class="text-gray-600 mb-4">{{ $kelas->description }}</p>
                    <div class="relative z-10 flex flex-col items-center py-5">
                        <livewire:button :buttonText="'Atur'" :buttonAction="'/jadwal'" />
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

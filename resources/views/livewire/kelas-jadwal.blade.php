<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Jadwal
    </h2>
</x-slot>
<div class="fixed z-10 inset-0 overflow-y-auto">
    <div class="absolute inset-0">
        <img src="{{ asset('assets/images/bgform.jpeg') }}" class="fixed w-screen h-screen object-cover">
    </div>


    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div
            class="inline-block align-bottom bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-md sm:w-full">
            <div class="p-6 rounded-t-lg">
                <h1 class="text-3xl text-gray-800 font-bold">Jadwal</h1>
            </div>
            <form class="bg-gray-100 px-8 pt-6 pb-8 sm:p-6 sm:pb-4">

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-600">Nama:</label>
                    @if (auth()->check())
                        <input type="text" id="name" name="name" class="mt-1 p-2 border rounded-md w-full"
                            placeholder="{{ optional(Auth::user())->name }}" wire:model="name">
                    @else
                        <input type="text" id="name" name="name" class="mt-1 p-2 border rounded-md w-full"
                            disabled placeholder="Tidak ada user login" wire:model="name">
                    @endif
                </div>

                <div class="mb-6">
                    <label for="formTanggal" class="block text-gray-800 text-sm font-bold mb-2">Tanggal:</label>
                    <input type="date"
                        class="w-full py-2 px-3 border-b-2 border-teal-600 focus:outline-none focus:border-teal-700"
                        id="formTanggal" wire:model="tanggal">
                    @error('tanggal')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="formKelas" class="block text-sm font-medium text-gray-700">Pilih Kelas:</label>
                    <select id="formKelas"
                        class="mt-1 p-2 border-b-2 border-teal-600 w-full focus:outline-none focus:border-teal-700"
                        wire:model="kelas">
                        <option value="" selected disabled>Pilih Kelas</option>
                        <option value="workout">Workout
                        </option>
                        <option value="cardio">Cardio
                        </option>
                        <option value="yoga">Yoga</option>
                    </select>

                    @error('kelas')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button wire:click.prevent="add()" type="button"
                        class="bg-teal-600 text-white py-2 px-6 rounded-md hover:bg-teal-700 focus:outline-none focus:ring focus:border-teal-700">
                        Simpan
                    </button>
                    <button type="button" wire:click="closeModal()"
                        class="ml-2 bg-gray-800 text-white py-2 px-6 rounded-md hover:bg-gray-900 focus:outline-none focus:ring focus:border-teal-700">
                        Batal
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

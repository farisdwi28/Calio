<div class="fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="inline-block align-bottom bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-md sm:w-full">
            <div class="p-6 rounded-t-lg">
                <h1 class="text-3xl text-gray-800 font-bold">Kelola Kelas</h1>
            </div>
            <form class="bg-gray-100 px-8 pt-6 pb-8 sm:p-6 sm:pb-4">

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-900 dark:text-white" for="file_input">Unggah
                        file</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="file_input_help" id="file_input" type="file" wire:model="photo">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG
                        or GIF (MAX. 800x400px).</p>
                    @error('photo')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="formKelas" class="block text-sm font-medium text-gray-700">Pilih Kelas:</label>
                    <select id="formKelas"
                        class="mt-1 p-2 border-b-2 border-teal-600 w-full focus:outline-none focus:border-teal-700"
                        wire:model="kategori">
                        <option value="" selected disabled>Pilih Kelas</option>
                        <option value="workout">Workout</option>
                        <option value="cardio">Cardio</option>
                        <option value="yoga">Yoga</option>
                    </select>

                    @error('kategori')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-600">Judul Kelas:</label>
                    <input type="text" id="title" name="title" class="mt-1 p-2 border rounded-md w-full"
                        wire:model="title">
                    @error('title')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-600">Deskripsi:</label>
                    <textarea id="description" name="description" class="mt-1 p-2 border rounded-md w-full"
                        wire:model="description"></textarea>
                    @error('description')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button wire:click.prevent="add()"
                        class="bg-teal-600 text-white py-2 px-6 rounded-md hover:bg-teal-700 focus:outline-none focus:ring focus:border-teal-700">
                        Simpan
                    </button>
                    <button wire:click="closeModal()"
                        class="ml-2 bg-gray-800 text-white py-2 px-6 rounded-md hover:bg-gray-900 focus:outline-none focus:ring focus:border-teal-700">
                        Batal
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

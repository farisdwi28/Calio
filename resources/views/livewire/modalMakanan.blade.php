<div class="fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div
            class="inline-block align-bottom bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-md sm:w-full">
            <div class="p-6 rounded-t-lg">
                <h1 class="text-3xl text-gray-800 font-bold">Kelola Makanan</h1>
            </div>
            <form class="bg-gray-100 px-8 pt-6 pb-8 sm:p-6 sm:pb-4">

                <div class="mb-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Unggah
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
                    <label for="name" class="block text-sm font-medium text-gray-600">Nama:</label>
                    <input type="text" id="name" name="name" class="mt-1 p-2 border rounded-md w-full"
                        wire:model="name">
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-600">Deskripsi:</label>
                    <textarea type="text" id="description" name="description" class="mt-1 p-2 border rounded-md w-full"
                        wire:model="description"></textarea>
                    @error('description')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="harga" class="block text-sm font-medium text-gray-600">Harga:</label>
                    <input type="number" id="harga" name="harga" class="mt-1 p-2 border rounded-md w-full"
                        wire:model="harga">
                    @error('harga')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="stok" class="block text-sm font-medium text-gray-600">Stok:</label>
                    <input type="number" id="stok" name="stok" class="mt-1 p-2 border rounded-md w-full"
                        wire:model="stok">
                    @error('stok')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-600">Status:</label>
                    <select id="status" name="status" class="mt-1 p-2 border rounded-md w-full" wire:model="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    @error('status')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button wire:click.prevent="add()" type="button"
                        class="bg-teal-600 text-white py-2 px-6 rounded-md hover:bg-teal-700 focus:outline-none focus:ring focus:border-teal-700">
                        Simpan
                    </button>
                    <button wire:click="closeModal()" type="button"
                        class="ml-2 bg-gray-800 text-white py-2 px-6 rounded-md hover:bg-gray-900 focus:outline-none focus:ring focus:border-teal-700">
                        Batal
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

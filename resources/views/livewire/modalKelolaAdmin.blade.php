<div class="fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div
            class="inline-block align-bottom bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-md sm:w-full">
            <div class="p-6 rounded-t-lg">
                <h1 class="text-3xl text-gray-800 font-bold">Kelola Admin</h1>
            </div>
            <form class="bg-gray-100 px-8 pt-6 pb-8 sm:p-6 sm:pb-4">

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-600">Nama:</label>
                        <input type="text" id="name" name="name" class="mt-1 p-2 border rounded-md w-full" wire:model="name">
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-600">Nama Pengguna:</label>
                        <input type="text" id="username" name="username" class="mt-1 p-2 border rounded-md w-full" wire:model="username">
                    @error('username')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600">Kata Sandi:</label>
                        <input type="password" id="password" name="password" class="mt-1 p-2 border rounded-md w-full" wire:model="password">
                    @error('password')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="phone_number" class="block text-sm font-medium text-gray-600">No Telp:</label>
                        <input type="text" id="phone_number" name="phone_number" class="mt-1 p-2 border rounded-md w-full" wire:model="phone_number">
                    @error('phone_number')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="role" class="block text-sm font-medium text-gray-600">Role:</label>
                        <input type="text" id="role" name="role" class="mt-1 p-2 border rounded-md w-full" wire:model="role" disabled>
                    @error('role')
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

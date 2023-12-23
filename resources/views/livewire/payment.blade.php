<div class="flex bg-gray-100 p-6 h-screen relative justify-center items-center">
    <div class="max-w-md mx-auto bg-white p-8 border rounded-md shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Form Pembayaran Makanan</h2>
            <!-- Nama -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Nama</label>
                <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md" wire:model="name">
            </div>

            <!-- Alamat -->
            <div class="mb-4">
                <label for="alamat" class="block text-sm font-medium text-gray-600">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3" class="mt-1 p-2 w-full border rounded-md" wire:model="alamat"></textarea>
            </div>

            <!-- Nama Makanan -->
            <div class="mb-4">
                <label for="nama_makanan" class="block text-sm font-medium text-gray-600">Nama Makanan</label>
                <input type="text" name="nama_makanan" id="nama_makanan" class="mt-1 p-2 w-full border rounded-md" wire:model="nama_makanan">
            </div>

            <!-- Total Harga -->
            <div class="mb-6">
                <label for="total_harga" class="block text-sm font-medium text-gray-600">Total Harga</label>
                <input type="text" name="total_harga" id="total_harga" class="mt-1 p-2 w-full border rounded-md" wire:model="total_harga">
            </div>

            <div>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600" wire:click="addPayment">Submit</button>
            </div>
    </div>
</div>
<div class="py-12">


            <button wire:click="create()" class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded my-3">Tambah </button>

            @if($isModal)
                @include('livewire.create1')
            @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Deskripsi</th>
                        <th class="px-4 py-2">Image</th>
                        <th class="px-4 py-2">Harga</th>
                        <th class="px-4 py-2">Stok</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($makanans as $row)
                        <tr>
                            <td class="border px-4 py-2">{{ $row->name }}</td>
                            <td class="border px-4 py-2">{{ $row->description }}</td>
                            <td class="border px-4 py-2">
                                <img src="{{ urldecode($row->image) }}" alt="{{ $row->name }}" class="max-w-full h-auto">
                            </td>
                            <td class="border px-4 py-2">{{ $row->harga }}</td>
                            <td class="border px-4 py-2">{{ $row->stok }}</td>
                            <td class="border px-4 py-2">
                                <button wire:click="edit({{ $row->id }})" class="bg-cyan-400 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button wire:click="delete({{ $row->id }})" class="bg-red-400 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Hapus</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="4">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

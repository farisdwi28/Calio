<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white p-6 rounded-md shadow-md">
        <div class="flex justify-center mb-4">
            <h1 class="text-2xl font-semibold text-gray-800">Pengguna</h1>
        </div>
        @if (session()->has('message'))
            <div class="bg-green-400 text-white rounded-md p-2 mb-4">
                {{ session('message') }}
            </div>
        @endif

        @if ($isModal)
            @include('Livewire.create')
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="px-4 py-2 bg-teal-600 text-left text-sm font-semibold text-white">Nama</th>
                        <th class="px-4 py-2 bg-teal-600 text-left text-sm font-semibold text-white">Tanggal</th>
                        <th class="px-4 py-2 bg-teal-600 text-left text-sm font-semibold text-white">Kelas</th>
                        <th class="px-4 py-2 bg-teal-600"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($jadwals as $row)
                        <tr class="transition duration-300 ease-in-out hover:bg-gray-100">
                            <td class="px-4 py-2 text-sm font-medium text-gray-800">{{ $row->name }}</td>
                            <td class="px-4 py-2 text-sm font-medium text-gray-800">{{ $row->tanggal }}</td>
                            <td class="px-4 py-2 text-sm font-medium text-gray-800">{{ $row->kelas }}</td>
                            <td class="px-4 py-2 text-right text-sm">
                                <button wire:click="edit({{ $row->id }})"
                                    class="text-indigo-600 hover:text-indigo-900 font-bold focus:outline-none transition duration-300 ease-in-out">Edit</button>
                                <button wire:click="delete({{ $row->id }})"
                                    class="text-red-600 hover:text-red-900 ml-2 font-bold focus:outline-none transition duration-300 ease-in-out">Delete</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-gray-500 px-4 py-2">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

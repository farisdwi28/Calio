<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white p-6 rounded-md shadow-md">
        <div class="flex justify-center mb-4">
            <h1 class="text-2xl font-semibold text-gray-800">Riwayat Pengguna</h1>
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
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($jadwals as $row)
                        <tr class="transition duration-300 ease-in-out hover:bg-gray-100">
                            <td class="px-4 py-2 text-sm font-medium text-gray-800">{{ $row->name }}</td>
                            <td class="px-4 py-2 text-sm font-medium text-gray-800">{{ $row->tanggal }}</td>
                            <td class="px-4 py-2 text-sm font-medium text-gray-800">{{ $row->kelas }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center text-gray-500 px-4 py-2">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

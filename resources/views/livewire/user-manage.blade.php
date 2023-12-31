<div>
    @if (session()->has('message'))
        <div class="bg-green-400 text-white rounded-md p-2 mb-4">
            {{ session('message') }}
        </div>
    @endif

    @if ($isModal)
        @include('livewire.modal-user-manage')
    @endif
    <div class="overflow-x-auto shadow-md sm:rounded-lg p-4 sm:ml-64 pt-32">
        <div
            class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="table-search-users"
                    class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search for users">
            </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Position
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (count($users) > 0)
                    @foreach ($users as $user)
                        <tr class="bg-white border-b">
                            <td class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <div>
                                    <div class="text-base font-semibold">{{ $user->name }}</div>
                                    <div class="font-normal text-gray-500">{{ $user->username }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->phone_number }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->role }}
                            </td>
                            <td class="flex flex-row gap-3 px-6 py-4">
                                <button wire:click="edit({{ $user->id }})"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</button>
                                <button wire:click="delete({{ $user->id }})"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="font-semibold py-3">
                            Tidak ada data
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

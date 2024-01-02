<div>
    @if (session()->has('message'))
        <div class="bg-green-400 text-white rounded-md p-2 mb-4">
            {{ session('message') }}
        </div>
    @endif

    @if ($isModal)
        @include('livewire.modalMakanan')
    @endif

    <div class="overflow-x-auto shadow-md sm:rounded-lg p-4 sm:ml-64 pt-32">

        <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900">
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
                    placeholder="Search for foods" oninput="searchFoods()">
            </div>
            <button wire:click="create()" type="button"
                class="group relative overflow-hidden bg-primary1 focus:ring-4 focus:ring-blue-300 inline-flex items-center px-7 py-2.5 rounded-lg text-white justify-center transition-all transform hover:scale-105">
                Tambah Makanan
                <svg class="z-40 ml-2 -mr-1 w-4 h-4 transition-all duration-300 transform group-hover:translate-x-1"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <div
                    class="absolute inset-0 h-[200%] w-[200%] rotate-45 translate-x-[-70%] transition-all group-hover:scale-100 bg-white/30 group-hover:translate-x-[50%] z-20 duration-1000">
                </div>
            </button>
        </div>

        <!-- Replace "food-item" with the actual class of food items you want to filter -->


        <script>
            function searchFoods() {
                var input, filter, foodItems, i, txtValue;
                input = document.getElementById("table-search-users");
                filter = input.value.toUpperCase();
                foodItems = document.getElementsByClassName("food-item");

                for (i = 0; i < foodItems.length; i++) {
                    txtValue = foodItems[i].textContent || foodItems[i].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        foodItems[i].style.display = "";
                    } else {
                        foodItems[i].style.display = "none";
                    }
                }
            }
        </script>





        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Foto
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Deskripsi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        stok
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kategori
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($makans as $makan)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <div>
                                <img src="{{ url('storage/' . $makan->photo) }}" alt="Makanan Photo"
                                    class="w-72 h-auto">
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            {{ $makan->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $makan->description }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $makan->harga }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $makan->stok }}
                        </td>
                        <td class="px-6 py-4">
                            @if ($makan->status == 'active')
                                <span class="inline-block w-4 h-4 rounded-full bg-green-500"></span>
                            @else
                                <span class="inline-block w-4 h-4 rounded-full bg-red-500"></span>
                            @endif
                            {{ $makan->status }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $makan->kategori }}
                        </td>
                        <td class="flex flex-row gap-3 px-6 py-4">
                            <button wire:click="edit({{ $makan->id }})"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</button>
                            <button wire:click="delete({{ $makan->id }})"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                        </td>
                    </tr>
                                <!-- Food Section -->
                    @if ($makan->kategori == 'makanan')
                    <tr class="bg-green-200">
                        <td colspan="7"> <!-- Adjust the colspan based on the number of columns -->
                            Konten tambahan khusus untuk kategori makanan
                        </td>
                    </tr>
                @endif

                <!-- Drink Section -->
                @if ($makan->kategori == 'minuman')
                    <tr class="bg-blue-200">
                        <td colspan="7"> <!-- Adjust the colspan based on the number of columns -->
                            Konten tambahan khusus untuk kategori minuman
                        </td>
                    </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>

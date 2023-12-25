<div>
    <div class="relative h-screen overflow-hidden">
        <div class="fixed z-10 inset-0 overflow-y-auto">
            <<div class="absolute inset-0">
                <img src="{{ asset('assets/images/bgprof.avif') }}" class="fixed w-screen h-screen object-cover">
            </div>
        </div>
        <div class="relative z-10 max-w-md mx-auto bg-white  p-6 rounded-md shadow-md my-20">
            <h1 class="text-2xl font-bold mb-4">Profile</h1>
            <label for="id"
                class="hidden block text-sm font-medium text-gray-600">{{ optional(Auth::user())->id }}</label>

            <div class="mb-4">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Unggah
                    file</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="file_input_help" id="file_input" type="file" wire:model="photo">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX.
                    800x400px).</p>
            </div>

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

            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-600">No Telp:</label>
                @if (auth()->check())
                    <input type="tel" id="phone" name="phone" class="mt-1 p-2 border rounded-md w-full"
                        placeholder="{{ optional(Auth::user())->phone_number }}" wire:model="phone_number">
                @else
                    <input type="tel" id="phone" name="phone" class="mt-1 p-2 border rounded-md w-full"
                        disabled placeholder="Tidak ada user login" wire:model="phone_number">
                @endif
            </div>

            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-600">Username:</label>
                @if (auth()->check())
                    <input type="text" id="username" name="username" class="mt-1 p-2 border rounded-md w-full"
                        placeholder="{{ optional(Auth::user())->username }}" wire:model="username">
                @else
                    <input type="text" id="username" name="username" class="mt-1 p-2 border rounded-md w-full"
                        disabled placeholder="Tidak ada user login" wire:model="username">
                @endif
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Kata Sandi Baru:</label>
                @if (auth()->check())
                    <input type="password" id="password" name="password" wire:model="password"
                        class="mt-1 p-2 border rounded-md w-full" placeholder="Masukkan kata sandi baru anda">
                @else
                    <input type="password" id="password" name="password" wire:model="password" disabled
                        class="mt-1 p-2 border rounded-md w-full" placeholder="Masukkan kata sandi baru anda">
                @endif
            </div>

            <div class="flex flex-row gap-3 relative justify-center items-center">
                <button wire:click="edit" type="button"
                    class="group relative overflow-hidden bg-primary1 focus:ring-4 focus:ring-blue-300 inline-flex items-center px-7 py-2.5 rounded-lg text-white justify-center transition-all transform hover:scale-105">
                    Edit
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

                <button wire:click="delete({{ optional(Auth::user())->id }})" type="button"
                    class="group relative overflow-hidden bg-red-500 focus:ring-4 focus:ring-blue-300 inline-flex items-center px-7 py-2.5 rounded-lg text-white justify-center transition-all transform hover:scale-105">
                    Hapus
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
        </div>
    </div>
</div>

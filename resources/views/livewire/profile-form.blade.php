<div>
    <div class="relative h-screen overflow-hidden">
        <div class="absolute inset-0">
            <video autoplay loop muted class="w-full h-full object-cover">
                <source src="{{ asset('assets/images/bg.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="relative z-10 max-w-md mx-auto bg-white opacity-70 p-6 rounded-md shadow-md my-20">
            <h1 class="text-2xl font-bold mb-4">Profile</h1>
            <label for="name"
                class="hidden block text-sm font-medium text-gray-600">{{ optional(Auth::user())->id }}</label>
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
                <label for="password" class="block text-sm font-medium text-gray-600">New Password:</label>
                @if (auth()->check())
                    <input type="password" id="password" name="password" wire:model="password"
                        class="mt-1 p-2 border rounded-md w-full" placeholder="Masukkan password baru Anda">
                @else
                    <input type="password" id="password" name="password" wire:model="password" disabled
                        class="mt-1 p-2 border rounded-md w-full" placeholder="Masukkan password baru Anda">
                @endif
            </div>

            <div class="flex flex-row gap-3 relative justify-center items-center">
                @if (auth()->check())
                    <button wire:click="edit" type="button"
                        class="group relative overflow-hidden bg-primary2 focus:ring-4 focus:ring-blue-300 inline-flex items-center px-7 py-2.5 rounded-lg text-white justify-center transition-all transform hover:scale-105">
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
                @else
                    <button wire:click="edit({{ optional(Auth::user())->id }})" type="button" disabled
                        class="group relative overflow-hidden bg-primary2 focus:ring-4 focus:ring-blue-300 inline-flex items-center px-7 py-2.5 rounded-lg text-white justify-center transition-all transform hover:scale-105">
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
                @endif

                @if (auth()->check())
                    <button wire:click="delete({{ optional(Auth::user())->id }})" type="button"
                        class="group relative overflow-hidden bg-red-500 focus:ring-4 focus:ring-blue-300 inline-flex items-center px-7 py-2.5 rounded-lg text-white justify-center transition-all transform hover:scale-105">
                        Delete
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
                @else
                    <button wire:click="delete({{ optional(Auth::user())->id }})" type="button" disabled
                        class="group relative overflow-hidden bg-red-500 focus:ring-4 focus:ring-blue-300 inline-flex items-center px-7 py-2.5 rounded-lg text-white justify-center transition-all transform hover:scale-105">
                        Delete
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
                @endif
            </div>
        </div>
    </div>
</div>

<div>
    @if (auth()->check())
        <nav
            class="bg-transparent fixed top-0 z-30 w-full backdrop-blur-3xl transition-transform duration-300 transform">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('assets/images/logonew.png') }}" class="h-12" alt="Calio Logo" />
                </a>
                <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button type="button"
                        class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full"
                            src="{{ url('storage/' . Auth::user()->photo) }}"
                            alt="user photo">
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="user-dropdown">
                        <div class="px-4 py-3">
                            <span
                                class="block text-sm text-gray-900 dark:text-white">{{ optional(Auth::user())->name }}</span>
                            <span
                                class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ optional(Auth::user())->username }}</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            <li>
                                <a href="/Profile">
                                    <button
                                        class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</button></a>
                            </li>
                            <li>
                                <button wire:click="logout"
                                    class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Keluar</button>
                            </li>
                        </ul>
                    </div>
                    <button data-collapse-toggle="navbar-user" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-user" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 font-bold">
                        <li>
                            <a href="{{ url('') }}"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary1 font-semibold md:hover:underline md:p-0 {{ request()->is('/') ? 'bg-gray-100 bg-transparent text-primary1 font-semibold underline p-0' : '' }}">Beranda</a>
                        </li>
                        <li>
                            <a href="{{ url('/kelas') }}"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary1 font-semibold md:hover:underline md:p-0 {{ request()->is('kelas') ? 'bg-gray-100 bg-transparent text-primary1 font-semibold underline p-0' : '' }}">Kelas</a>
                        </li>
                        <li>
                            <a href="{{ url('/food') }}"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary1 font-semibold md:hover:underline md:p-0 {{ request()->is('food') ? 'bg-gray-100 bg-transparent text-primary1 font-semibold underline p-0' : '' }}">Rencana
                                Makan</a>
                        </li>
                        <li>
                            <a href="{{ url('/teams') }}"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary1 font-semibold md:hover:underline md:p-0 {{ request()->is('teams') ? 'bg-gray-100 bg-transparent text-primary1 font-semibold underline p-0' : '' }}">Tim</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    @else
        <nav
            class="bg-transparent fixed top-0 z-30 w-full backdrop-blur-3xl transition-transform duration-300 transform">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse ">
                    <img src="{{ asset('assets/images/logonew.png') }}" class="h-12" alt="Calio Logo">
                </a>
                <div class="flex space-x-3 md:space-x-0 rtl:space-x-reverse gap-3">
                    <livewire:button :buttonText="'Masuk'" :buttonAction="'/login'" />
                    <livewire:button :buttonText="'Daftar'" :buttonAction="'/register'" />


                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    @endif
</div>

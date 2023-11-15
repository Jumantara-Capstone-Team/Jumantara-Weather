<header class="fixed w-full z-50">
    <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900 fixed top-0 left-0 w-full shadow-lg z-50">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
            <a href="#" class="flex items-center">
                <img src="{{ asset('img/logo.svg') }}" class="h-6 mr-3 sm:h-9" alt="Landwind Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Jumantara</span>
            </a>
            <div class="flex items-center lg:order-2">
                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-2">
                    <li>
                        <a href="/"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/weather"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Weather</a>
                    </li>
                    <li>
                        <a href="/news"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">News</a>
                    </li>
                    <li>
                        <a href="/radar"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Radar</a>
                    </li>
                    <li>
                        <a href="/air-quality"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Air
                            Quality</a>
                    </li>

                    @if (auth()->check())
                        <div class="relative">
                            <button onclick="toggleDropdown()"
                                class="ml-10 inline-flex items-center justify-center w-full h-8 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 focus:outline-none transition transform duration-300 ease-in-out">
                                <img src="{{ asset('img/auth/user/unnamed.jpg') }}" alt="Foto Profil"
                                    class="w-6 h-6 rounded-full">
                                <p class="ml-4">{{ auth()->user()->name }}</p>
                            </button>
                            <ul id="dropdownMenu"
                                class="ml-10 hidden absolute left-0 mt-2 bg-white shadow-lg rounded-lg py-2 px-3 space-y-2 text-gray-600 group-hover:block w-60 transition transform duration-300 ease-in-out origin-top ">
                                <li class="hover:text-blue-500 transition transform duration-300 ease-in-out">
                                    <a href="{{ route('profile') }}"><i class="fas fa-user"></i> Profil</a>
                                    <!-- Tambahkan ikon user -->
                                </li>
                                <li class="hover:text-blue-500 transition transform duration-300 ease-in-out">
                                    <a href="{{ route('activity') }}"><i class="fas fa-bars"></i> Activity-Log</a>
                                    <!-- Tambahkan ikon user -->
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                                <li class="hover:text-blue-500 transition transform duration-300 ease-in-out">
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                            class="fas fa-sign-out-alt"></i> Keluar</a>
                                    <!-- Tambahkan ikon logout -->
                                </li>

                            </ul>
                        </div>
                        <script src="{{ asset('js/components/UserDropdown.js') }}"></script>
                    @else
                        {{-- <!-- Pengguna belum login -->
                        <li class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                            <a href="{{ route('register.create') }}"
                                class="inline-flex justify-center w-full px-7 py-2 text-sm font-medium text-center text-white border bg-blue-700 border-gray-200 rounded-lg sm:w-auto transition duration-300 ease-in-out transform hover:bg-gray-100 hover:text-black hover:scale-105 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                Daftar
                            </a>
                            <a href="{{ route('login') }}"
                                class="inline-flex justify-center w-full px-7 py-2 text-sm font-medium text-center text-white border bg-blue-700 border-gray-200 rounded-lg sm:w-auto transition duration-300 ease-in-out transform hover:bg-gray-100 hover:text-black hover:scale-105 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                Login
                            </a>
                        </li> --}}
                    @endif


                </ul>
            </div>
        </div>
    </nav>
</header>

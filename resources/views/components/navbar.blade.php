<nav class="border-gray-200 px-2 sm:px-4 py-2.5 rounded bg-sky-500">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="/" class="flex items-center">
            <span class="self-center text-xl font-bold text-white whitespace-nowrap ">Objek Wisata Sibolga & Tapteng</span>
        </a>
        <div class="flex items-center">
            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 md:mr-3" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 md:flex-row md:mt-0 md:text-sm md:font-medium">
                <li class="px-3 py-2 transition group md:hover:bg-white">
                    <a href="/" class="block py-2 pl-3 pr-4 text-base font-semibold text-white transition bg-blue-700 rounded md:group-hover:text-sky-500 md:bg-transparent md:p-0 " aria-current="page">Home</a>
                </li>
                <li class="px-3 py-2 transition group md:bg-white">
                    <a href="{{ route('logout') }}" class="block py-2 pl-3 pr-4 text-base font-semibold transition rounded text-sky-500 md:group-text-sky-500 md:bg-transparent md:p-0 " aria-current="page">Logout</a>
                </li>
                {{-- <li class="px-3 py-2 transition group md:hover:bg-white">
            <a href="#" type="button" data-dropdown-toggle="category" class="block py-2 pl-3 pr-4 text-base text-white transition bg-blue-700 rounded md:group-hover:text-sky-500 md:bg-transparent md:p-0 " aria-current="page">Kategori</a>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="category">
                <ul class="py-1" aria-labelledby="dropdown">
                    <li class="">
                        <a href="#" class="block px-4 py-2 pr-10 text-sm text-gray-700 hover:bg-gray-100">Pantai</a>
                    </li>
                    <li class="">
                        <a href="#" class="block px-4 py-2 pr-10 text-sm text-gray-700 hover:bg-gray-100">Gunung</a>
                    </li>
                </ul>
            </div>
        </li> --}}
            </ul>
        </div>
    </div>
</nav>

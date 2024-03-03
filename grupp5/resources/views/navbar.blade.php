<div x-data="{ open: false }">
    <nav class="bg-nav-color">
        <div class="max-w-10xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/Logo.png')}}" alt="logo" class="size-12 ml-1 inline cursor-pointer">
                        </a>
                    </div>


                </div>
                <div class="hidden md:block">
                    <div class="flex items-baseline space-x-4">
                        <form action="{{ route('search') }}" method="GET">
                            <input type="text" placeholder="Search movie.." name="query" class="bg-search-field-color border-none rounded-l-lg w-80"><button type="submit" class="bg-search-btn-color p-2 text-text border-none rounded-r-lg">Search</button></input>
                        </form>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        @auth
                        <!-- Profile dropdown -->
                        <div class="px-4 font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-red-500 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Hi, {{ Auth::user()->name }}. {{ __("Logged in as ") }} {{ Auth::user()->role ?  __("user") : __("admin") }}
                        </div>
                        @endauth
                        @auth
                        <a href="{{ route('genre') }}" class="px-4 font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Genre</a>
                        <a href="{{ route('aboutus') }}" class="px-4 ml-4 font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">About us</a>
                        <a href="{{ url('/watchlist') }}" class="px-4 font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Watchlist</a>
                        <a href="{{ url('/usersettings') }}" class="px-4 font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Settings</a>
                        @if(auth()->check() && auth()->user()->role == 0)
                        <a href="{{ url('/create-movie') }}" class="px-4 font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Create Movie</a>
                        @endif
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="px-4 py-2 bg-signin-btn-color text-text rounded">Logout</button>
                        </form>
                        @else
                        <a href="{{ route('genre') }}" class="px-4 font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Genre</a>
                        <a href="{{ route('aboutus') }}" class="px-4 ml-4 font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">About us</a>
                        <a href="{{ route('login') }}" class="px-4 font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                        @endauth
                    </div>
                </div>

                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button @click="open = !open" type="button" class="bg-search-btn-color inline-flex items-center justify-center p-2 rounded-md text-text hover:text-white hover:bg-search-btn-color focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-search-btn-color focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!--
              Heroicon name: outline/menu

              Menu open: "hidden", Menu closed: "block"
            -->
                        <svg x-show="!open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!--
              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
                        <svg x-show="open" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="open" class="md:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="bg-search-btn-color text-white block px-3 py-2 rounded-md text-base font-medium">Menu</a>
                <form action="" method="GET" class="md:hidden pl-10 pt-1">
                    <input type="text" placeholder="Search movie.." name="query" class="bg-search-field-color border-none rounded-l-lg"><button type="submit" class="bg-search-btn-color p-2 text-text border-none rounded-r-lg">Search</button></input>
                </form>
            </div>
            <div class="pt-4 pb-3 border-t border-gray-700">
                <div class="mt-3 px-2 space-y-1">
                    @if (Route::has('login'))
                    <div class="mr-4 ">
                        @auth
                        <div class="px-4 font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-red-500 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Hi, {{ Auth::user()->name }} {{ __("logged in as ") }} {{ Auth::user()->role ?  __("user") : __("admin") }}
                        </div>
                        @endauth
                        @auth
                        <a href="{{ route('genre') }}" class="px-4 font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Genre</a>
                        <a href="{{ url('/watchlist') }}" class="font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Watchlist</a>
                        <a href="{{ url('/profile') }}" class="font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Settings</a>
                        @if(auth()->check() && auth()->user()->role == 0)
                        <a href="{{ url('/create-movie') }}" class="px-4 font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Create Movie</a>
                        @endif
                        @if (Route::has('logout'))
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="px-4 py-2 bg-signin-btn-color text-text rounded">Logout</button>
                        </form>
                        @endif


                        @else
                        <a href="{{ route('genre') }}" class="px-4 font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Genre</a>
                        <a href="{{ route('aboutus') }}" class="ml-4 font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">About us</a>
                        <a href="{{ route('login') }}" class="font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</div>
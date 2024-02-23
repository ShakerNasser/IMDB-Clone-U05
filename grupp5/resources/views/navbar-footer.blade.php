<!DOCTYPE html>
<html lang="en">
@include('meta')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-background">
    <nav class="fixed md:flex flex flex-row h-fit w-full py-2 bg-nav-color md:items-center md:justify-between">
        <img src="{{ asset('images/Logo.png')}}" alt="logo" class="size-12 ml-4 inline cursor-pointer">
        <div class="md:flex md:items-center z-[-1] md:z-auto md:static bg-green-950 w-full">
            <form action="" method="GET">
                <input type="text" placeholder="Search movie.." name="query" class="bg-search-field-color border-none rounded-l-lg"><button type="submit" class="bg-search-btn-color p-2 text-text border-none rounded-r-lg">Search</button></input>
            </form>
            @if (Route::has('login'))
            <div class="mr-4 ">
                @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-text hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </nav>
</body>

</html>
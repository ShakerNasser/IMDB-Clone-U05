<!DOCTYPE html>
<html lang="en">
@include('meta')
@include('navbar')

<body class="bg-background">

    <div class="container  mx-auto flex justify-center items-center min-h-screen">
        <div class="bg-custom-color rounded-lg overflow-hidden shadow-md w-full md:max-w-lg">
            @if($movies->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
                @foreach($movies as $movie)
                    <div class="p-8">
                        <h2 class="text-2xl font-semibold text-text mb-2">{{ $movie->title }}</h2>
                        <p class="text-text mb-4">{{ $movie->description }}</p>
                        <p class="text-text font-semibold">{{ $movie->genre }}</p>
                    </div>
                @endforeach
            </div>

            @else
            <div class="text-center p-6">
                <p class="text-text text-lg mb-4">No movies found</p>
                <a class="text-text hover:underline" href="{{ route('genre') }}">Browse by genre</a>
            </div>
            @endif
        </div>
    </div>

    @include('footer')
</body>

</html>

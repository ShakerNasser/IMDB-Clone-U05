<!DOCTYPE html>
<html lang="en">
@include('meta')
@include('navbar')

<body class="bg-background">

    @if($movies->count() > 0)
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
        @foreach($movies as $movie)
        <div class="bg-white shadow-md rounded-md p-4">
            <h2 class="text-lg font-semibold">{{ $movie->title }}</h2>
            <p class="text-gray-600">{{ $movie->description }}</p>
            <p class="text-gray-600">{{ $movie->genre }}</p>
        </div>
        @endforeach
    </div>

    @else
    <p class="text-text">No movies found </p>
    <a class="text-text" href="{{ route('genre') }}"> Browse by genre</a>
    @endif


    @include('footer')
</body>

</html>
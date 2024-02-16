<!DOCTYPE html>
<html lang="en">

<title>Watchlist</title>
</head>

<body>
    @include('layout.navbar')
    <div class="grid-container">
        @foreach ($movies as $movie)
            <div class="grid-item">
                <img src="{{ $movie->image_url }}" alt="{{ $movie->title }}">
                <h3>{{ $movie->title }}</h3>
                <p>{{ $movie->description }}</p>
                <a href="{{ route('watchlist.destroy', $movie->id) }}" data-method="delete" data-confirm="Are you sure?">Ta bort från watchlist</a>
            </div>
        @endforeach
    </div>
</body>
@include('layout.footer')

</html>
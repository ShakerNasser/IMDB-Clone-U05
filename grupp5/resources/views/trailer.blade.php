<!DOCTYPE html>
@include('meta')
<body>
    
<div class="container">
        <h1>Trailers</h1>
        @foreach($movies as $movie)
            <div>
                <h2>{{ $movie->title }}</h2>
                <iframe width="560" height="315" src="{{ $movie->trailer_url }}" frameborder="0" allowfullscreen></iframe>
            </div>
        @endforeach
    </div>

</body>
</html>



<!DOCTYPE html>
@include('meta')

<body class="bg-background">
<h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">Movie Review</span></h1>

    <div class="container">
       
        @foreach ($movies as $movie)
        <h1 class=" text-text">Trailer: {{ $movie->title }} </h1>
        <div>
            <h2 class=" text-text">{{ $movie->title }}</h2>
            <h2 class=" text-text">{{ $movie->genre }}</h2>
            {!! $movie->embedCode->html() !!}
        </div>
        @endforeach


    </div>

</body>

</html>
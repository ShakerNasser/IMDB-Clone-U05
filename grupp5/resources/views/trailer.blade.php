<!DOCTYPE html>
@include('meta')
@include('navbar')
<body class="bg-background">

    <div class="container mx-auto">
        <h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">Movie trailer</span></h1>

        @foreach ($movies as $movie)
        <div class="flex flex-col items-center mb-10">
            <h2 class="text-text">{{ $movie->title }}</h2>
            <h2 class="text-text">{{ $movie->genre }}</h2>

            <div>
                {!! $movie->embedCode->html() !!}
            </div>
        </div>
        @endforeach
    </div>
    @include('footer')

</body>

</html>
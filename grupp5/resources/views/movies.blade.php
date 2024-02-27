<!DOCTYPE html>
<html lang="en">

@include('meta')
@include('navbar')
<title>{{ $movie->title }}</title>

<body class="bg-background">
<section class="px-10 py-10">
    <h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">About: {{ $movie->title }}</span></h1>
  </section>

    <div>
        <p> Genre:{{ $movie->genre }}</p>
        <p>{{ $movie->description }}</p>

        <p><a href="{{ route('trailers.index', ['movie_id' => $movie->id]) }}" class="btn py-2 px-4 rounded text-button-txt bg-button-background w-100 hover:bg-red-800">Go to trailer</a></p>

    </div>

    @include('footer')
</body>

</html>
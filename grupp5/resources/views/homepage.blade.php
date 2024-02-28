<!DOCTYPE html>
<html lang="en">

@include('meta')
@include('navbar')

<body class="bg-background">
  <div class="">
    <img src="{{ asset('images/batmanLanding.jpg') }}" alt="landing page picture" class="w-full opacity-75">
  </div>
  <!-- Top Movies -->
  <section class="px-10 py-10">
    <h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">Featured movies</span></h1>
  </section>

  <section class="px-10">
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 py-4">
      @foreach ($movies as $movie)
      <div class="flex flex-col items-center overflow-hidden rounded-xl bg-card-background bg-clip-border text-gray-700 shadow-md">
        <div class="min-h-[200px] relative overflow-hidden text-gray-700 bg-transparent rounded-none shadow-none bg-clip-border">
          <img src="{{ asset('storage/' . $movie->image) }}" alt="Movie Image" class="h-full object-cover w-full" />
        </div>
        <div class="p-3 flex flex-col justify-center items-center w-full">
          <h1 class="text-2xl antialiased font-semibold leading-snug tracking-normal text-center text-text mb-2">
            <a href="{{ route('movies.showMovie', ['id' => $movie->id]) }}">{{ $movie->title }}</a>
          </h1>
          <div class="w-full flex justify-evenly">
            <!-- Watchlist Button Form -->
            @if(auth()->check())
            <form action="{{ route('watchlist.add', ['movieId' => $movie->id]) }}" method="POST" class="btn py-2 px-4 rounded text-button-txt bg-button-background w-5/12">
              @csrf
              <button type="submit" class="w-full">Watchlist</button>
            </form>
            @endif
            <a href="{{ route('trailers.index', ['movie_id' => $movie->id]) }}" class="btn py-2 px-4 rounded text-button-txt bg-button-background w-5/12">Trailer</a>
          </div>
          <div class="w-full flex justify-evenly mt-2">
            <button class="btn py-2 px-4 rounded text-button-txt bg-button-background w-5/12">Pictures</button>
            <a href="{{ route('movies.reviews.index', ['movie' => $movie->id]) }}" class="btn py-2 px-4 rounded text-button-txt bg-button-background w-5/12">Review</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>

  @include('footer')
</body>

</html>

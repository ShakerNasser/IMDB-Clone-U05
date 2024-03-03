<!DOCTYPE html>
<html lang="en">

@include('meta')
@include('navbar')

<head>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="{{ asset('use.typekit.net/zjb5wvv.js') }}"></script>
</head>
<!-- force deploy -->

<body class="bg-background">
  <div class="">
    <img src="{{ asset('images/batmanLanding.jpg') }}" alt="landing page picture" class="w-full opacity-75">
  </div>

  <section class="px-10 py-10">
    <h1 class="text-5xl font-bold mb-5 text-text"><span class="border-b-2 border-red-800">Featured movies</span></h1>
  </section>

  <section class="px-10 pb-10">
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 py-4">
      @foreach ($movies as $movie)
      <card class="relative flex max-w-[16rem] min-h-[28rem] flex-col overflow-hidden rounded-xl bg-card-background bg-clip-border text-gray-700 shadow-md">
        <div class="min-h-[55%] relative m-0 overflow-hidden text-gray-700 bg-transparent rounded-none shadow-none bg-clip-border">
          <img src="{{ asset('storage/' . $movie->image) }}" alt="Movie Image" class="h-full object-cover" />
        </div>
        <div class="p-3">
          <h1 class="text-2xl antialiased font-semibold leading-snug tracking-normal text-center text-text hover:bg-red-800">
            <a href="{{ route('movies.showMovie', ['id' => $movie->id]) }}">{{ $movie->title }}</a>
          </h1>
          <div class="">
            <div class="flex-col mt-2">
              @if(auth()->check())
              <form action="{{ route('watchlist.add', ['movieId' => $movie->id]) }}" method="POST" class="btn py-2 px-4 rounded text-center text-button-txt bg-button-background w-100">
                @csrf
                <button type="submit" class="w-full">Add Watchlist</button>
              </form>
              @endif

              <div class="flex justify-evenly mt-2">
                <a href="{{ route('trailers.index', ['movie_id' => $movie->id]) }}" class="btn py-2 px-4 rounded w-full text-center text-button-txt bg-button-background w-100">Trailer</a>
              </div>
              @if(auth()->check())
              <div class="flex justify-evenly mt-2">
                <a href="{{ route('movies.reviews.index', ['movie' => $movie->id]) }}" class="btn py-2 px-4 rounded w-full text-center text-button-txt bg-button-background w-100">Add Review</a>
              </div>
              @endif
              @if(auth()->check() && auth()->user()->role == 0)
              <div class="flex justify-evenly mt-2">
                <form action="{{ route('movie.destroy', $movie->id) }}" method="POST" class="flex justify-center">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </form>
              </div>
              @endif
            </div>
          </div>
        </div>
      </card>
      @endforeach
    </div>
  </section>

  @include('footer')
</body>

</html>
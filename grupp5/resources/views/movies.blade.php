<!DOCTYPE html>
<html lang="en">

@include('meta')
@include('navbar')
<title>{{ $movie->title }}</title>

<body class="bg-background">
    <section class="px-10 py-10">
        <h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">About: {{ $movie->title }}</span></h1>
    </section>


    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 bg-gray-700">
        <article class="prose lg:prose-lg xl:prose-xl text-text">
            <p>Genre: {{ $movie->genre }}</p>
            <p>Description:{{ $movie->description }}</p>
        </article>
        <div class="mt-100">
            <a href="{{ route('trailers.index', ['movie_id' => $movie->id]) }}" class="btn py-2 px-4 rounded text-button-txt bg-button-background w-100 hover:bg-red-800">Go to trailer</a>
        </div>
    </div>


    <div class="flex px-10 pt-4 pb-72 text-text">
        <div class="px-10 py-10">
            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Review</th>
                        @if (auth()->check() && auth()->user()->role == 0)
                        <th class="px-4 py-2">Actions</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reviews->where('movie_id', $movie->id)->reverse() as $review)
                    <tr>
                        <td class="px-4 py-2">{{ $review->review }}</td>
                        <td class="px-4 py-2">
                            <form action="{{ route('review.approve', $review->id) }}" method="POST">
                                @csrf
                                @if (auth()->check() && auth()->user()->role == 0)
                                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Approve</button>
                                @endif
                            </form>
                        </td>

                        <td>
                            <form action="{{ route('review.delete', $review->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                @if (auth()->check() && auth()->user()->role == 0)
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                @endif
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
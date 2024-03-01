<!DOCTYPE html>
<html lang="en">

@include('meta')
@include('navbar')

<head>
    <title>{{ $movie->title }}</title>
</head>

<body class="bg-background">
    <section class="px-10 py-10">
        <h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">About: {{ $movie->title }}</span></h1>
    </section>

    <div class="flex flex-col md:flex-row justify-between px-10 pb-8 text-text">
        <div class="md:w-1/2">
            <div class="pb-4">
                <p class="font-bold">Genre:</p>
                <p>{{ $movie->genre }}</p>
            </div>
            <div class="pb-4">
                <p class="font-bold">Description:</p>
                <p>{{ $movie->description }}</p>
            </div>
        </div>
        <div class="md:w-1/2 flex justify-end items-start">
            <a href="{{ route('trailers.index', ['movie_id' => $movie->id]) }}" class="btn py-2 px-4 rounded text-button-txt bg-button-background hover:bg-red-800">Go to trailer</a>
        </div>
    </div>

    <div class="flex px-10 pb-8 text-text">
        <div class="w-full">
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
                            <form action="{{ route('review.delete', $review->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                @if (auth()->check() && auth()->user()->role == 0)
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-2 md:mt-0 md:ml-2">Delete</button>
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

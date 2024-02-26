<!DOCTYPE html>
<html lang="en">

@include('meta')

<body class="bg-background flex flex-col justify-center items-center h-screen">
    <card class="relative flex max-w-[16rem] flex-col overflow-hidden rounded-xl bg-card-background bg-clip-border text-gray-700 shadow-md">
        <div class="min-h-[60%] relative m-0 overflow-hidden text-gray-700 bg-transparent rounded-none shadow-none bg-clip-border">
            <img src="{{ $movie->image }}" alt="Movie Image" class="h-full object-cover" />
        </div>
        <div class="p-3">
            <h1 class="text-2xl antialiased font-semibold leading-snug tracking-normal text-center text-text">
                {{ $movie->title }}
            </h1>
        </div>
    </card>

    <section class="px-10 py-10">
        <h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">Movie Review</span></h1>
        @if(session('status'))
        <div class="alert alert-success" style="color: green;">
            {{ session('status') }}
        </div>
        @endif
        <div class="mx-auto max-w-screen-md mt-4">
            <form action="{{ route('reviews.store', ['movie_id' => $movie_id]) }}" method="POST" class="border border-gray-300 rounded-lg p-4">
                @csrf
                <p>
                    <label for="review" class="block text-text mt-3">Leave a review:</label>
                    <input maxlength="50" size="30" required placeholder="Review" name="review" class="form-input w-full bg-gray-100 border border-gray-300 rounded p-2" />
                </p>
                <div class="text-center">
                    <button type="submit" name="submit" class=" text-button-txt bg-button-background font-bold py-2 px-4 rounded mt-6 text-center">Add review</button>
                </div>
            </form>
        </div>
    </section>
    @foreach ($reviews->where('movie_id', $movie->id)->reverse() as $review)
    <card class="">
        <div class="">
            <p class="text-text">
                {{ $review->review}}
            </p>
    </card>
    @endforeach


</body>

</html>
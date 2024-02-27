<!DOCTYPE html>
<html lang="en">

@include('meta')
@include('navbar')

<body class="bg-background">
    <section class="px-10 py-10">
        <h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">Movie Review</span></h1>

    </section>

    {{-- Form to add a review --}}

    <section class="px-10 py-10">
        <h2 class="text-3xl font-bold mb-5 text-text">{{ $movie->title }}</h2>

 
        <div class="mx-auto max-w-screen-md mt-4">
            <form action="{{ route('reviews.store', ['movie_id' => $movie_id]) }}" method="POST" class="border border-gray-300 rounded-lg p-4">
                @csrf
                <p>
                    <label for="review" class="block text-text mt-3">Leave a review:</label>
                    <input maxlength="100" size="40" required placeholder="Inspire others..." name="review" class="form-input w-full bg-gray-100 border border-gray-300 rounded p-2" />
                </p>
                <div class="text-center">
                    <button type="submit" name="submit" class=" text-button-txt bg-button-background font-bold py-2 px-4 rounded mt-6 text-center">Add review</button>
                </div>
            </form>
        </div>
    </section>

    <div class="text-text">
    @if(session('status'))
        <div class="alert alert-success" style="color: green;">
            {{ session('status') }}
        </div>
        @endif
        </div>
    @include('footer')

</body>

</html>
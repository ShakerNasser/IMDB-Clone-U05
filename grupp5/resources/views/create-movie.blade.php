<!DOCTYPE html>
<html lang="en">
@include('navbar')
@include('meta')

<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-background h-screen">

    <section class="px-10 text-center py-10">
        <h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">Movie settings</span></h1>
    </section>
    <div class="mx-auto max-w-screen-md mt-4">
        <form action="{{url('store-movie')}}" method="post" enctype="multipart/form-data" class="border border-gray-300 rounded-lg p-4">

            @csrf
            <h4 class="text-text">Add movie by entering the following:</h4>

            <div>
                <label for="title" class="block text-text mt-3">Title:</label>
                <input maxlength="50" name="title" id="title" size="30" type="text" required placeholder="Movie title" class="form-input w-full bg-gray-100 border border-gray-300 rounded p-2" />
            </div>

            <div>
                <label for="description" class="block text-text mt-3">Description:</label>
                <textarea maxlength="250" name="description" id="description"  rows="3" cols="50" required placeholder="Description" class="form-input w-full bg-gray-100 border border-gray-300 rounded p-2"></textarea>
            </div>

            <div>
                <label for="genre" class="block text-text mt-3">Genre:</label>
                <input maxlength="50" name="genre" id="genre" size="30" type="text" required placeholder="Genre" class="form-input w-full bg-gray-100 border border-gray-300 rounded p-2" />
            </div>


            <div>
                <label for="trailer_url" class="block text-text mt-3">Trailer:</label>
                <textarea maxlength="100" name="trailer_url" id="trailer_url" rows="1" cols="50" required placeholder="Enter movie trailers URL" class="form-input w-full bg-gray-100 border border-gray-300 rounded p-2"></textarea>
            </div>


            <div>
                <label for="image" class="block text-text mt-3">Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required class="form-input w-full bg-gray-100 border border-gray-300 rounded p-2" />
            </div>

            <div class="text-center">
                <button type="submit" name="submit" class=" text-button-txt bg-button-background font-bold py-2 px-4 rounded mt-6 text-center">Add movie</button>
            </div>
        </form>
    </div>
    @if(session('status'))
    <div class="mt-4 text-center">
        <h1 class="text-text" style="color: green;">{{ session('status') }}</h1>
    </div>
    @endif


    @include('footer')

</body>

</html>
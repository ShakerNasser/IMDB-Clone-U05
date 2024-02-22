<!DOCTYPE html>
<html lang="en">

@include('meta')

<body class="bg-background flex justify-center items-center h-screen">

    <section class="px-10 py-10">
        <h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">Movie settings</span></h1>
        
        <div class="mx-auto max-w-screen-md mt-4">
            <form action="" method="post" class="border border-gray-300 rounded-lg p-4">
                @csrf
                <h4 class="text-text">Add movie by entering the following:</h4>

                <p>
                    <label for="title" class="block text-text mt-3">Title:</label>
                    <input maxlength="50" name="title" id="title" size="30" type="text" required
                        placeholder="Movie title" class="form-input w-full bg-gray-100 border border-gray-300 rounded p-2" />
                </p>

                <p>
                    <label for="description" class="block text-text mt-3">Description:</label>
                    <input maxlength="50" name="description" id="description" size="30" type="text" required
                        placeholder="Description" class="form-input w-full bg-gray-100 border border-gray-300 rounded p-2" />
                </p>

                <p>
                    <label for="genre" class="block text-text mt-3">Genre:</label>
                    <input maxlength="50" name="genre" id="genre" size="30" type="text" required
                        placeholder="Genre" class="form-input w-full bg-gray-100 border border-gray-300 rounded p-2" />
                </p>

                <p>
                    <label for="trailers" class="block text-text mt-3">Trailers:</label>
                    <textarea maxlength="100" name="trailers" id="trailers" rows="1" cols="50" required
                        placeholder="Enter movie trailers URL" class="form-input w-full bg-gray-100 border border-gray-300 rounded p-2"></textarea>
                </p>

                <p>
                    <label for="image" class="block text-text mt-3">Image:</label>
                    <input type="file" id="image" name="image" accept="image/*" required
                        class="form-input w-full bg-gray-100 border border-gray-300 rounded p-2" />
                </p>

                <div class="text-center">
                <button type="submit" name="submit" class=" text-button-txt bg-button-background font-bold py-2 px-4 rounded mt-6 text-center">Add movie</button>
                </div>
            </form>
        </div>
    </section>
    

</body>

</html>
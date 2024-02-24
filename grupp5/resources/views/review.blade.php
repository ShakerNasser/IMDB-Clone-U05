<!DOCTYPE html>
<html lang="en">

@include('meta')

<body class="bg-background flex justify-center items-center h-screen">

<h1 class="text-text"></h1>


    <section class="px-10 py-10">
        <h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">Movie Review</span></h1>
        
        <div class="mx-auto max-w-screen-md mt-4">
            <form action="{{url('review')}}" method="POST" class="border border-gray-300 rounded-lg p-4">
                @csrf
                <p>
                    <label for="review" class="block text-text mt-3">Leave a review:</label>
                    <input maxlength="50" name="review" id="review" size="30" type="text" required
                        placeholder="Review" class="form-input w-full bg-gray-100 border border-gray-300 rounded p-2" />
                </p>
                <div class="text-center">
                <button type="submit" name="submit" class=" text-button-txt bg-button-background font-bold py-2 px-4 rounded mt-6 text-center">Add movie</button>
                </div>
            </form>
        </div>

          @if(session('status'))
    <div class="alert alert-success">
     <h1 class="text-text">{{ session('status') }}</h1>   
    </div>
  @endif
    </section>
  

</body>

</html>

<!DOCTYPE html>
<html lang="en">
@include('meta')
@include('navbar')

<body class="bg-background">
    <section class="px-10 py-10">
        <h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">Watchlist</span></h1>
    </section>

    <div class="flex px-10 pt-4 pb-72 justify-center"> 
        <table class="table-auto bg-custom-color w-full"> 
            <thead>
                <tr>
                    <th class="text-text text-lg px-4 py-2 text-center">Title</th>
                    <th class="text-text text-lg px-4 py-2 text-center">Genre</th>
                    <th class="text-text text-lg px-4 py-2 text-center">Image</th>
                    <th class="text-text text-lg px-4 py-2 text-center">Action </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($watchlists as $watchlist)
                @if ($watchlist->movie)
                <tr class="text-lg h-16"> 
                    <td class="text-text px-4 py-2 text-center hover:bg-red-700">{{ $watchlist->movie->title }}</td>
                    <td class="text-text px-4 py-2 text-center">{{ $watchlist->movie->genre }}</td>
                   
                    <td class="px-4 py-2 text-center">
                        <div class="flex items-center justify-center">
                            <img src="{{ asset('storage/' .$watchlist->movie->image) }}" width='100' height='100' class='img img-respnsive'/> 
                        </div>
                    </td>
                    <td class="px-4 py-2 text-center">
                        <form action="{{ route('watchlist.destroy', $watchlist->id) }}" method="POST" class="flex justify-center">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                    </td>
                </tr>

                @endif
                @endforeach
            </tbody>
        </table>

        @if(session('status'))
        <div>
            <h1 class="text-2xl antialiased font-semibold leading-snug tracking-normal text-center  text-text">{{ session('status') }}</h1>
        </div>
        @endif


    </div>
    @include('footer')

</body>

</html>

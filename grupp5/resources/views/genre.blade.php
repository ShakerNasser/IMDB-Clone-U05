<!DOCTYPE html>

@include('meta')
@include('navbar')
<body class="bg-background">
    <section class="px-10 py-10">
        <h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">Movies by Genre</span></h1>
    </section>

    <!-- Genre tables container -->
    <div class="flex flex-col px-10 py-10 space-y-8">
        @foreach ($moviesByGenre as $genre => $movies)
            <div>
                <h2 class="text-3xl font-bold mb-4 text-text">Genre: {{ $genre }}</h2>
                <table class="table-auto bg-custom-color">
                    <thead>
                        <tr>
                            <th class="text-text text-lg px-4 py-2 ">Title</th>
                            <th class="text-text text-lg px-4 py-2 ">Genre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movies as $movie)
                            <tr class="hover:bg-red-700">
                                <td class="text-text text-lg px-4 py-2 ">{{ $movie->title }}</td>
                                <td class="text-text text-lg px-4 py-2 ">{{ $movie->genre }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
</body>


</html>

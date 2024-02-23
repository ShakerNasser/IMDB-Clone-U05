<!DOCTYPE html>
<html lang="en">
@include('meta')

<body class="bg-background">
    @if(session('status'))
    <div class="alert alert-success">
        <h1>{{ session('status') }}</h1>
    </div>
    @endif
    <section class="px-10 py-10">
        <h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">Watchlist</span></h1>
    </section>

    <div class="grid grid-cols-3 gap-4 ml-10">
        @foreach ($watchlists as $watchlist)
        <div class="relative flex max-w-[16rem] min-h-[26rem] flex-col overflow-hidden rounded-xl bg-card-background bg-clip-border text-gray-700 shadow-md">
            <div class="min-h-[60%] relative m-0 overflow-hidden text-gray-700 bg-transparent rounded-none shadow-none bg-clip-border">

            </div>
            <div class="p-3 flex flex-col justify-center items-center">
            <div class="min-h-[60%] relative m-0 overflow-hidden text-gray-700 bg-transparent rounded-none shadow-none bg-clip-border">
                <!-- picture from the database -->
        </div>
                <h1 class="text-2xl antialiased font-semibold leading-snug tracking-normal text-center  text-text">

                    {{ $watchlist->movie->title }}
                </h1>
                <h1> {{ $watchlist->movie->genre }} </h1>

            </div>
        </div>
        @endforeach
    </div>


</body>

</html>
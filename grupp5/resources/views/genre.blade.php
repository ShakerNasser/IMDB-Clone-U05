<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-background">

    <section class="px-10 py-10">
        <h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">Genre</span></h1>
    </section>

    <div class="grid grid-cols-3 gap-4">
        <div class="relative flex max-w-[16rem] min-h-[26rem] flex-col overflow-hidden rounded-xl bg-card-background bg-clip-border text-gray-700 shadow-md">
            <div class="min-h-[60%] relative m-0 overflow-hidden text-gray-700 bg-transparent rounded-none shadow-none bg-clip-border">
                <img src="https://example.com/movie1.jpg" alt="Movie 1" class="h-full object-cover" />
            </div>
            <div class="p-3 flex flex-col justify-center items-center">
                <h1 class="text-2xl antialiased font-semibold leading-snug tracking-normal text-center text-text">
                    Movie 1
                </h1>
                <div class="">
                    <button class="btn py-2 px-4 rounded text-text bg-green-600 mx-auto mt-">Add to Watchlist</button>
                </div>
            </div>
        </div>

        <div class="relative flex max-w-[16rem] min-h-[26rem] flex-col overflow-hidden rounded-xl bg-card-background bg-clip-border text-gray-700 shadow-md">
            <div class="min-h-[60%] relative m-0 overflow-hidden text-gray-700 bg-transparent rounded-none shadow-none bg-clip-border">
                <img src="https://example.com/movie2.jpg" alt="Movie 2" class="h-full object-cover" />
            </div>
            <div class="p-3 flex flex-col justify-center items-center">
                <h1 class="text-2xl antialiased font-semibold leading-snug tracking-normal text-center text-text">
                    Movie 2
                </h1>
                <div class="">
                    <button class="btn py-2 px-4 rounded text-text bg-green-600 mx-auto mt-">Add to Watchlist</button>
                </div>
            </div>
        </div>

        <div class="relative flex max-w-[16rem] min-h-[26rem] flex-col overflow-hidden rounded-xl bg-card-background bg-clip-border text-gray-700 shadow-md">
            <div class="min-h-[60%] relative m-0 overflow-hidden text-gray-700 bg-transparent rounded-none shadow-none bg-clip-border">
                <img src="https://example.com/movie3.jpg" alt="Movie 3" class="h-full object-cover" />
            </div>
            <div class="p-3 flex flex-col justify-center items-center">
                <h1 class="text-2xl antialiased font-semibold leading-snug tracking-normal text-center text-text">
                    Movie 3
                </h1>
                <div class="">
                    <button class="btn py-2 px-4 rounded text-text bg-green-600 mx-auto mt-">Add to Watchlist</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

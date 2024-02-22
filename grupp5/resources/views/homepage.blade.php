<!DOCTYPE html>
<html lang="en">
    @include('meta')

<body class="bg-background">
<div class="">
    <img src="{{ asset('images/landing.jpg') }}" alt="landing page picture" class="w-full opacity-75">
</div>
<!-- Top Movies -->
<section class="px-10 py-10">
    <h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">Top movies</span></h1>
</section>
<section class="px-10">
  <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 py-4">
<card
  class="relative flex max-w-[16rem] min-h-[26rem] flex-col overflow-hidden rounded-xl bg-card-background bg-clip-border text-gray-700 shadow-md">
  <div class="min-h-[60%] relative m-0 overflow-hidden text-gray-700 bg-transparent rounded-none shadow-none bg-clip-border">
    <img
      src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80"
      alt="ui/ux review check" 
      class="h-full object-cover"
      />
  </div>
  <div class="p-3">
    <h1 class="text-2xl antialiased font-semibold leading-snug tracking-normal text-center  text-text">
      Movie title
    </h1>
    <div class="">
        <div class="flex justify-evenly mt-2">
            <button class="btn py-2 px-4 rounded text-button-txt bg-button-background w-5/12">Watchlist</button>
            <button class="btn py-2 px-4 rounded text-button-txt bg-button-background w-5/12">Trailer</button>
        </div>
        <div class="flex justify-evenly mt-2">
            <button class="btn py-2 px-4 rounded text-button-txt bg-button-background w-5/12">Pictures</button>
            <button class="btn py-2 px-4 rounded text-button-txt bg-button-background w-5/12">Episodes</button>
        </div>
    </div>
  </div>
            </card> 
</section>

<!-- all movies -->
<section class="px-10 py-10">
    <h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">All movies</span></h1>
</section>
<section class="px-10">
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
<card
  class="relative flex max-w-[16rem] min-h-[26rem] flex-col overflow-hidden rounded-xl bg-card-background bg-clip-border text-gray-700 shadow-md">
  <div class="min-h-[60%] relative m-0 overflow-hidden text-gray-700 bg-transparent rounded-none shadow-none bg-clip-border">
    <img
      src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80"
      alt="ui/ux review check" 
      class="h-full object-cover"
      />
  </div>
  <div class="p-3">
    <h1 class="text-2xl antialiased font-semibold leading-snug tracking-normal text-center  text-text">
      Movie title
    </h1>
    <div class="">
        <div class="flex justify-evenly mt-2">
            <button class="btn py-2 px-4 rounded text-button-txt bg-button-background w-5/12">Watchlist</button>
            <button class="btn py-2 px-4 rounded text-button-txt bg-button-background w-5/12">Trailer</button>
        </div>
        <div class="flex justify-evenly mt-2">
            <button class="btn py-2 px-4 rounded text-button-txt bg-button-background w-5/12">Pictures</button>
            <button class="btn py-2 px-4 rounded text-button-txt bg-button-background w-5/12">Episodes</button>
        </div>
    </div>
  </div>
            </card> 

</section>
</body>
</html>
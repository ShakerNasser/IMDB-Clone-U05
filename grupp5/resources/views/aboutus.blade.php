<!DOCTYPE html>
<html lang="en">

@include('meta')
@include('navbar')

<body class="bg-background">

  <div class="text-center w-full">
    <section class="px-10 py-10 text-center">
      <h1 class="text-5xl font-bold mb-1 text-text"><span class="underline">About us</span></h1>
    </section>
  </div>

  <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">

    <article class="prose lg:prose-lg xl:prose-xl text-text">
      <p>MovieHub is a passionate community of film lovers who believe in the power of stories and how they can bring people together. We are convinced that movies are not just entertainment, but also a source of inspiration, reflection, and change.</p>
      <p>Our platform is not just a database of movies and actors; it's a community where people can share their thoughts, ideas, and feelings about movies. We believe in creating an inclusive and welcoming environment where everyone can feel at home, whether they are beginners or experienced film enthusiasts.</p>
      <p>We are proud to be a part of the global film community and look forward to continuing to grow and evolve together with our users. Thank you for being a part of MovieHub!</p>
    </article>

  </div>

  <div class="grid justify-items-center sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 py-4">

    <card class="relative flex max-w-[16rem] min-h-[28rem] flex-col overflow-hidden rounded-xl bg-card-background bg-clip-border text-gray-700 shadow-md">
      <div class="min-h-[55%] relative m-0 overflow-hidden text-gray-700 bg-transparent rounded-none shadow-none bg-clip-border">
        <img src="{{ asset('images/shaker.png') }}" alt="shaker" class="h-full object-cover" />
      </div>
      <p class="font-bold text-xl text-text text-center"> Shaker </p>
    </card>

    <card class="relative flex max-w-[16rem] min-h-[28rem] flex-col overflow-hidden rounded-xl bg-card-background bg-clip-border text-gray-700 shadow-md">
      <div class="min-h-[55%] relative m-0 overflow-hidden text-gray-700 bg-transparent rounded-none shadow-none bg-clip-border">
        <img src="{{ asset('images/heval.png') }}" alt="Heval" class="h-full object-cover" />
      </div>
      <p class="font-bold text-xl text-text text-center"> Heval </p>
    </card>

    <card class="relative items-center flex max-w-[16rem] min-h-[28rem] flex-col overflow-hidden rounded-xl bg-card-background bg-clip-border text-gray-700 shadow-md">
      <div class="min-h-[55%] relative m-0 overflow-hidden text-gray-700 bg-transparent rounded-none shadow-none bg-clip-border">
        <img src="{{ asset('images/mikael.png') }}" alt="shaker" class="h-full object-cover" />
      </div>
      <p class="font-bold text-xl text-text text-center"> Mikael </p>

    </card>

    <card class="relative flex max-w-[16rem] min-h-[28rem] flex-col overflow-hidden rounded-xl bg-card-background bg-clip-border text-gray-700 shadow-md">
      <div class="min-h-[55%] relative m-0 overflow-hidden text-gray-700 bg-transparent rounded-none shadow-none bg-clip-border">
        <img src="{{ asset('images/arian.png') }}" alt="shaker" class="h-full object-cover" />
      </div>
      <p class="font-bold text-xl text-text text-center"> Arian </p>
    </card>

  </div>

  @include('footer')
</body>

</html>
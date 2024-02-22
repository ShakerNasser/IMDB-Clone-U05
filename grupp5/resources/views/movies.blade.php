<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies List</title>
    <!-- Add any additional head content here -->
</head>
<body>
    <h1>Movies</h1>
    <ul>
        @foreach ($movies as $movie)
          <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
            <div class="card p-1 m-2" style="width:350px">
             
              <p class="card-title">{{$movie->title}}</p>
<img src="{{ asset('images/' . $movie->image) }}" alt="Movie Image" />

              <span style="display: inline;">
                {{ $movie->description }}</span>
            </div>
          </div>
          @endforeach

      
    </ul>
</body>
</html>
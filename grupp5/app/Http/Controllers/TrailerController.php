<?php

namespace App\Http\Controllers;

use Cohensive\OEmbed\Facades\OEmbed;
use App\Models\Movie;

class TrailerController extends Controller
{
    public function index()
    {
        // Fetch all movies from the database
        $movies = Movie::all();

        // Loop through each movie and fetch the embed code for the YouTube video
        foreach ($movies as $movie) {
            // Fetch the embed code for the YouTube video
            $embedCode = OEmbed::get($movie->trailer_url);

            // Store the embed code in the $movie object
            $movie->embedCode = $embedCode;
        }

        // Pass the movies to the view
        return view('trailer', compact('movies'));
    }
}

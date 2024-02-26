<?php

namespace App\Http\Controllers;

use Cohensive\OEmbed\Facades\OEmbed;
use App\Models\Movie;

class TrailerController extends Controller
{
    public function index($movie_id)
    {
        // Fetch all movies from the database
        $movie = Movie::findOrFail($movie_id);

        // Loop through each movie and fetch the embed code for the YouTube video

        // Fetch the embed code for the YouTube video
        $embedCode = OEmbed::get($movie->trailer_url);

        // Store the embed code in the $movie object
        $movie->embedCode = $embedCode;


        // Pass the movies to the view
        return view('trailer', compact('movie_id', 'movie'));
    }
}

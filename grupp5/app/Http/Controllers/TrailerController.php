<?php

namespace App\Http\Controllers;

use Cohensive\OEmbed\Facades\OEmbed;
use App\Models\Movie;

class TrailerController extends Controller
{
    public function index($movie_id)
    {
        // Fetch the movie from the database
        $movie = Movie::findOrFail($movie_id);

        // Check if the movie has a trailer URL
        if (empty($movie->trailer_url)) {
            // Set a status message in the session
            session()->flash('status', 'Trailer not available.');

            // Redirect back to the movie listing page
            return redirect()->route('trailers.index');
        }

        // Fetch the embed code for the YouTube video
        $embedCode = OEmbed::get($movie->trailer_url);

        // Store the embed code in the $movie object
        $movie->embedCode = $embedCode;

        // Pass the movie to the view
        return view('trailer', compact('movie'));
    }
}

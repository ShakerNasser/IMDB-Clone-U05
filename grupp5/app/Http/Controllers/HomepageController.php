<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie; // Don't forget to use your model

class HomepageController extends Controller
{
    public function index()
    {
        $movies = Movie::all(); // Fetch all movies from the database
        return view('homepage', ['movies' => $movies]); // Pass the movies to the homepage view
    }
}

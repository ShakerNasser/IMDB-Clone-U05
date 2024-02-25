<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return view('create-movie');
    }
    public function store(Request $request)
    {
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->genre = $request->genre;
        $movie->trailer_url = $request->trailer_url;
        $movie->image = $request->image;

        $movie->save();
        return redirect('create-movie')->with('status', 'Movie has been inserted');
    }

    public function genre()
{
    $moviesByGenre = Movie::all()->groupBy('genre');

    return view('genre', compact('moviesByGenre'));
}

    /**
     * Display a listing of the resource.
     */


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    //Function for search form 
    public function search(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $title = $request->input('title');
        $movies = Movie::where('title', 'LIKE', '%' . $title . '%')->get();

        return view('search', compact('movies'));
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $movies = Movie::get();
        return view('movies', ['movies' => $movies]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Storage;

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


        // Sparar bilden och hämtar dess sökväg
        $path = Storage::disk('public')->put('images', $request->file('image'));

        // Kontrollera om bilden sparades korrekt innan du fortsätter
        if ($path) {
            // Spara bildens sökväg i databasen
            $movie->image = $path;
            $image = $request->file('image');

            $path = $image->store('public/images');
            // Sparar filmobjektet till databasen
            $movie->save();

            // Returnera en respons eller omdirigering beroende på ditt användningsfall
            return redirect('create-movie')->with('status', 'Movie has been inserted');
        } else {
            // Om bilden inte kunde sparas, återgå med ett felmeddelande
            return back()->with('error', 'Failed to save image');
        }
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
            'query' => 'required|min:3', // Minimum 3 characters
        ]);

        $query = $request->input('query');
        $movies = Movie::where('title', 'LIKE', '%' . $query . '%')
            ->orWhere('description', 'LIKE', '%' . $query . '%')
            ->orWhere('genre', 'LIKE', '%' . $query . '%')
            ->paginate(10);

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


    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();

        return back();
    }

    public function showMovie($id)
    {
        $movie = Movie::findOrFail($id);
        $reviews = $movie->reviews()->latest()->get();
        return view('movies', compact('movie', 'reviews'));
    }
}

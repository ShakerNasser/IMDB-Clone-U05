<?php

namespace App\Http\Controllers;

use App\Models\Watchlist;
use Illuminate\Http\Request;

class WatchlistController extends Controller
{
   
 public function add(Request $request, $movieId)
{
    $userId = auth()->id();
    
    $exists = Watchlist::where('user_id', $userId)->where('movie_id', $movieId)->exists();
    if (!$exists) {
        Watchlist::create([
            'user_id' => $userId,
            'movie_id' => $movieId,
        ]);
        return back()->with('success', 'Movie added to watchlist!');
    }

    return back()->with('error', 'Movie is already in your watchlist.');
}


public function showWatchlist()
{
    // Hämta den inloggade användarens ID
    $userId = auth()->id();

    // Hämta watchlist-filmer för den inloggade användaren
    $watchlistItems = Watchlist::with('movie')->where('user_id', $userId)->get();

    // Skicka watchlist-filmer till vyn
    return view('watchlist.blade.php', ['watchlistItems' => $watchlistItems]);
}


    /**
     * Display the specified resource.
     */
    public function show()
    {
        $watchlists = Watchlist::all();
        return view('watchlist', ['watchlists' => $watchlists]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Hitta watchlist med id:et
        $watchlist = Watchlist::findOrFail($id);
    
        // Ta bort watchlist från databasen
        $watchlist->delete();
    
        // Skicka tillbaka användaren till watchlist-sidan med en statusmeddelande
        return redirect('watchlist')->with('status', 'The movie is deleted from he watchlist');    
    }
    
}

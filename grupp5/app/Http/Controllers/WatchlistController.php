<?php

namespace App\Http\Controllers;

use App\Models\watchlist;
use Illuminate\Http\Request;

class WatchlistController extends Controller
{
   
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
        return redirect('watchlist')->with('status', 'The movie is deleted from he watchlist');    }
    
}

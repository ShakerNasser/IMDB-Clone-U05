<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\MovieController;
use App\Models\Title;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\WatchlistController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/test', function () {
    return view('navbar-footer');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*arian */



/*mikael */
Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('/review', [ReviewController::class, 'show']);
Route::post('/review', [ReviewController::class, 'store']);

Route::get('/movies', [MovieController::class, 'show']);
Route::post('/watchlist/add/{movieId}', [WatchlistController::class, 'add'])->middleware('auth')->name('watchlist.add');




/*shaker */
Route::get('/watchlist', [WatchlistController::class, 'show']);
Route::get('/create-movie', [MovieController::class, 'index']);
Route::post('/store-movie', [MovieController::class, 'store']);
Route::delete('/watchlist/{id}', [WatchlistController::class, 'destroy'])->name('watchlist.destroy');



/*alex */




/*heval */
Route::get('/genre', function () {return view('/genre');});



require __DIR__.'/auth.php';

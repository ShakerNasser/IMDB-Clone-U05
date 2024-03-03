<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\MovieController;
use App\Models\Title;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\TrailerController;
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
Route::get('/movies/{movie}/reviews', [ReviewController::class, 'index'])->name('movies.reviews.index');
Route::post('/review', [ReviewController::class, 'store']);
Route::get('/genre', [MovieController::class, 'genre'])->name('genre');
Route::get('/movies/{id}', [MovieController::class, 'showMovie'])->name('movies.showMovie');
Route::post('/watchlist/add/{movieId}', [WatchlistController::class, 'add'])->middleware('auth')->name('watchlist.add');
Route::post('/movies/{movie_id}', [ReviewController::class, 'store'])->name('reviews.store');



/*shaker */
Route::get('/watchlist', [WatchlistController::class, 'show']);
Route::get('/create-movie', [MovieController::class, 'index']);
Route::post('/store-movie', [MovieController::class, 'store'])->name('store-movie');
Route::delete('/watchlist/{id}', [WatchlistController::class, 'destroy'])->name('watchlist.destroy');
Route::post('/review/{id}/approve', [ReviewController::class, 'approve'])->name('review.approve');
Route::delete('/review/{id}/delete', [ReviewController::class, 'delete'])->name('review.delete');
Route::delete('/movie/{id}', [MovieController::class, 'destroy'])->name('movie.destroy');


Route::get('/trailer/{movie_id}', [TrailerController::class, 'index'])->name('trailers.index');
Route::get('/search', [MovieController::class, 'search'])->name('search');
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

/*alex */




/*heval */

Route::get('/usersettings', [AdminController::class, 'show'])->name('usersettings');
Route::get('/usersettings/{id}/edit', [AdminController::class, 'edit'])->name('user.edit');
Route::put('/usersettings/{id}', [AdminController::class, 'update'])->name('user.update');
Route::delete('/usersettings/{id}', [AdminController::class, 'delete'])->name('user.delete');





require __DIR__ . '/auth.php';

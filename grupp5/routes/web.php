<?php

use App\Http\Controllers\GenreController;
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

Route::get('/', function () {
    return view('homepage');
});
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

Route::get('/review', [ReviewController::class, 'show']);
Route::post('/review', [ReviewController::class, 'store']);

Route::get('/movies', [MovieController::class, 'show']);



/*shaker */
Route::get('/watchlist', [WatchlistController::class, 'show']);
Route::get('/create-movie', [MovieController::class, 'index']);
Route::post('/store-movie', [MovieController::class, 'store']);



/*alex */




/*heval */
Route::get('/genre', function () {return view('/genre');});



require __DIR__.'/auth.php';

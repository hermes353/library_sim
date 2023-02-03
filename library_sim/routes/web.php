<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    $user_books = \App\Models\Book::all()->where('owner_id', \Illuminate\Support\Facades\Auth::id());
    return view('dashboard', array('user_books' => $user_books));

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/add_new_book', function () {
    return view('pages.new_book_form');
});

/*
Route::middleware('auth')->group(function () {
    Route::put('/library', [\App\Http\Controllers\LibraryController::class, 'storeBook'])->name('library.storeBook');
    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/library', [\App\Http\Controllers\LibraryController::class, 'destroyBook'])->name('library.destroyBook');
});
*/

Route::resource('/library', 'App\Http\Controllers\LibraryController');
Route::put('/library', [\App\Http\Controllers\LibraryController::class, 'store'])->name('library.store');

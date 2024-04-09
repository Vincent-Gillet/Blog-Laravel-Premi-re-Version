<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/legals', [ProfileController::class, 'legals'])->name('legals'); 

Route::get('/about_us', [ProfileController::class, 'about_us'])->name('about_us');

Route::get('/', [ProfileController::class, 'articles'])->name('articles');



Route::middleware('auth')->group(function () {
    // returns the home page with all posts
    Route::get('/dashboard', PostController::class .'@index')->name('dashboard');
    // returns the form for adding a post
    Route::get('/dashboard/create', PostController::class . '@create')->name('dashboard.create');
    // adds a post to the database
    Route::post('/dashboard', PostController::class .'@store')->name('dashboard.store');
    // returns a page that shows a full post
    Route::get('/dashboard/{post}', PostController::class .'@show')->name('dashboard.show');
    // returns the form for editing a post
    Route::get('/dashboard/{post}/edit', PostController::class .'@edit')->name('dashboard.edit');
    // updates a post
    Route::put('/dashboard/{post}', PostController::class .'@update')->name('dashboard.update');
    // deletes a post
    Route::delete('/dashboard/{post}', PostController::class .'@destroy')->name('dashboard.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';




// // returns the home page with all posts
// Route::get('/', PostController::class .'@index')->name('posts.index');
// // returns the form for adding a post
// Route::get('/posts/create', PostController::class . '@create')->name('posts.create');
// // adds a post to the database
// Route::post('/posts', PostController::class .'@store')->name('posts.store');
// // returns a page that shows a full post
// Route::get('/posts/{post}', PostController::class .'@show')->name('posts.show');
// // returns the form for editing a post
// Route::get('/posts/{post}/edit', PostController::class .'@edit')->name('posts.edit');
// // updates a post
// Route::put('/posts/{post}', PostController::class .'@update')->name('posts.update');
// // deletes a post
// Route::delete('/posts/{post}', PostController::class .'@destroy')->name('posts.destroy');




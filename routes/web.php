<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReadingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

// Public Pages
//Route::view('/', 'welcome');
Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/readings', [ReadingController::class, 'publicIndex'])->name('readings');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Authenticated Pages
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/readings/create', [ReadingController::class, 'create'])->name('readings.create');
    Route::post('/readings', [ReadingController::class, 'store'])->name('readings.store');
    Route::get('/readings/history', [ReadingController::class, 'index'])->name('readings.index');

    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');

    // Blog management
    Route::get('/dashboard/blog', [BlogController::class, 'dashboard'])->name('blog.dashboard');
    Route::get('/dashboard/blog/{post}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::patch('/dashboard/blog/{post}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/dashboard/blog/{post}', [BlogController::class, 'destroy'])->name('blog.destroy');
});

require __DIR__ . '/auth.php';

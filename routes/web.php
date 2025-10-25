<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/readings/create', [ReadingController::class, 'create'])->name('readings.create');
    Route::post('/readings', [ReadingController::class, 'store'])->name('readings.store');
    Route::get('/readings/history', [ReadingController::class, 'index'])->name('readings.index');
});

// Public Pages
Route::view('/about', 'pages.about')->name('about');
Route::view('/readings', 'pages.readings')->name('readings');
Route::view('/contact', 'pages.contact')->name('contact');

require __DIR__ . '/auth.php';

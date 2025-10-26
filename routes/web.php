<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReadingController;
use Illuminate\Support\Facades\Route;

// Public Pages
//Route::view('/', 'welcome');
Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');
Route::get('/readings', [ReadingController::class, 'publicIndex'])->name('readings');

// Authenticated Pages
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/readings/create', [ReadingController::class, 'create'])->name('readings.create');
    Route::post('/readings', [ReadingController::class, 'store'])->name('readings.store');
    Route::get('/readings/history', [ReadingController::class, 'index'])->name('readings.index');
});

require __DIR__ . '/auth.php';

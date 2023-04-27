<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscribeController;
use App\Http\Middleware\Authenticate;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Auth::login(User::first());

    return view('dashboard');
})->name('home');

Route::view('twitter', 'twitter')->name('twitter');
Route::get('subscribe', SubscribeController::class)
    ->name('subscribe')
    ->middleware([Authenticate::class]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

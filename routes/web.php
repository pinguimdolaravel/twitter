<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\VerifiedOrganizationController;
use App\Http\Middleware\Authenticate;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return to_route('twitter');
})->name('home');

Route::view('twitter', 'twitter')->middleware('auth')->name('twitter');
Route::get('subscribe', SubscribeController::class)
    ->name('subscribe')
    ->middleware([Authenticate::class]);

Route::get('verified-organization', VerifiedOrganizationController::class)
    ->name('verified-organization')
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

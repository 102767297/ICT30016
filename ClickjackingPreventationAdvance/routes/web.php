<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

// Login Route
Route::get('/', function () {
    return view('login'); // Ensure 'login.blade.php' exists in the resources/views folder
})->name('login'); // Name this route 'login'

// Login POST Route
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Dashboard route (protected by auth middleware)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Logout route
    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('login'); // Redirect to login page after logout
    })->name('logout');
});

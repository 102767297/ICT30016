<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('login'); // Make sure 'login.blade.php' is in the resources/views folder
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.post');
// Dashboard route (protected)

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Logout route
    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('login'); // Redirect to login page after logout
    })->name('logout');
});
Route::group(['middleware' => ['web']], function () {
    Route::post('login', [LoginController::class, 'login'])->name('login.post');
});

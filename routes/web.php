<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // Ensure you have a "dashboard.blade.php" inside the "resources/views" folder
    })->name('dashboard');

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard'); // Ensure you have "admin/dashboard.blade.php" inside "resources/views/admin"
    })->name('admin.dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


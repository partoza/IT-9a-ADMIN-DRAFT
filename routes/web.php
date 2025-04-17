<?php

use App\Http\Controllers\ProfileController; 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/admin-dashboard', function () {
    return view('admin.dashboard'); 
})->name('admin.dashboard');

Route::get('/admin-bookings', function () {
    return view('admin.bookings');  
})->name('admin.bookings');

Route::get('/admin-car_modification', function () {
    return view('admin.car_modification');  
})->name('admin.car_modification');

Route::get('/admin-track_vehicle', function () {
    return view('admin.track_vehicle');  
})->name('admin.track_vehicle');

Route::get('/admin-maintenance_schedule', function () {
    return view('admin.maintenance_schedule');  
})->name('admin.maintenance_schedule');

Route::get('/admin-payment_history', function () {
    return view('admin.payment_history');  
})->name('admin.payment_history');

Route::get('/admin-rental_agreement', function () {
    return view('admin.rental_agreement');  
})->name('admin.rental_agreement');

Route::get('/admin-customer_records', function () {
    return view('admin.customer_records');  
})->name('admin.customer_records');

Route::get('/admin-report_analytics', function () {
    return view('admin.report_analytics');  
})->name('admin.report_analytics');

Route::get('/admin-employee', function () {
    return view('admin.employee');  
})->name('admin.employee');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


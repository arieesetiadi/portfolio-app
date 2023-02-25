<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\Web\MainController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// Web Routes
Route::controller(MainController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

// Admin Routes
Route::prefix('/system')->group(function () {
    Route::redirect('/', '/system/login');
    Route::middleware('guest')->group(function () {
        // Auth
        Route::controller(AuthController::class)->group(function () {
            Route::get('/login', 'login')->name('login');
            Route::post('/login', 'authenticate')->name('authenticate');
        });
    });

    Route::middleware('auth')->group(function () {
        // Auth - Logout
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

        // Main
        Route::controller(AdminMainController::class)->group(function () {
            Route::get('/dashboard', 'dashboard')->name('dashboard');
        });
    });
});




// -----------------
// Config
// -----------------
Route::get('clear', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return redirect()->back();
});
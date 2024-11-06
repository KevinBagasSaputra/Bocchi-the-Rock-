<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\DashboardController;


use App\Http\Controllers\UserController;

use App\Http\Controllers\KomentarController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [IndexController::class, 'index']);

// Auth START
    // Login
        // View START
            Route::get('login', [LoginController::class, 'login']);
        // View END

        // Login START
            Route::post('login/action_login', [LoginController::class, 'action_login']);
        // Login END

        // Logout START
            Route::get('logout', [LoginController::class, 'action_logout']);
        // Logout END
    // Login

    // Register
        // View START
            Route::get('register', [RegisterController::class, 'register']);
        // View END

        // Register START
            Route::post('register/action_register', [RegisterController::class, 'action_register']);
        // Register END
    // Register
// Auth END



// Middleware START
    // Dashboard START
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');
    // Dashboard END

    // Update START
        Route::post('user/update_user', [UserController::class, 'user_update']);
        // Update END
        // Middleware END
        
        
        
// Komentar START
    Route::post('komentar/upload_komentar', [KomentarController::class, 'upload_komentar'])->middleware('auth');
// Komentar END
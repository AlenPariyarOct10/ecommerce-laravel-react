<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('guest:admin')->group(function () {
    Route::get('login', [LoginController::class, 'create'])
        ->name('login');

    Route::post('login', [LoginController::class, 'store'])
        ->name('admin.login');

});

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::post('logout', [LoginController::class, 'destroy'])
        ->name('admin.logout');
});

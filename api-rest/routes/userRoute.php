<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')
    ->controller(UserController::class)
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/{user}', 'show');
        Route::post('/', 'store');
        Route::put('/{user}', 'update');
        Route::delete('/{user}', 'destroy');
    });

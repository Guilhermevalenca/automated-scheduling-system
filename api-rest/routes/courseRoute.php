<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::prefix('courses')
    ->controller(CourseController::class)
    ->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::get('/{course}', 'show');
        Route::put('/{course}', 'update');
        Route::delete('/{course}', 'destroy');
    });

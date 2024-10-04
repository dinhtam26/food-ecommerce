<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SliderController;

Route::group(['prefix' => '/admin', 'as' => 'admin.'], function () {
    Route::get("/dashboard", [DashboardController::class, 'index'])->name('dashboard');

    // Slider
    Route::get('/slider', [SliderController::class, 'index'])->name('slider');
});

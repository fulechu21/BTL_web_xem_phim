<?php

use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\Film;
use Illuminate\Support\Facades\Route;


Route::prefix('/')->group(function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('user.index');

});


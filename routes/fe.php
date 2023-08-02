<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\Film;
use Illuminate\Support\Facades\Route;


Route::prefix('/')->group(function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('user.index');

    Route::get('/movie-details/{id}', [\App\Http\Controllers\HomeController::class, 'movieDetails'])->name('user.movie-details');

    Route::get('/play-movie/{id}', [\App\Http\Controllers\HomeController::class, 'playMovie'])->name("user.play-movie");

    Route::get("show-favorite-film/{id}", [\App\Http\Controllers\Admin\FilmController::class, 'showFilmFavorite'])->name("user.showFilmFavorite");
    Route::post("/add_favorite", [\App\Http\Controllers\Admin\FilmController::class, "addFilmFavorite"])->name("addFavorite");
});


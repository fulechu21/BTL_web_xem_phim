<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\Film;
use Illuminate\Support\Facades\Route;


Route::prefix('/')->group(function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('user.index');

    Route::get('/movie-details/{id}', [\App\Http\Controllers\HomeController::class, 'movieDetails'])->name('user.movie-details');
    Route::get('/new-films', [\App\Http\Controllers\HomeController::class, 'filmsNew'])->name('user.newFilms');
    Route::get('/oscar-films', [\App\Http\Controllers\HomeController::class, 'filmsOscar'])->name('user.oscarFilms');
    Route::get('/category/{option}', [\App\Http\Controllers\HomeController::class, 'filmsCategory'])->name('user.filmsCategory');
    Route::get('/country/{option}', [\App\Http\Controllers\HomeController::class, 'filmsCountry'])->name('user.filmsCountry');

    Route::get('/play-movie/{id}', [\App\Http\Controllers\HomeController::class, 'playMovie'])->name("user.play-movie");


    Route::get("show-favorite-film/{id}", [\App\Http\Controllers\Admin\FilmController::class, 'showFilmFavorite'])->name("user.showFilmFavorite");
    Route::post("/add_favorite", [\App\Http\Controllers\Admin\FilmController::class, "addFilmFavorite"])->name("addFavorite");


});
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


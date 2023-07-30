<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CountryController;

use \App\Http\Controllers\Admin\DashboardController;



Route::group(['prefix' => 'admin','middleware'=>'admin'], function () {
    Route::get('/', [DashboardController::class,'index'])->name('admin.dashboard');

    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'list'])->name('admin.category.list');
        Route::get('create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/do-create', [CategoryController::class, 'doCreate'])->name('admin.category.do-create');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('/do-edit/{id}', [CategoryController::class, 'doEdit'])->name('admin.category.do-edit');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
    });

    Route::prefix('country')->group(function () {
        Route::get('/', [CountryController::class, 'list'])->name('admin.country.list');
        Route::get('create', [CountryController::class, 'create'])->name('admin.country.create');
        Route::post('/do-create', [CountryController::class, 'doCreate'])->name('admin.country.do-create');
        Route::get('/edit/{id}', [CountryController::class, 'edit'])->name('admin.country.edit');
        Route::post('/do-edit/{id}', [CountryController::class, 'doEdit'])->name('admin.country.do-edit');
        Route::get('/delete/{id}', [CountryController::class, 'delete'])->name('admin.country.delete');
    });

    Route::prefix('film')->group(function () {
        Route::get('/', [FilmController::class, 'list'])->name('admin.film.list');
        Route::get('create', [FilmController::class, 'create'])->name('admin.film.create');
        Route::post('/do-create', [FilmController::class, 'doCreate'])->name('admin.film.do-create');
        Route::get('/edit/{id}', [FilmController::class, 'edit'])->name('admin.film.edit');
        Route::post('/do-edit/{id}', [FilmController::class, 'doEdit'])->name('admin.film.do-edit');
        Route::get('/delete/{id}', [FilmController::class, 'delete'])->name('admin.film.delete');
    });

});
?>

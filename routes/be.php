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

});
?>

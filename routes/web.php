<?php

use App\Http\Controllers\Auth\ChangePasswordController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get("/show-layout-change-password",[ChangePasswordController::class,"showLayoutChangePassword"])->name("show-change-password")->middleware(['auth']);

Route::post("/change-password",[ChangePasswordController::class,"changePassword"])->name("change-password");

Route::get("/register", "Auth\RegisteredUserController@showRegisterForm")->name('register');
require __DIR__ . '/auth.php';
require_once __DIR__ . '/fe.php';
require_once __DIR__ . '/be.php';

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('restaurant/{id}', function ($id) {
//    return response()->json(
//        [
//            'is_shutdown' => true,
//            'r_description' => "This is a test 200",
//            'r_id' => $id,
//            'r_title' => "Test 20000",
//        ]
//    );
//});

Route::get('/test-search',[\App\Http\Controllers\HomeController::class,'doSearch']);

Route::get('admin/user', function () {
    return response()->json(
        [
            [
                'is_shutdown' => true,
                'r_description' => "This is a test 1",
                'r_id' => 1000000,
                'r_title' => "Test",
            ],
            [
                'is_shutdown' => true,
                'r_description' => "This is a test 2",
                'r_id' => 20,
                'r_title' => "Test",
            ],
            [
                'is_shutdown' => true,
                'r_description' => "This is a test 3",
                'r_id' => 30,
                'r_title' => "Test",
            ],
            [
                'is_shutdown' => true,
                'r_description' => "This is a test 4",
                'r_id' => 40,
                'r_title' => "Test",
            ],
            [
                'is_shutdown' => true,
                'r_description' => "This is a test 5",
                'r_id' => 50,
                'r_title' => "Test",
            ],
        ]
    );
});

Route::get('/getDetails/{id}', [\App\Http\Controllers\Admin\FilmController::class, 'getDetailsFilm']);

Route::get('/do-search', [\App\Http\Controllers\HomeController::class, 'doSearch']);

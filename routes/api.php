<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'list');
    Route::post('/users', 'add');
    Route::put('/users', 'update');
});

// Route::group(['middleware' => 'auth'], function () {
//     Route::controller(UserController::class)->group(function () {
//         Route::get('/users', 'list');
//     });
// });



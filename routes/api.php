<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\CarController;
use App\Http\Controllers\Api\v1\UserController;
use App\Http\Controllers\Api\v1\PackageController;
use App\Http\Controllers\Api\v1\MiniHouseController;
use App\Http\Controllers\Api\v1\ReservationController;

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

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/user', [UserController::class, 'fetch_user']);
    Route::get('/cars', [CarController::class, 'get_cars_list']);
    Route::get('/minihouses', [MiniHouseController::class, 'get_minihouses_list']);
    Route::get('/packages', [PackageController::class, 'get_packages_list']);
    Route::post('/reservation', [ReservationController::class, 'store_reservation']);
});
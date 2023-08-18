<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\User\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});



Route::middleware(['auth:api', 'verified', 'admin'])->prefix('admin')->group(function () {
    Route::post('store-user', [UserController::class, 'store']);
    Route::put('update-user/{id}', [UserController::class, 'update']);
});

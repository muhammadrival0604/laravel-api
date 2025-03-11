<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    // CRUD User
    Route::get('/users', [UserController::class, 'index']);
    Route::post('/users', [UserController::class, 'store']);
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::put('/users/{id}', [UserController::class, 'update']);
    Route::delete('/users/{id}', [UserController::class, 'destroy']);

    // Search Endpoints
    Route::get('/search/name', [SearchController::class, 'searchByName']);
    Route::get('/search/nim', [SearchController::class, 'searchByNim']);
    Route::get('/search/ymd', [SearchController::class, 'searchByYmd']);
});
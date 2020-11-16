<?php

use App\Http\Controllers\AdvertController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\UserController;
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

Route::get('/v', function () {
    return 'Laravel ' . app()->version();
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * As this isn't a secure API, we don't need to use the auth middleware.
 */

// Get all the companies in the database and return JSON.
Route::get('/companies', [CompanyController::class, 'index']);
Route::get('/companies/{company}', [CompanyController::class, 'show']);
Route::post('/companies', [CompanyController::class, 'store']);
Route::put('/companies/{company}', [CompanyController::class, 'update']);
Route::delete('/companies/{company}', [CompanyController::class, 'delete']);

// Get all the users in the database and return JSON
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'delete']);

// Get all the servers in the database and return JSON
Route::get('/servers', [ServerController::class, 'index']);
Route::get('/servers/{server}', [ServerController::class, 'show']);
Route::post('/servers', [ServerController::class, 'store']);
Route::put('/servers/{server}', [ServerController::class, 'update']);
Route::delete('/servers/{server}', [ServerController::class, 'delete']);

// Get all the adverts and return JSON
Route::get('/adverts', [AdvertController::class, 'index']);

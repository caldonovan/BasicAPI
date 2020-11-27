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
 * If we are using standard CRUD methods in our controllers,
 * we can use the Route::resource() method to auto-assign
 * routes to their respective functions
 *
 * Use 'php artisan route:list' to see them.
 */
Route::resource('adverts', AdvertController::class);
Route::resource('companies', CompanyController::class);
Route::resource('servers', ServerController::class);
Route::resource('users', UserController::class);

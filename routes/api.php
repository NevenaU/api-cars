<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarsController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/cars", [CarsController::class, 'index']);
Route::delete("/cars/{id}", [CarsController::class, 'destroy']);
Route::get("/cars/{id}", [CarsController::class, 'show']);
Route::post("/cars", [CarsController::class, 'store']);
Route::put("/cars/{id}", [CarsController::class, 'update']);

Route::post('register', [ AuthController::class, 'register' ]);//->middleware('guest:api');
Route::post('login', [ AuthController::class, 'login' ]);//->middleware('guest:api');
Route::post('logout', [ AuthController::class, 'logout' ]);//>middleware('auth:api');
Route::get('me', [ AuthController::class, 'me' ]);//->middleware('auth:api');

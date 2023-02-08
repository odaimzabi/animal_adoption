<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


Route::prefix("/auth")->group(function () {
    Route::post("/login", [AuthController::class, "login"])->name("auth.login");
    Route::post("/register", [AuthController::class, "register"])->name("auth.register");
    Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, "logout"])->name("auth.logout");
    Route::middleware('auth:sanctum')->get('/user', [AuthController::class, "user"])->name("auth.user");
});

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get("/books/show/{id}", [BookController::class, "show"]);
Route::post("/books/store", [BookController::class, "store"]);
Route::get("/books", [BookController::class, "index"]);

Route::post("/login", [AuthController::class, "login"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post("/logout", [AuthController::class, "logout"]);
    Route::post("/books/update/{id}", [BookController::class, "update"]);
    Route::delete("/books/delete/{id}", [BookController::class, "destroy"]);
});
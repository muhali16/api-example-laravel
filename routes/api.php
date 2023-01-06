<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BooksController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get("/books", [BooksController::class, "index"]);
Route::apiResource('/books', BooksController::class)->only(['index', 'show']);
Route::post("/login", [AuthController::class, "login"]);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post("/logout", [AuthController::class, "logout"]);
    Route::apiResource("/books", BooksController::class)->except(['index', 'show']);
    Route::get('/session', [AuthController::class, 'session']);
});
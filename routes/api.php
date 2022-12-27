<?php

use App\Http\Controllers\BookController;
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

Route::get("/books", [BookController::class, "index"]);
Route::get("/books/show/{id}", [BookController::class, "show"]);
Route::post("/books/store", [BookController::class, "store"]);
Route::post("/books/update/{id}", [BookController::class, "update"]);
Route::delete("/books/delete/{id}", [BookController::class, "destroy"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

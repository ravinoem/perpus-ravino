<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
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

// User API
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Book API
Route::get('/book', [BookController::class, 'index']);
Route::post('/book', [BookController::class, 'create']);
Route::get('/book/{id}', [BookController::class, 'detail']);
Route::put('/book/{id}', [BookController::class, 'update']);
Route::delete('/book/{id}', [BookController::class, 'delete']);

// Author API
Route::prefix('author')->group(function () {
Route::get('/', [AuthorController::class, 'index']);
Route::post('/', [AuthorController::class, 'create']);
Route::get('/{id}', [AuthorController::class, 'detail']);
Route::put('/{id}', [AuthorController::class, 'update']);
Route::delete('/{id}', [AuthorController::class, 'delete']);
});

// Publisher API
Route::prefix('publisher')->group(function () {
Route::get('/', [PublisherController::class, 'index']);
Route::post('/', [PublisherController::class, 'create']);
Route::get('/{id}', [PublisherController::class, 'detail']);
Route::put('/{id}', [PublisherController::class, 'update']);
Route::delete('/{id}', [PublisherController::class, 'delete']);
});

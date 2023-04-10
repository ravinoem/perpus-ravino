<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/book', [BookController::class, 'index']);
Route::post('/book', [BookController::class, 'create']);
Route::get('/book/{id}', [BookController::class, 'detail']);
Route::put('/book/{id}', [BookController::class, 'update']);
Route::delete('/book/{id}', [BookController::class, 'delete']);

Route::prefix('author')->group(function () {
Route::get('/', [AuthorController::class, 'index']);
Route::post('/', [AuthorController::class, 'create']);
Route::get('/{id}', [AuthorController::class, 'detail']);
Route::put('/{id}', [AuthorController::class, 'update']);
Route::delete('/{id}', [AuthorController::class, 'delete']);
});

Route::prefix('publisher')->group(function () {
Route::get('/', [PublisherController::class, 'index']);
Route::post('/', [PublisherController::class, 'create']);
Route::get('/{id}', [PublisherController::class, 'detail']);
Route::put('/{id}', [PublisherController::class, 'update']);
Route::delete('/{id}', [PublisherController::class, 'delete']);
});

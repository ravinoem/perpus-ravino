<?php

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

Route::get('/book', 'BookController@index');
Route::post('/book', 'BookController@create');
Route::get('/book/{id}', 'BookController@detail');
Route::put('/book/{id}', 'BookController@update');
Route::delete('/book/{id}', 'BookController@delete');

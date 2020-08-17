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

Route::prefix('products')->group(function () {
    Route::post('set', 'ProductController@set');
});

Route::prefix('form')->group(function () {
    Route::post('feedback', '\App\Email\Messages\FeedBack@send');
});

Route::prefix('events')->group(function () {
    Route::post('subscribe', 'EventController@subscribe');
});

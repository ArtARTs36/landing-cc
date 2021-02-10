<?php

use Illuminate\Support\Facades\Route;

Route::namespace('\App\Bundles\Gallery\Http\Controllers')->group(function () {
    Route::prefix('images')->group(function () {
        Route::get('of-album/{album}', 'ImageController@showOfAlbum');
    });
});

<?php

use Illuminate\Support\Facades\Route;

require __DIR__ . '/../app/Bundles/Gallery/Http/Routes/api.php';
require __DIR__ . '/../app/Bundles/Impression/Http/Routes/api.php';

Route::prefix('form')->group(function () {
    Route::post('feedback', 'FeedBackController@store');
});

Route::prefix('events')->group(function () {
    Route::post('subscribe', 'EventController@subscribe');
});

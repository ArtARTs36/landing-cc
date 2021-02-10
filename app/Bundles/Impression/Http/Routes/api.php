<?php

use Illuminate\Support\Facades\Route;

Route::namespace('\App\Bundles\Impression\Http\Controllers')->group(function () {
    Route::apiResource('impressions', 'ImpressionController');
});

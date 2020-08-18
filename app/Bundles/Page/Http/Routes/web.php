<?php

use Illuminate\Support\Facades\Route;

Route::get('pages/{slug}', '\App\Bundles\Page\Http\Controllers\PageController@show');

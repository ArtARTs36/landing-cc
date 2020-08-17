<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@start');
Route::get('/contacts', 'PageController@contacts');
Route::get('/equipment', 'PageController@equipment');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

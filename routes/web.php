<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@start')->name('home');
Route::get('/contacts', 'PageController@contacts')->name('contacts');
Route::get('/equipment', 'PageController@equipment')->name('equipment');
Route::get('/products', 'PageController@products')->name('products');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

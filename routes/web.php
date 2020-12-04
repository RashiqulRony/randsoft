<?php

use Illuminate\Support\Facades\Route;

#Web route...
Route::group(['namespace' => 'Web', 'as' => 'web.'], function () {
    Route::get('/', 'WebController@index')->name('index');
    Route::get('/about', 'WebController@about')->name('about');
    Route::get('/services', 'WebController@services')->name('services');
    Route::get('/features', 'WebController@features')->name('features');
    Route::get('/portfolios', 'WebController@portfolios')->name('portfolios');
    Route::get('/partnership', 'WebController@partnership')->name('partnership');
    Route::get('/contact', 'WebController@contact')->name('contact');
});

#Admin route...
Route::group(['prefix' => 'randsoft'], function () {
    Auth::routes([
        'register' => false, // Registration Routes...
        'reset' => false, // Password Reset Routes...
        'verify' => false, // Email Verification Routes...
    ]);

    Route::group(['namespace' => 'Admin', 'middleware' => 'auth:web', 'as' => 'admin.'], function () {
        Route::get('/', 'DashboardController@index')->name('index');
    });
});



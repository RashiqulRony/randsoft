<?php

use Illuminate\Support\Facades\Route;

#Web route...
Route::group(['prefix' => '/', 'as' => 'web.'], function () {
    Route::get('/', [App\Http\Controllers\Web\WebController::class, 'index'])->name('home');
});

#Admin route...
Route::group(['prefix' => 'randsoft'], function () {
    Auth::routes([
        'register' => false, // Registration Routes...
        'reset' => false, // Password Reset Routes...
        'verify' => false, // Email Verification Routes...
    ]);

    Route::group(['middleware' => 'auth:web', 'as' => 'admin.'], function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });
});



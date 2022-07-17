<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\MainController::class, 'main']);

Auth::routes(['verify' => true]);

Route::group(['namespace' => 'App\Http\Controllers\\', 'middleware' => ['auth', 'verified']], function (){
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('communities', CommunityController::class);
});

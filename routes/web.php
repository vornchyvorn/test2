<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/page', [PageController::class, 'index']);
Route::get('/test', [PageController::class, 'test']);
Route::get('/register',[RegisterController::class, 'register']);
// ->name('register.index');
Route::post('/register/save', [RegisterController::class, 'save']);

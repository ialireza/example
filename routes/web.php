<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('/', UserController::class, [
    'only' => ['index']
]);

Route::resource('/p', PostController::class, [
    'only' => ['index']
]);

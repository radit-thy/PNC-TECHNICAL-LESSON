<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Post
Route::resource('/post', PostController::class);
//User
Route::resource('/user', UserController::class);


//Post
// Route::resource('/get', PostController::class);
// Route::resource('/post', PostController::class);
// Route::resource('/update', PostController::class);
// Route::resource('/delete', PostController::class);

//User
// Route::resource('/get', UserController::class);
// Route::resource('/post', UserController::class);
// Route::resource('/update', UserController::class);
// Route::resource('/delete', UserController::class);
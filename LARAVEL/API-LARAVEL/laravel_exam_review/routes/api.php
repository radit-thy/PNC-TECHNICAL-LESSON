<?php

use App\Http\Controllers\PostController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Post
// Route::resource('/post', PostController::class);
//User
// Route::resource('/user', UserController::class);

Route::get('/post/list',[PostController::class,'index']);
Route::post('/post/create',[PostController::class,'store']);
Route::get('/post/show/{id}',[PostController::class,'show']);
Route::put('/post/update/{id}',[PostController::class,'update']);
Route::delete('/post/delete/{id}',[PostController::class,'destroy']);
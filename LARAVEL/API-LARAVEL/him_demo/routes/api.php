<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;

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
Route::resource('/post', PostController::class);
//User
Route::resource('/user', UserController::class);


//============================================================
                 // laravel sanctum
//============================================================


Route::get('create-user', function(Request $request){
    //todo
});
Route::get('login', function(Request $request){
    //todo
});


Route::middleware('auth:sanctum')->get('/logout', function (Request $request) {
    //todo
});

// =============================================================
//                     login $ logout
// =============================================================

// Public routes
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('profile', [ProfileController::class, 'show']);
});
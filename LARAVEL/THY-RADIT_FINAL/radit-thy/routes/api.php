<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Models\BorrowRecord;

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


Route::get('/book/list',[BookController::class,'index']);
Route::post('/book/create',[BookController::class,'store']);
Route::get('/book/show/{id}',[BookController::class,'show']);
Route::put('/book/update/{id}',[BookController::class,'update']);
Route::delete('/book/delete/{id}',[BookController::class,'destroy']);


Route::get('/user/list',[UserController::class,'index']);
Route::post('/user/create',[UserController::class,'store']);
Route::get('/user/show/{id}',[UserController::class,'show']);
Route::put('/user/update/{id}',[UserController::class,'update']);
Route::delete('/user/delete/{id}',[UserController::class,'destroy']);


Route::get('/record/list',[BorrowRecord::class,'index']);
Route::post('/record/create',[BorrowRecord::class,'store']);
Route::get('/record/show/{id}',[BorrowRecord::class,'show']);
Route::put('/record/update/{id}',[BorrowRecord::class,'update']);
Route::delete('/record/delete/{id}',[BorrowRecord::class,'destroy']);
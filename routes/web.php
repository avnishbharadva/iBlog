<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PostController::class,'index']);
Route::get('/post/create',[PostController::class,'create']);
Route::post('/post/store',[PostController::class,'store']);
Route::get('/post/all',[PostController::class,'allpost']);
Route::post('/signup',[UserController::class,'index']);
Route::post('/login',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout']);
Route::get('fullpost/{id}',[PostController::class,'fullpost']);

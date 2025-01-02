<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Http\Controllers\CsrfCookieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ThreadController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//GET METHODS

//user route
Route::middleware("auth:sanctum")->get('/user', [UserController::class, 'index']);

//profile route
Route::get('/profile/{id}', [ProfileController::class, 'show']);

//threads route
Route::post('/thread', [ThreadController::class, 'store'])
    ->middleware('auth:sanctum');

//posts route
Route::middleware('auth:sanctum')->post('/posts', [PostController::class, 'store']);

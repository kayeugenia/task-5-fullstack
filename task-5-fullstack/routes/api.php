<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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
// Authentication routes
Route::post('register', 'App\Http\Controllers\Auth\RegisterController@register');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');

// API routes under version 1 (v1) with authentication middleware
Route::group(['prefix' => 'v1'], function () {
    Route::get('posts', [PostController::class, 'index']);
});

// Public API routes (no authentication required)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
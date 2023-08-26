<?php

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

Route::post('register', 'App\Http\Controllers\Api\UserController@register');
Route::post('login', 'App\Http\Controllers\Api\UserController@login');

// routes/api.php
Route::middleware('role:dean')->group(function () {
    // Dean-only routes
});

Route::middleware('role:student')->group(function () {
    // Student-only routes
});
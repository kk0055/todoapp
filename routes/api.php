<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;

Route::resource('/task', TaskController::class);

Route::get('/category/{category}/tasks', [CategoryController::class, 'index']);
Route::resource('/category', CategoryController::class);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

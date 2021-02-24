<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;


Route::resource('/task', TaskController::class);
Route::resource('/category', CategoryController::class);
Route::get('/category/{category}/tasks', [CategoryController::class, 'index']);

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

Route::group(['middleware' => 'auth:api'], function(){
       
});




<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinglePageController;



Route::get('/{any}', [SinglePageController::class, 'index'])->where('any', '.*');


Route::get('/', function () {
    return view('welcome');
});

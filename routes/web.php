<?php

use Illuminate\Support\Facades\Route;
//import
use App\Http\Controllers\userController;





Route::POST("user", [userController::class, 'addult']);
Route::view("login", 'user');
Route::get('list', [userController::class, 'addult']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;

Route::get('/test-layout', function () {
   return view('layouts.app');
});

Route::resource('customers',CustomerController::class);
Route::resource('users',UserController::class);
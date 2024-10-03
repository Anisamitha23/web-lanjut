<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
// Route::get('/upload', [ImageUploadController::class, 'create']);
// Route::post('/upload', [ImageUploadController::class, 'store']);
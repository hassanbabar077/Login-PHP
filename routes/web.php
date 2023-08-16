<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AuthController;



Route::get('/' , [FrontController::class,'home'])->name('home');

Route::get('/login' , [FrontController::class,'login'])->name('login');

Route::get('/register' , [FrontController::class,'register'])->name('register');

Route::get('/profile' , [FrontController::class,'profile'])->name('profile');

Route::post('/postlogin' , [AuthController::class,'postlogin'])->name('user.login');

Route::post('/postregister' , [AuthController::class,'postregister'])->name('user.register');

Route::get('/logout' , [AuthController::class,'logout'])->name('logout');

Route::get('/edit-profile/{id}', [AuthController::class,'editprofile'])->name('edit.profile');

Route::post('/update/{id}', [AuthController::class,'update'])->name('user.update');

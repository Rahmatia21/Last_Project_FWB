<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;


Route::get('/',[UserController::class,'dashboard'])->name('dashboard');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/loginPost',[UserController::class,'loginPost'])->name('login.post');

Route::get('/register',[UserController::class,'register'])->name('register.get');
Route::post('registerPost',[UserController::class,'registerPost'])->name('register.post');

Route::get('/logout',[UserController::class,'logout'])->name('logout');
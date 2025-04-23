<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']); 



 Route::get('/admin/index',[AdminController::class,'index'])->name('admin.index');

    //User
    Route::get('user/index',[UserController::class,'index'])->name('user.index');

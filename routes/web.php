<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkoutController;
use Illuminate\Support\Facades\Route;



Route::get('/', function(){ 
    return view('welcome');
});

Auth::routes();

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']); 




Route::get('/admin/index',[AdminController::class,'index'])->name('admin.index');

    //User
Route::get('user/index',[UserController::class,'index'])->name('user.index');

  //workout
Route::middleware('auth')->group(function () {
    Route::get('user/workout', [WorkoutController::class, 'index'])->name('new.workout');
    Route::get('/createworkout', [WorkoutController::class, 'create'])->name('user.createworkout');
    Route::post('/storeworkout', [WorkoutController::class, 'store'])->name('user.storeworkout');

    Route::get('/editworkout/{id}', [WorkoutController::class, 'edit'])->name('user.editworkout');
    Route::put('/updateworkout/{id}', [WorkoutController::class, 'update'])->name('user.updateworkout');
    Route::delete('/deleteworkout/{id}', [WorkoutController::class, 'destroy'])->name('user.deleteworkout');

    Route::get('/workoutguide', [App\Http\Controllers\UserController::class, 'workoutGuide'])->name('user.workoutguide');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/users/create',[UserController::class, 'create'])->name('users.create');
Route::post('/users',[UserController::class, 'store'])->name('users.store');
Route::get('/users',[UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}',[UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit',[UserController::class,'edit'])->name('users.edit');
Route::put('/users/{id}',[UserController::class,'update'])->name('users.update');
Route::delete('/users/{id}',[UserController::class,'destroy'])->name('users.destroy');

Route::get('/', function () {
    return view('welcome');
});

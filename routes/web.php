<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/',[AuthController::class,'connexion']);
Route::post('/' ,[AuthController::class, 'handle_login'])->name('handle_login');
Route::post('/admin',[AuthController::class,'insertAdmin'])->name('insertAdmin');
Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');
Route::get('/create',[AuthController::class,'create'])->name('create');
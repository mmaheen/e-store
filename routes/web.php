<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\AuthAdmin;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->name('guest.')->group(function(){
    Route::get('/guest/dashboard',[App\Http\Controllers\GuestController::class, 'index'])->name('index');
});

Route::prefix('admin')->middleware(['auth',AuthAdmin::class])->name('admin.')->group(function(){
    Route::get('/dashboard',[App\Http\Controllers\AdminController::class, 'index'])->name('index');
    Route::resource('/brand',App\Http\Controllers\BrandController::class);
});
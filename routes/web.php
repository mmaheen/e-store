<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\AuthAdmin;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->name('guest.')->group(function(){
    Route::get('/guest/dashboard',[App\Http\Controllers\GuestController::class, 'index'])->name('index');
});

Route::middleware(['auth',AuthAdmin::class])->name('admin.')->group(function(){
    Route::get('admin/dashboard',[App\Http\Controllers\AdminController::class, 'index'])->name('index');
});
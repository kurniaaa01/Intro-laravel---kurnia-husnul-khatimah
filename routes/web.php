<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

Route::get('/welcome', [AuthController::class, 'welcome'])->name('welcome');

route::get('/table',function(){
    return view('table');
});
route::get('/data-table',function(){
    return view('data-table');
});



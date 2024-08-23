<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
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

Route::get('/cast', [CastController::class, 'index']);
Route::get('/cast/create', [CastController::class, 'create']);
Route::post('/cast', [CastController::class, 'store']);
Route::get('/cast/{cast_id}', [CastController::class, 'show']);
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
Route::put('/cast/{cast_id}', [CastController::class, 'update']);
Route::delete('/cast/{cast_id}', [CastController::class, 'destroy']);




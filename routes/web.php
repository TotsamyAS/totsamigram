<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class,'index'])->name('home');
Route::post('/register', [MainController::class,'register'])->name('register');
Route::get('/user/{id}', [MainController::class,'profile'])->name('profile');




/*Route::get('main_page', [MainController::class,'hello_world_view_method']);
Route::get('test_view_1', [MainController::class,'test_view_1_method']);
Route::get('test_view_2', [MainController::class,'test_view_2_method']);*/

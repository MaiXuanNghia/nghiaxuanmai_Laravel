<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Homecontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/home', [ProductController::class, 'index'])->name('home');
Route::get('/adds', [ProductController::class, 'getAdd']);
Route::get('/products', [ProductController::class, 'getProducts']);
Route::post('/adds', [ProductController::class, 'postadd']);
Route::put('/adds', [ProductController::class, 'putadd']);


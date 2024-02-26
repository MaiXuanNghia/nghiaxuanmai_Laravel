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
Route::get('/', function (){
    return view('welcome');
})->name('welcome');

Route::get('/home', [Homecontroller::class, 'index'] );
Route::get('/homeExtends', [Homecontroller::class, 'index1'] );

Route::get('/sanpham/{id?}', [ProductController::class, 'index']);

Route::middleware('auth.admin')->prefix('/category')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/add', [ProductController::class, 'showForm']);
    Route::post('/add', [ProductController::class, 'testOutput']);
    Route::get('/kiemtra', [ProductController::class, 'kiemtra']);
    // hiểm thị form upload
    Route::get('/uploadFile', [ProductController::class, 'showFileUpload']);
    Route::post('/uploadFile', [ProductController::class, 'headleFile'])->name('product.uploadFile');
});

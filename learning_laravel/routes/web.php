<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DasboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return "<h1>Trang chủ lỗi</h1>";
})->name('home');

Route::middleware('auth.admin')->prefix('/admin')->group(function () {
    Route::get('/', [DasboardController::class, 'index']);
    Route::resource('/products', ProductsController::class)->middleware('auth.admin.products');
});

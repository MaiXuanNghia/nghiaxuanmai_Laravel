<?php

use App\Http\Middleware\CheckPermission;
use Illuminate\Support\Facades\Route;
use  App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/Categries')->group(function ()
{
    Route::get('/', [CategoriesController::class, 'index'])->name('Category.list');

    Route::get('/edit/{id}', [CategoriesController::class, 'getCategory'])->name('Categories.edit');

    Route::post('/edit/{id}', [ CategoriesController::class, 'updateCategory']);

    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('Categories.add');

    Route::post('/add', [CategoriesController::class, 'handleAddCategory']);

    Route::delete('/delete/{id}', [CategoriesController::class, 'deleteCategory'])->name('Categories.delete');
});

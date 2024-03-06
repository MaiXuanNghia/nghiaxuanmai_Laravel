<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Homecontroller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
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
Route::get('/respon', function () {
    // $response = new Response('học lập trình', 404);
    // $response = response('học lập trình hàm', 404);
    // dd($response);
    $content = json_encode(['item1', 'item1', 'item1', 'item2']);
    // return (new Response ($content, 404))->header('Content-type', 'application/json');
    $response = (new Response($content))->cookie('key', 'value', 30); // phải truyền thời gian vào nếu không nó là kiểu dữ liệu json
    return $response;
});
Route::get('/get_respon', function (Request $request) {
    return $request->cookie('key');
});
Route::get('/get_respon123', function () {
    // $title1 = "hi learning with unucode";
    // $response = response()->view('notifical', compact('title1'), 200);
    $response = response()->view('notifical', ['title1' => 'hiaaa'], 200);

    return $response;
});
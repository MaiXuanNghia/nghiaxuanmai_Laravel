<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bai8ViewController;
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
//     // nếu dữ liệu muốn trả về view tại controller đặt những dòng comment dưới vào controller.
//     // $title = "Học lập trình web";
//     // $dataView = [
//     //     'titleData' => $title,
//     //     'CcontentData' => 'content - học lập trình',
//     // ];
//     // return view('home', $dataView);
// });

Route::get('/', [Bai8ViewController::class, 'index'])->name('viewBai8');

Route::get('san-pham/{id}', [Bai8ViewController::class, 'getProductsDetail']);
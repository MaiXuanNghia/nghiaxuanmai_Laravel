<?php

use App\Http\Middleware\CheckPermission;
use Illuminate\Support\Facades\Route;
use  App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
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


Route::get('/home', function () {
    // $user = new User();
    // $allUser = $user::all();
    // dd($allUser);
    return view('Home');
})->name('home');

// Route::get('/form', function () {
//     return view('Form');
// });

// Route::get('/methodGet', function () {
//     return "phương thức get của path /methodGet";
// });

// Route::post('/method', function () {
//     return "phương thức post của path /method";
// });

// Route::put('/method', function () {
//     return "phương thức put của path /method";
// });

// Route::delete('/method', function () {
//     return "phương thức DELETE của path /method";
// });

// Route::patch('/method', function () {
//     return "phương thức PATCH của path /method";
// });

// Route::match(['get', 'post'], '/method', function () {
//     return $_SERVER['REQUEST_METHOD'];
// });

// Route::any('/method', function (Request $req) {
//     // return $_SERVER['REQUEST_METHOD'];
//     return $req->method();
// });

// Route::get('/show', function () {
//     return view('Form');
// });

// redirect(url to call, url to redirect, status code)
// Route::redirect('/redirect', '/show', 301);
// dùng view của "Route" để trả về view trực tiếp
// Route::view('/show_form', 'Form');

Route::get('/callfromcontroller', 'App\Http\Controllers\HomeController@index')->name('home1');

Route::get('/getcategory', [HomeController::class,'getcategory'])->name('getcategory');

Route::prefix('admin')->group(function () {
// {id?}: sẽ là không buộc phải có tham số. trường hợp lỗi có thể gán là null or 0
    Route::get('methodGet/{slug?}-{id?}', function ($slug = null, $id = null) {
        return "phương thức get của path /methodGet với tham số :" . $slug . "<br> id= " . $id;
    })->where(
        ['slug' => '[a-z-]+'],
        ['id' => '0-9+'],
    )->name('admin.tin-tuc');

    Route::get('/show', function () {
        return view('Form');
    })->name('admin.show');

    Route::prefix('/products')->middleware('CheckPermission')->group(function () {
        Route::get('/', function () {
            return "danh sách sản phẩm";
        });

        Route::get('/add', function () {
            return "Thêm sản phẩm";
        })->name('admin.products.add');

        Route::get('/edit', function () {
            return "Xóa sản phẩm";
        });
    });
});

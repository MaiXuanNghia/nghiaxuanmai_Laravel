<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Bai8ViewController extends Controller
{
    //
    public function index()
    {
        $title = "Học lập trình web";
        $content = "content - học lập trình";
        // $dataView = [
        //     'titleData' => $title,
        //     'ContentData' => $content,
        // ];
        // return view('home', $dataView);

        // sử dụng hàm compact('','') đặt tên biến vào trong hàm sẽ tự tạo 1 mảng có key = tên biến.
        // return view('home', compact('title', 'content'));

        // có thể dùng hàm with để truyền dữ liệu (key,value) dùng mảng để có thể truyền nhiều dữ liệu. [key => value, key => value]
        return view('home')->with(['title' => $title, 'content' => $content]);

        // có thể dùng lớp View::make để thay thế cho hàm view
        // return View::make('home')->with(['title' => $title, 'content' => $content]);

        // ->render())
    }

    public function getProductsDetail($id)
    {
        return view('products.detail', compact('id'));
    }
}

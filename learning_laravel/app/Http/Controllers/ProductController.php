<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = 'Trang chủ';
        return view('clients.home1', compact('data'));
    }
    public function getProducts()
    {
        $data = 'Sản phẩm';
        $content = 'đăng ký tài khoản thành công';
        $mess = "đăng ký tài khoản thành công";
        return view('clients.product', compact('data', 'content', 'mess'));
    }
    public function getAdd()
    {
        $data = 'Thêm sản phẩm';
        return view('clients.adds', compact('data'));
    }
    public function postadd(ProductRequest $request)
    {
        dd($request->all());
    }
    public function putadd(Request $request)
    {
        return 'phương thức put';
        dd($request);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Rules\Uppercase;

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
    // public function postadd(ProductRequest $request)
    // {
    //     dd($request->all());
    // } bài 22

    public function postadd(Request $request)
    {
        // $rule = [
        //     'nameproduct' => 'required',
        //     'priceproduct' => 'required|integer'
        // ];

        // $validator = Validator::make($request->all(), $rule);

        // if($validator->fails()){

        $request->validate([
            'nameproduct' => ['required', new Uppercase],
            'priceproduct' => ['required', 'integer', function ($attribute, $value, $fail){
                if (strtoupper($value) !== $value) {
                    $fail('The :attribute must be integer.')->translate([
                        'value' => $value,
                    ], 'fr');
                }
            }],
        ]);

        // return back()->withErrors($validator)->withInput();
        // }
    }

    public function putadd(Request $request)
    {
        return 'phương thức put';
        dd($request);
    }
}

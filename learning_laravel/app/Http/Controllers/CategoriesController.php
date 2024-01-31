<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    // public function _construct()
    // {

    // }

    //lấy ra 1 chuyên mục theo id dùng get
    public function getCategory($id)
    {
        return view('clients/category/edit');
    }

     //lấy ra danh sách chuyên mục dùng get
    public function index()
    {
        return view('clients/category/list');
    }

    //cập nhật 1 chuyên mục dùng pots
    public function updateCategory($id)
    {
        return 'submit sửa chuyên mục: ' . $id;
    }

    // thêm chuyên mục dùng post
    public function addCategory()
    {
        return view('clients/category/add');
    }


    // xóa chuyên mục dùng delete
    public function deleteCategory($id)
    {
        return 'submit xóa chuyên mục: ' . $id;
    }

    public function handleAddCategory()
    {
        return redirect(route('Categories.add'));
        // return 'submit thêm chuyên mục';
    }
}

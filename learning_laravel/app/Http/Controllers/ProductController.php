<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function __construct(Request $request)
    {
        if($request->is('category')) {
            echo '<p>Xin chào unicode of constructure</p>';
        }
    }

    public function kiemtra(Request $request)
    {
        echo 'this';
    }

    public function index(Request $request)
    {
        // if (isset($id)) {
        //     echo $id;
        // }
        //kiểm tra có key id trong request không???
        
        

        $dataAllRequest = $request->all(); // lấy ra data all
        $Request1 = $request->path(); // lấy ra path hiện tại
        $Request2 = $request->url(); // lấy ra danh sách url hiện tại không lấy ra query string là sau dấu ?
        $Request3 = $request->fullUrl(); // lấy ra danh sách url hiện tại và lấy thêm cả query string là sau dấu ?
        $Request4 = $request->method(); // lấy ra phương thức của request ex: GET, POST,...
        $Request5 = $request->ip(); //lấy ra id của máy;
        // dd($request);
        echo " " .$Request2 . "||" ;
        echo " " .$Request3 . "||";
        echo " " .$Request4 . "||" ;
        echo " " .$Request5 . "||" ;
        // dd($request->server()); // $_SERVER
        // dd($request->header());
        // dd($request->input('id.0.name')); //id.0.name truy cập đối tượng và giá trị trong mảng. 
        //                                   // có thể dùng id.*.name để lấy hết trong mảng
        $id = $request->id;
        $name = $request->name;
        echo "<h2> " . $id . " " . $name . " </h2>";
        // helper request
        $id = request("id", '1234'); // tham số đầy tiên của request là key tham số thứ hai là giá trị mặc định của key
        // dd($id);

        $query = $request->query();
        dd($query);
        return view('products.add');
    }

    public function showForm()
    {
        return view('products.form');
    }

    public function testOutput()
    {
        print_r($_POST);
    }
    public function showFileUpload()
    {
        return view('products.file');
    }

    // xử lý lấy thông ti file
    public function headleFile(Request $request)
    {
        if($request->hasFile('file_upload'))
        {
            if($request->file_upload->isValid()) 
            {
                $file = $request->file_upload; // đưa name của input file vào để lấy thông tin
                // dd($file);
                // $ext = $request->path()
                $ext = $file->extension();
                // echo $ext;
                // để di chuyển file từ các thư mục folder chứa file tạm trên server ta dùng store('images', 'local')  // nếu không có tham số thứ 2 nó sẽ được lưu tại storage/app/images/image.png
                $patch = $file->store('images', 'local');

                //để đổi tên file cũ thành tên mới thì dùng storeAs('tên cũ', 'tên mới')
                $patch = $file->storeAs('images', 'khoa-hoc.txt');
                // nếu muốn chuyển đến thư mục mong muốn tìm hiểu về move
                // muốn lấy file ra ta dùng getClientOriginalName()
                $fileName = $file->getClientOriginalName();
                
                // đổi tên file name
                $fileName = md5(uniqid()).'.'.$ext;
                dd($fileName);
            }
        }
        else 
        {
            return 'vui lòng chọn file';
        }
    }
}

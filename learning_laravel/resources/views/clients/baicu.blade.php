<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang chủ unicode</title>
</head>
<body>
    <h1>xin chào unicode</h1>
    <h2>1. {{ $data }}</h2>
    <h2>2. lấy data trên Request</h2>
    <!--  tránh lỗi bảo mật xss dùng htmlentity // có thể dùng được toán tử 3 ngôi trong htmlentity  -->
    <p>: {{ !empty(request()->key)?request()->key:"không có gì!" }}</p> 
    <div class="container">
        {!!$data1!!}
    </div>
    @for ($i = 1; $i <= 10; $i++) 
        <p>phần tử thứ: {{$i}}</p>
    @endfor
    <p>----------------</p>
    @while($index <= 10)
        <p>phần tử thứ: {{$index}}</p>
        <?php $index++ ?>
    @endwhile
    <p>----------------</p>
    @foreach ($data2 as $item) 
        <p>phần tử item: {{$item}}</p>
    @endforeach
    <p>----------------</p>
    @forelse ($data2 as $item) 
        <p>phần tử item: {{$item}}</p>
    @empty
        <p>không có phần tử</p>
    @endforelse
    <p>----------------</p>
    @if(count($data2) > 0)
        <p>data2 có số phần tử trong mảng lớn hơn 0 là : {{count($data2)}}</p>
    @endif
    <p>----------------</p>
    @if(count($data2) > 0)
        <p>data2 có số phần tử trong mảng lớn hơn 0 là : {{count($data2)}}</p>
    @elseif (count($data2) === 0)
        <p>data2 có số phần tử trong mảng bằng hơn 0 là : {{count($data2)}}</p>
    @endif
    <p>----------------</p>
    @php
        echo "123 Blade Template Engine";
        echo "to comment";
        // {{-- code here no action --}}
    @endphp
    <p> <script> //ngăn chặn php biên dịch code js thêm @{{}} vào trước sau đó frame work of js do it or @verbatim ... code here @endverbatim</script>
    </p>
    @include('./notifical')
    <h1>layout tạo khung các view sẽ đảm nhiệm để hiển thị</h1>
    
</body>
</html>
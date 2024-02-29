<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/clients/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/style.css') }}">
    <style type="text/css">
        @yield('css');
    </style>
</head>
<body>
    @include('clients.block.header')
    <div class="container">
    <main class="py-5">
        <aside>
            @section('sidebar')
                @include('clients.block.sidebar')
            @show
        </aside>
        <h2 class="text-center">Trang chủ</h2>
    </main>
    </div>
    <footer>
        @include('clients.block.footer')
    </footer>
    <script src="{{ asset('assets/clients/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/clients/js/custom.js') }}"></script>
    <script>
        document.getElementById('show').onclick = function() {
            alert('thành công');
        }
    </script>
</body>
</html>
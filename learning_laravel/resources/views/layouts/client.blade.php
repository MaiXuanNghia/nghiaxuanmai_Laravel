<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/clients/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style type="text/css">
        /* @yield('css'); */
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
        <!-- <h2 class="text-center">{{-- $data --}}</h2> -->

        @yield('content')

        @section('form')
        @show
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
    @stack('scripts')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        @yield('css');
    </style>
</head>
<body>
    <header>
        <h1>header</h1>
    </header>
    <main>
        <aside>
            @section('sidebar')
                @include('clients.block.sidebar')
            @show

        </aside>
        <div class="content">
            /* @yield('name') */
            @yield('content')
            <button id="show">click</button>
        </div>
    </main>
    <footer>
        <h1>footer</h1>
    </footer>
    <script>
        document.getElementById('show').onclick = function() {
            alert('thành công');
        }
    </script>
</body>
</html>
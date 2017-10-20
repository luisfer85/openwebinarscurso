<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Mi primera plantilla</title>
</head>
<body>
    <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
            <h1>Mi primera plantilla</h1>
            @yield('content')
        </div>
    </div>
    <footer>
        @yield('footer')
    </footer>
</body>
</html>

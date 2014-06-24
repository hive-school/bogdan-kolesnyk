<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link rel="stylesheet" href="{{ asset('src/vendor/fontawesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('src/css/bootstrap-theme-lumen.min.css') }}">
        <link rel="stylesheet" href="{{ asset('src/css/main.css') }}">
    </head>
    <body>
        @yield('main')
        <script src="{{ asset('src/vendor/underscore/underscore.js') }}"></script>
        <script src="{{ asset('src/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('src/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('src/vendor/cryptico/cryptico.min.js') }}"></script>
        <script src="{{ asset('src/vendor/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('src/js/main.js') }}"></script>
    </body>
</html>
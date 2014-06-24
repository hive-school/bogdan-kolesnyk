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
        <div id="loader"><i class="fa fa-cog fa-5x fa-spin"></i></div>
        <div class="full-height">
            @yield('header')
            @yield('main')
        </div>
        <div class="sticky-footer container-fluid">
            @yield('footer')
        </div>


        <script src="{{ asset('src/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('src/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('src/vendor/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('src/js/main.js') }}"></script>
        @yield('scripts')
    </body>
</html>
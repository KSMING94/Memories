<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <body>
        <div id="app">
        @yield('hello')
        </div>
    
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

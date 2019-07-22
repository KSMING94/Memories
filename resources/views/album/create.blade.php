<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Creat Album</title>

        <!-- Styles -->
        <style>
            html, body {
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <body>
        <v-app>
            <form-album/>
        </v-app>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Creat Album</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
    <div>
        <span id="name">이름</span>
        <input type="text" placeholder="이름" value="{{$name}}" />
    </div>
    <div>
        <span id="file">사진</span>
        <input type="file" placeholder="사진" value="{{$file}}" />
    </div>
    </body>
</html>

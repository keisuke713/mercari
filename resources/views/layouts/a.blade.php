<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにittleタグを入れるため@yieldで空けておく --}}
        <title>@yield('title')</title>

        <!-- Scripots -->
        {{-- laravel標準のjava scriptを読み込む -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- laravel標準のcssを読み込みます --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1><a href="{{ action('Admin\MercariController@add') }}">メルカリ</a></h1>
        </header>
        <main class="py-4">
            @yield('content')
        </main>
        <footer>
        </footer>
    </body>
</html>

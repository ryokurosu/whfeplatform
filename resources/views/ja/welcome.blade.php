<!doctype html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'HighLow') }}</title>
    <meta property="og:title" content="{{ config('app.name', 'HighLow') }}" >
    <meta property="og:type" content="website" >
    <meta property="og:url" content="{{url()->current()}}" >
    <meta property="og:image" content="{{url('/thumbnail.png')}}">
    <meta property="og:site_name" content="{{ config('app.name', 'HighLow') }}" >
    <meta property="og:description" content="{{ config('app.name', 'HighLow') }}" >
    <meta name="twitter:card" content="summary" >

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
            <a href="{{ url('/fx') }}">Home</a>
            @else
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
            @endif
            <a href="{{ url()->current().'?lang=en' }}">EN</a> / <a class="selected-link">JA</a>
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                {{ config('app.name', 'HighLow') }}
            </div>

            <div class="links">
                @if (Route::has('login'))

                @if (Auth::check())
                <a href="{{ url('/fx') }}">FX</a>
                <a href="{{ url('/delivary') }}">Delivary Option</a>
                @if(Auth::user()->isAdmin())
                <a href="{{route('admin')}}">
                    ADMIN
                </a>
                @endif
                @else
                <a href="{{ url('/fx') }}">FX</a>
                <a href="{{ url('/delivary') }}">Delivary Option</a>
                @endif
                @endif
            </div>
            <p></p>
            <div class="links">
                <!-- <a href="{{url('/free')}}">EA無料ダウンロード</a> -->
            </div>
        </div>
    </div>
</body>
</html>

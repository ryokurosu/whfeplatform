<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="{{ config('app.name', 'HighLow') }}" >
    <meta property="og:type" content="website" >
    <meta property="og:url" content="{{url()->current()}}" >
    <meta property="og:image" content="{{secure_url('/thumbnail.png')}}">
    <meta property="og:site_name" content="{{ config('app.name', 'HighLow') }}" >
    <meta property="og:description" content="{{ config('app.name', 'HighLow') }}" >
    <meta name="twitter:card" content="summary" >



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HighLow') }}</title>
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/jquery.flexslider-min.js"></script>
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>

    <link href="{{ secure_asset('css/dropzone.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ secure_url('/') }}">
                        <img src="{{secure_url('image/logo.png')}}" alt="{{ config('app.name', 'HighLow') }}">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">LOGIN</a></li>
                        <li><a href="{{ route('register') }}">REGISTER</a></li>
                        @else
                        <li>
                            <a href="{{route('welcome')}}">
                                トップ
                            </a>
                        </li>
                        <li>
                            <a href="{{route('fx')}}">
                                FX
                            </a>
                        </li>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="https://line.me/R/ti/p/%40der4914t" target="_blank" rel="nofollow">
                                    サポート（LINE@）
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                ログアウト
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </a>
                            @if(Auth::user()->isAdmin())
                            <hr>
                            <li>
                                <a href="{{route('admin')}}">
                                    管理者ページ
                                </a>
                            </li>
                            <li>
                                <a href="{{route('usersystem')}}">
                                    利用システム確認
                                </a>
                            </li>
                            <li>
                                <a href="{{route('affiliater')}}">
                                    代理店管理
                                </a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    <li class="language"><a href="{{ url()->current().'?lang=en' }}">EN</a> / <a class="selected-link">JA</a></li>

                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ secure_asset('js/app.js') }}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<script>
    (function($) {
        $(function() {
            $('#slider').slick({
                autoplay: true,      
                autoplaySpeed: 5000, 
                arrows: false,       
                dots: true           
            });
        });
    })(jQuery);
</script>
</body>
</html>

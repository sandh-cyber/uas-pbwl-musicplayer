<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('bootstrap-4.5.0/css/bootstrap.css') }}">
    <style>
    html, body {
            background-color: #06001e;
            color: #fff;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
    }
    table {
        margin:10px;
        border-collapse: collapse;
        width: 100%;
        }
    table th {
        text-align: center;
        width: 300px;
        padding: 10px;
        background-color: #1f4dd1;
        color: #000000;
        border: 1px solid #fff;
        
    }
    table td {
        text-align: left;
        padding:10px;
        object-position: center;
        left: 20px;
        background-color: #1f4dd1;
        border: 2px solid #f0ccd4;     
    }

      nav {
        background-color: #1f4dd1;
        color: #fff;
    }
    .cen{
        text-align: center;
    }
    #tbh {
        padding: 2px 10px 3px 10px;
        background-color: white;
        border: 2px solid gray;
        border-radius: 10px;
        font-size: 20px;
        font-weight: bolder;
        text-decoration: none;
        color: black;
        margin-top: 5px;
        margin-left: 10px;
    }
    #btn {
        padding: 2px 10px 3px 10px;
        background-color: white;
        border: 1px solid pink;
        border-radius: 10px;
        font-size: 14px;
        font-weight: bolder;
        text-decoration: none;
        color: black;
        margin-top: 5px;
        margin-left: 10px;
    }
    #tbh:hover,#btn:hover {
        background-color: pink;
    }
    #app{
        border-radius: 10px;
    }

    }




    </style>
</head>
<body>
    <div id="header">
    </div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a id="app" class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <a class="nav-link" href="{{ url('/artist') }}">ARTIST</a>
                            <a class="nav-link" href="{{ url('/album') }}">ALBUM</a>
                            <a class="nav-link" href="{{ url('/track') }}">TRACK</a>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                <div class="dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>

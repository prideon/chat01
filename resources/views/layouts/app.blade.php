<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">


    <style>

        html{
            height: 100%;
        }
        body{
            background-position: center top, center top;
            background-repeat: repeat-x, no-repeat;
            background-image: url(/images/bg.svg), radial-gradient(circle at 100% 0, #ab5e74 0, #19556d 100%);
            color: #1c5167;

        }

        .chat {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .panel{
            box-shadow: 9px 13px 18px -8px rgba(0,0,0,0.75);
        }
        .navbar-default {
            background-position: center top, center top;
            background-repeat: repeat-x, no-repeat;
            background-image: url(/images/bg.svg), radial-gradient(circle at 100% 0, #ab5e74 0, #19556d 100%);
            box-shadow: 2px 14px 18px -8px rgba(0,0,0,0.75);
            border: none;
        }

        b, strong {
            font-weight: bold;
            color: #919291;
        }
        .navbar-default .navbar-brand {
            color: #fff;
            font-weight: bold;
        }

        .navbar-default .navbar-nav > li > a {
            color: white;
        }
        .chat li {
            margin-bottom: 10px;
            padding-bottom: 5px;
            border-bottom: 1px dotted #B3A9A9;
        }

        .chat li .chat-body p {
            margin: 0;
            color: #777777;
        }

        .panel-body {
            overflow-y: scroll;
            height: 350px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #555;
        }

        .inf_cont{
            background-color: #9d5a6e2e;
            border-radius: 5px;
            box-shadow: 2px 2px 24px -2px rgba(0,0,0,0.75);
        }

        .info{
            font-size: 16px;
            padding: 10px 15px;
            /* background-color: #f5f5f500; */
            color: white;
        }

        .circle:before {
            content: ' \25CF';
            font-size: 17px;
            color: green;
        }

        .active_users{
            list-style: none;
        }

        span.act_user:hover{
            background-color: #915a6e;
            cursor: pointer;
        }


    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            'pusherKey' => config('broadcasting.connections.pusher.key'),
            'pusherCluster' => config('broadcasting.connections.pusher.options.cluster')
        ]) !!};
    </script>
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
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <i class="far fa-comments"></i>
                        {{ config('app.name', 'Laravel') }}
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
                            <li> <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>  &nbsp;Login</a></li>
                            <li><a href="{{ route('register') }}"><i class="fas fa-user-plus"></i>  &nbsp;Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="far fa-user"></i>


                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>

                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>

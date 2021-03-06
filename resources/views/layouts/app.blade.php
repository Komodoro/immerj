<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IMMERJ') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <!--<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
            html, body {
                
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 5;
            }

            .menu-immerj {
                color: #636b6f;
                padding: 0 35px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 25px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 35px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 40px;
            }
        </style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light navbar-laravel"  style="padding: 0%; border: 0%;">
            <div class="container" style="margin-left: 7%; margin-bottom: 10px; margin-top: 10px;max-width:1200px">
                <a class="navbar-brand nav nav-justified" href="{{ url('/') }}">
                    <!--<img src="{{ asset('image/IMMERJ_LOGO_NAVBAR.png') }}" alt="IMMERJ LOGO" width="125" height="35">-->
                    <!--<img src="{{ config('app.img') }}" alt="IMMERJ LOGO" width="125" height="35"></>-->
                    <!--{{ config('app.name', 'IMMERJ') }}-->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <div class=" links">
                    <!--<a class="{{ Request::is('home') ? 'home' : '' }}" href="{{ url('/home') }}">Home</a>-->
                    <a class="{{ Request::is('profile') ? 'active' : '' }}" href="{{ url('/profile') }}">Profiles</a>
                    <a class="{{ Request::is('connect') ? 'active' : '' }}" href="{{ url('/') }}">
                    Connect
                    </a> 
        </div>   
                 <!--   <div class="flex-center position-ref full-height">-->
           
            <div class=" links">
                <a class="{{ Request::is('connect') ? 'active' : '' }}" href="{{ url('/') }}">
                        <img src="{{ asset('image/IMMERJ_LOGO_NAVBAR.png') }}" alt="IMMERJ LOGO" width="125" height="35">
                </a>

            
            <a class="{{ Request::is('connect') ? 'active' : '' }}" href="{{ url('/') }}">
                    Helping Others
            </a>

            <a class="{{ Request::is('connect') ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
        </div>
            
        @if (Route::has('login'))
                <div class=" links">
            
                    @auth
                        <a class="{{ Request::is('connect') ? 'active' : '' }}" href="{{ url('/home') }}">Home</a>           
                        
                    @else
                        <a class="{{ Request::is('connect') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                        <a class="{{ Request::is('connect') ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                    @endauth
                    
                </div>
            @endif
        <!--</div>-->
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @auth
                        
                        <div class=" links">
                        
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="dropdown-toggle menu-immerj" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    
                                
                               
                                <a class="dropdown-item" href="{{ url('/home') }}">
                                        Home
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
        </div>
                    @else
                    <li class="{{ Request::is('login') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="{{ Request::is('register') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endauth
                       
                    </ul>
                </div>
            </div>
        </nav>
        <div class="flex-center position-ref full-height">
           <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif-->





    <!--<div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel"  style="padding: 0%; border: 0%;">
            <div class="container">
                <a class="navbar-brand nav nav-justified" href="{{ url('/') }}">
                    <img src="{{ asset('image/IMMERJ_LOGO_NAVBAR.png') }}" alt="IMMERJ LOGO" width="125" height="35">-->
                    <!--<img src="{{ config('app.img') }}" alt="IMMERJ LOGO" width="125" height="35"></>-->
                    <!--{{ config('app.name', 'IMMERJ') }}-->
                <!--</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
                    <!-- Left Side Of Navbar -->
                    <!--<ul class="navbar-nav mr-auto">

                    </ul>-->

                    <!-- Right Side Of Navbar -->
                    <!--<ul class="navbar-nav ml-auto">-->
                        <!-- Authentication Links -->
                        <!--@guest
                            <li class="{{ Request::is('login') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="{{ Request::is('register') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>-->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

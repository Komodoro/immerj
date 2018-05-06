<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
        <title>IMMERJ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-image: url("image/homepage.jpg");
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 5;
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
                    <a href="{{ url('/home') }}">Home</a>
                    <a href="{{ url('/home') }}">Profiles</a>
                    <a class="navbar-brand nav nav-justified" href="{{ url('/') }}">
                    Connect
                    </a> 
        </div>   
                 <!--   <div class="flex-center position-ref full-height">-->
           
            <div class=" links">
                <a class="navbar-brand nav nav-justified" href="{{ url('/') }}">
                        <img src="{{ asset('image/IMMERJ_LOGO_NAVBAR.png') }}" alt="IMMERJ LOGO" width="125" height="35">
                </a>

            
            <a class="navbar-brand nav nav-justified" href="{{ url('/') }}">
                    Helping Others
            </a>
        </div>
        @if (Route::has('login'))
                <div class=" links">
            </a>
                    @auth
                        <a href="{{ url('/home') }}">About</a>
                        
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                    
                </div>
            @endif
        <!--</div>-->
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @auth
                        
                        <div class=" links">
                        <a href="{{ url('/home') }}" role="button"   v-pre>
        </div>
                                    {{ Auth::user()->name }}
                                </a>
                        <!--<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    
                                
                                <!--<a href="{{ url('/home') }}">Home</a>-->
                                
                                <!--<a class="dropdown-item" href="{{ url('/home') }}">
                                        {{ url('/home') }}
                                </a>-->
                                <!--<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>-->
        </div>
                    @else
                   <!-- <li class="{{ Request::is('login') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="{{ Request::is('register') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>-->
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

            <div class="content">
                <div class="title m-b-md">
                    <a style="color: white; font-weight: bold; font-size: 55px;" >FIND THE PERFECT CARER!</a>
                </div>

            

            <form method="POST" action="">
                        @csrf
                <div class="form-group row center">
                            

                            <div class="col-md-2">
                                <input id="doubt_area" type="text" class="form-control" name="doubt_area" value="Doubt Area" required>

                                @if ($errors->has('country'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                            <div class="col-md-2">
                                <input id="country" type="text" class="form-control" name="doubt_area" value="Country" required>

                                @if ($errors->has('country'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-2 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    <!--{{ __('search') }}-->Search!
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </body>
</html>

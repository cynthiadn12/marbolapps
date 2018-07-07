<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Marbola') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header ">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Marbola') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @if (Auth::check())
                                <ul class="nav navbar-nav">
                                    &nbsp;<li><a href="{{url('/country')}}">Country</a></li>
                                    &nbsp;<li><a href="{{url('/league')}}">League</a></li>
                                    {{--&nbsp;<li><a href="{{url('/')}}">Group</a></li>--}}
                                    <li class="dropdown"> <a href="{{url('/team')}}" class="dropdown-toggle" data-toggle="dropdown">Team <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('/team')}}">Team</a></li>
                                            <li><a href="{{url('/teamAttributes')}}">Team Attributes</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"> <a href="{{url('/player')}}" class="dropdown-toggle" data-toggle="dropdown">Player <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('/player')}}">Player</a></li>
                                            <li><a href="{{url('/playerAttributes')}}">Player Attributes</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('/lineup')}}">Line-Up</a></li>
                                    <li><a href="{{url('/match')}}">Match</a></li>
                                    <li><a href="{{url('/livescore')}}">Livescore</a></li>
                                    <li><a href="{{url('/standings')}}">Standing</a></li>
                                    <li><a href="{{url('/schedule')}}">Schedule</a></li>
                                </ul>
                            @endif
                        </div>
                    @endif


                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
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
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--Javascrip!-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/image_mouseover.js"></script>
    <script type="text/javascript" src="js/main2.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/anime.min.js"></script>
    <script type ="text/javascript" src="js/main.js"></script>
    <script type ="text/javascript" src="js/valid.js"></script>



    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <!--Fonts-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Fredericka+the+Great|Josefin+Slab" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Playfair+Display" rel="stylesheet">
    <!--Stylesheets-->
    <link rel="stylesheet" type = "text/css" href = "css/style1.css">
    <link rel="stylesheet" type = "text/css" href = "css/normalize2.css">
    <link rel="stylesheet" type = "text/css" href = "css/pater.css">

    <link rel="stylesheet" type = "text/css" href = "css/component2.css">
    <link rel="stylesheet" type = "text/css" href = "css/normalize.css">
    <link rel="stylesheet" type = "text/css" href = "css/component.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sadie H Photography</title>


</head>
<body>
<div id= "top">
    <div id="header">
        <div id ="logo">
            <a href="{{url('/')}}"><div id ="logo1"> Sadie B</div> <div id = "logo2">Photography</div></a>
        </div>
        <div class = "nav">
            <ul class="nav-class">
                <li class="welcome_message">
                <li id ="g"><a href="{{ url('/gallery') }}">gallery</a></li>
                <li id ="b"><a href="{{ url('/about') }}">about</a></li>
                <li id = "c"><a href="{{ url('/contact') }}">contact</a></li>
                @auth
                    <li id = "current_page"><a href="{{ url('/inquiries') }}">inquiries</a></li>
                @endauth

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            @else
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
            </a>

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
            @endguest
            </ul>
        </div>

    </div>
</div>


@yield('content')

</body>
</html>
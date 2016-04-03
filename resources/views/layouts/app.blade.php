<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Laravel</title>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/app.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/lolliclock.css"  media="screen,projection"/>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
    <script src="js/locationpicker.jquery.min.js"></script>

</head>
<body id="app-layout">

    @if (Auth::check())
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="{{ url('/schedule') }}">Schedule</a></li>
            <li><a href="{{ url('/logout') }}">Logout</a></li>
        </ul>
    @endif

    <nav>
        <div id="nav-wrapper">
            <a class="brand-logo" href="{{ url('/') }}"><b>B</b>there</a>
            <ul class="right hide-on-med-and-down">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                @endif
            </ul>
        </div>
    </nav>

    @yield('content')

    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/lolliclock.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>

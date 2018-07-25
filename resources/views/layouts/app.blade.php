<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link href="//vjs.zencdn.net/5.8/video-js.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
     {{-- <link href="{{ elixir('css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link href="/learning/public/css/my-css.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        .navbar-default {
            background-color: #000;
            border-color: #e7e7e7;
        }

        .navbar-default .navbar-brand {
            color: #fff;
        }

        .navbar-default .navbar-nav>li>a {
            color: #fff;
        }

        .jumbotron h1 {
            font-size: 63px;
            color: #fff;
        }
        .jumbotron p {
            margin-bottom: 15px;
            font-size: 21px;
            font-weight: 200;
            color: #fff;
        }

        .courseTitle {
              font-size: 23px;
                line-height: 30px;
                margin-bottom: 11px;
                font-family: "Roboto Slab", sans-serif;
                font-weight: 700;
                color: #1a1a23;
        }    

        .course-meta {
            position: relative;
            margin-bottom: 0;
            padding: 13px 10px 10px 10px;
            list-style: none;
            margin: 0;
            border: 1px solid #ebebeb;
        }

        .course-meta li {
            padding-right: 4px;
            margin-right: 8px;
            padding-left: 24px;
            color: #636363;
            font-weight: bold;
            position: relative;
            display: inline-block
        }

        .courseheading2{
            text-align: center;
            width: 100%;
            background-color: #dff0d8;
            padding: 10px;
            font-size: 19px;
            font-weight: bold;
        }

    </style>
</head>
<body id="app-layout">
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
                    Course System
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <!-- <li><a href="{{ url('/home') }}">Home</a></li> -->
                    <li><a href={{url('/my-courses')}}>My Courses</a></li>
                    <li><a href={{url('/course-list')}}>Course List</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                              <li><a href="{{ url('/profile') }}/{{Auth::user()->id}}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')


  </br>
  </br>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-xs-7">
            <h3 class="footer-title">About the Company</h3>
            <p>Online Course<br>
              Subscribe to designmodo news and updates to stay tuned on great designs.<br>
              Go to:
            </p>
          </div> <!-- /col-xs-7 -->

          <div class="col-xs-5">
            <h3 class="footer-title">Copyright © 2016 NKOW, Inc.</h3>
            <p>
              <ul>
                <li>Terms of Use</li>
                <li>Privacy Policy</li>
                <li>Intellectual Property</li>
              </ul>
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="//vjs.zencdn.net/5.8/video.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>

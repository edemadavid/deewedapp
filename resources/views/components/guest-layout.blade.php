<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Deewedapp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="{{ asset ('css/fonts/font-awesome.min.css')}}" rel="stylesheet" type="text/css">


        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <!-- Loading main css file -->
		<link rel="stylesheet" href="{{ asset ('css/style.css')}}">
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
    </head>

    <body class="antialiased">

            <div class="site-content ">
                <div class="site-header">
                    <div class="container">
                        <a href="/" class="branding">
                            <img src="{{asset('images/logo.png')}}" alt="" class="logo">
                            <div class="logo-type">
                                <h1 class="site-title">Dee Weather App</h1>
                                <small class="site-description">A simple Weather Forecast App</small>
                            </div>
                        </a>

                        <!-- Default snippet for navigation -->
                        <div class="main-navigation">
                            <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                            <ul class="menu">
                                <li class="menu-item current-menu-item"><a href="/">Home</a></li>

                                <li class="menu-item"><a href="contact.html">Contact</a></li>

                                @if (Route::has('login'))
                                    @auth
                                    <li class="menu-item">
                                        <a href="{{ url('/locate') }}" >Locate</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('/logout') }}" >Logout</a>
                                    </li>
                                    @else
                                    <li class="menu-item">
                                    <!-- <a href="{{ route('register') }}" ></a> -->
                                        <a data-bs-toggle="modal" href="#exampleModalToggle"
                                        role="button">Register</a>
                                    </li>

                                    <li class="menu-item">
                                        <a  data-bs-toggle="modal" href="#exampleModalToggle2">Log In</a>

                                        <button  data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                                        id="login-btn"
                                        role="button">Log In</button>
                                    </li>

                                    @endauth

                                @endif

                            </ul> <!-- .menu -->
                        </div> <!-- .main-navigation -->

                        <div class="mobile-navigation"></div>

                    </div>
                </div> <!-- .site-header -->


                @yield("contents")

                <footer class="site-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <form action="#" class="subscribe-form">
                                    <input type="text" placeholder="Enter your email to subscribe...">
                                    <input type="submit" value="Subscribe">
                                </form>
                            </div>
                            <div class="col-md-3 col-md-offset-1">
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>

                        <p class="colophon">Copyright 2022 Dave Weather App. Theme Template by Themezy. All rights reserved</p>
                    </div>
                </footer> <!-- .site-footer -->
		    </div>


            <script src="{{ asset ('js/jquery-1.11.1.min.js')}}"></script>
            <!-- <script src="{{ asset ('js/plugins.js')}}"></script> -->
            <script src="{{ asset ('js/app.js')}}"></script>

            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
            <script>
                $(function(){
                    $('#login-btn').click()
                })
            </script>
        </div>
    </body>
</html>

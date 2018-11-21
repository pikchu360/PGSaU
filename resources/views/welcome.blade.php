<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PGSaU</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <style>
            html, body {
                background-color: black;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                background-color: black;
                opacity: 0.9;
                color:  #ebf5fb ;
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .bg-image {
                background-image: url('../images/background/bg-body3.jpg');
            }

            .bg-a {
                font-weight: bold;
                background:  #d5f5e3;
            }
            .bg-a:hover {
                background: #f2f3f4;
                opacity: 0.8;
                color: blue;
                font-weight: bold;
            }
            .links-top > a {
                color:white;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <div class="card">
            <div class="card-header bg-dark">
            @if (Route::has('login'))
                <div class="top-right links-top">
                    @auth
                        <a class="btn btn-danger icon-switch1" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn-primary">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-success">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
            <div class="card-body bg-image">
                <div class="title m-b-md">
                    <p align="center">
                        Dirección de Salud Universitaria <br> U.N.Sa.
                    </p>
                </div>
                @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->hasRole('admin'))
                            @include('option_admin')
                        @else
                            @include('option_sanitary')
                        @endif 
                    @else
                        @include('option_users')
                    @endauth
                @endif
            </div>  
            <div class="card-footer">
                
            </div>
        </div>
    </body>
</html>

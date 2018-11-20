<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <style>
            html, body {
                background-color: #aed6f1;
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
                color:  #58d68d ;
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
                background-image: url('../images/background/bg-body.jpg');
            }

            .bg-a {
                background:  #d5f5e3;
            }
            .bg-a:hover {
                background: #f2f3f4;
                opacity: 0.8;
                color: black;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="card">
            <div class="card-header">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
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
                <center><div class="list-group col-xs-3 col-sm-3 col-md-3">
                    <span class="list-group-item list-group-item-action active bg-success">
                        Opciones Administrativas
                    </span>
                    <a href="images" class="list-group-item list-group-item-action bg-a">Galeria de Imagenes</a>
                    <a href="users" class="list-group-item list-group-item-action bg-a">Usuarios</a>
                    <a href="patients" class="list-group-item list-group-item-action bg-a">Fichas Médicas</a>
                    <a href="turns" class="list-group-item list-group-item-action bg-a">Turnos</a>
                    <a href="assists" class="list-group-item list-group-item-action bg-a">Inasistencias</a>
                    <a href="social_works" class="list-group-item list-group-item-action bg-a">Obras Sociales</a>
                    <a href="attention_schelude" class="list-group-item list-group-item-action bg-a">Horarios de Atención</a>
                    <a href="services" class="list-group-item list-group-item-action bg-a">Servicios</a>
                    <a href="requirements" class="list-group-item list-group-item-action bg-a">Requisitos</a>
                    <a href="location" class="list-group-item list-group-item-action bg-a">Ubicación</a>
                    <a href="about" class="list-group-item list-group-item-action bg-a">Acerca de Nosotros</a>
                </div></center>
            </div>
            <div class="card-footer">
                
            </div>
        </div>
    </body>
</html>

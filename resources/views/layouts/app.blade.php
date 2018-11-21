<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <title> @yield('title') </title>
        
        <!-- Enlace a Estilos -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" >
        <link rel="stylesheet" href="{{ asset('css/fullcalendar.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Enlaces script -->
        <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/moment.min.js') }}"></script>
        <script src="{{ asset('js/fullcalendar.min.js') }}"></script>

        <!-- JS para el manejo de datos entre los Modals de los CRUDs -->    
        <script src="{{ asset('js/abm_user.js') }}"></script>
        <script src="{{ asset('js/abm_patient.js') }}"></script>
        <script src="{{ asset('js/abm_license.js') }}"></script>
        <script src="{{ asset('js/abm_social_work.js') }}"></script>

        <style>
            body {
                background-image: url('../images/background/bg-body3.jpg');
            }
            .bg-image {
                /*background-image: url('../images/background/bg-body3.jpg');*/
            }
        </style>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
                <div class="container">     
                    <a class="navbar-brand btn btn-outline-primary" href="/">Gral.</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            @if( Auth::check()  )
                                @include('shared.navbar')
                            @endif
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    @if (Route::has('register'))
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
            </nav>

            <main class="py-4 bg-image">
                <div class="container">
                    <div class="row justify-content-center">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </body>
    <footer class="bg-dark">
    </footer>
</html>

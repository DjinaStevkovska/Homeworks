<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="../js/script.js"></script>
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md bg-secondary navbar-dark fixed-top shadow">
            <a class="navbar-brand" href="/">LOGO </a>
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav ml-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav ml-auto m-2">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item"><a href="{{ url('/home') }}" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <footer>
        <div class="container-fluid bg-dark text-white pb-4">

            <div class="row p-4">
                <div class="col  text-center">
                    Follow us on
                    <ul class="list-unstyled list-inline social-icons mt-1">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-2x fa-facebook-square"></i></a> </li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-2x fa-google"></i></a> </li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-2x fa-twitter-square"></i></a> </li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-2x fa-instagram"></i></a> </li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-medium fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
        
            <div class="text-center">
            <span class="fas fa-code text-primary"></span>&nbsp;&nbsp;with&nbsp;&nbsp;<span class="fas fa-heart"
                style="color: red"></span> By Developers<br>
            The images are taken from <a href="https://unsplash.com">Unsplash.com</a> to avoid copyright issues.
            </div>
            
        </div>
    </footer>
</body>
</html>

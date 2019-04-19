<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EasyMealz</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href={{asset('css/app.css')}} rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href={{asset('css/bootstrap.min.css')}} rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href={{asset('css/custom.css')}} rel="stylesheet">
    <link href={{asset('css/dashb.css')}} rel="stylesheet">
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark nav-bg fixed-top shadow">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img class="img-rounded" src={{asset('img/logo-white.png')}} alt="EasyMealz" height="40px" width="190px">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @guest
                        Login/Register
                    @endguest
                    @auth
                        {{ Auth::user()->name }}
                    @endauth
                    </a>
                    @guest
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                        <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                    </div>
                    @endguest

                    @auth
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/feed') }}">Your Feed</a>
                        <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                    </div>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div>
        <br>
        
        @include('inc.messages')
        
        @yield('content')
    </div>
    @if(!Request::is('recipes/create', 'login', 'register'))
        <a class="btn btn-warning floating-button float" href="/recipes/create">
            <i class="fa fa-lg fa-plus mt-3" style="color: white"></i>
        </a>
            <div class="label-container">
                <div class="label-text">Post a Recipe</div>
                <i class="fa fa-play label-arrow"></i>
            </div>
    @endif

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; EasyMealz 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src={{asset('js/jquery.min.js')}}></script>
    <script src={{asset('js/bootstrap.min.js')}}></script>
</body>

</html>
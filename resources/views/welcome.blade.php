<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CoCo | Accueil</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('favicon.ico') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Changa&display=swap" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- =======================================================
  * Template Name: Regna - v2.1.0
  * Template URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body id="welcome">
    <!-- ======= Header ======= -->
    <header id="header" class="header-transparent">
        <div class="container">

            <div id="logo" class="pull-left">
                {{-- <a href="/"><img src="{{ asset('img/logo-sm.png') }}" alt="" style="height:70px; margin-left: 15px" /></a> --}}
                <!-- Uncomment below if you prefer to use a text logo -->
                {{-- <h1><a href="/">CoCo</a></h1> --}}
            </div>

            <nav class="navbar navbar-expand-md navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}" style="font-family: 'Changa', sans-serif;">
                        {{ config('app.name', 'Laravel') }}
                        {{-- <img src="{{ asset('img/logo-sm.png') }}" alt="Logo CoCo" class="logo-navbar" /> --}}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto"></ul>
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="/">Accueil</a></li>
                            {{-- <li><a href="{{ route('login') }}">Connexion propriétaire</a></li> --}}
                            <li><a href="/fiche/1">Fiche animal scannée</a></li>
                            <li><a href="{{ route('veto.login') }}">Vétérinaire</a></li>
                            <li><a href="https://github.com/Shi974/coco">Code</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
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
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()-> username }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('home') }}">
                                            {{ __('Profil') }}
                                        </a>
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
            
            {{-- <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="/">Accueil</a></li>
                    <li><a href="{{ route('login') }}">Connexion propriétaire</a></li>
                    <li><a href="/fiche/1">Fiche animal scannée</a></li>
                    <li><a href="{{ route('veto.login') }}">Vétérinaire</a></li>
                    <li><a href="https://github.com/Shi974/coco">Code</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav><!-- #nav-menu-container --> --}}
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            {{-- <h1><img src="{{ asset('img/logo-sm.png') }}" alt="" /></h1> --}}
            <h1 style="font-family: 'Changa', sans-serif;">CoCo <i class="fas fa-paw"></i></h1>
            <h2 style="font-family: 'Changa', sans-serif;">Le collier connecté préféré des toutous !</h2>
            {{-- <a href="#about" class="btn-get-started">Get Started</a> --}}
        </div>
    </section><!-- End Hero Section -->

</body>

</html>

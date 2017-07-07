<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="Algo rhythm, Algorhythm UGM, UGM, himakomsi, event">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <!-- Shortcut icon -->
    <link rel="shortcut icon" type="x-icon" href="./img/icon.png">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" type="text/css" href="{{ url('css/jquery.bxslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/baker-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/algorhythm-style.css') }}">
    <!-- =======================================================
        Theme Name: Baker
        Theme URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>

    <div class="loader"></div>
    <div id="myDiv">
    <!--HEADER-->
    <div class="header-cover" style="background-image: url('./img/bg-banner02.jpg');">
      <div class="bg-color">
        <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">
                <img src="./img/text.png">
              </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li class=""><a href="{{ url('') }}">Home</a></li>
                <li class="active"><a href="{{ url('') }}#event">Event</a></li>
                <li class=""><a href="{{ url('') }}#timeline">timeline</a></li>
                <li class=""><a href="{{ url('') }}#news">news</a></li>
                <li class=""><a href="{{ url('') }}#about">about</a></li>
                <li class=""><a href="{{ url('') }}#contact">Contact Us</a></li>
                <li class=""><a href="{{ url('register') }}">Register</a></li>
                <li class=""><a href="{{ url('login') }}">Login</a></li>
              </ul>
            </div>
          </div>
        </nav>
        </header>
        <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="banner-info text-center wow fadeIn delay-05s containerCenter">
              <h2 class="bnr-sub-title">@yield('event')</h2>
              <h1 class="bnr-title">"Nostalgia"</h1>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!--/ HEADER-->
    <!---->
    <!---->
    <!---->
    <section id="timeline" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <section class="mypills-center">
          <ul class="nav nav-pills mg-b-20">
              <li class="active">
                <a data-toggle="pill" href="#one">
                  <span><i class="fa fa-book fa-2x mg-bt-10"></i></span> <br>
                  <span class="hidden-mobile">Deskripsi Perlombaan</span>
                </a>
              </li>
              <li class="">
                <a data-toggle="pill" href="#two">
                  <span><i class="fa fa-gavel fa-2x mg-bt-10"></i></span> <br>
                  <span class="hidden-mobile">Peraturan Perlombaan</span>
                </a>
              </li>
              <li class="">
                <a data-toggle="pill" href="#three">
                  <span><i class="fa fa-calendar fa-2x mg-bt-10"></i></span> <br>
                  <span class="hidden-mobile">Timeline Perlombaan</span>
                </a>
              </li>
              <li class="">
                <a data-toggle="pill" href="#four">
                  <span><i class="fa fa-flag fa-2x mg-bt-10"></i></span> <br>
                  <span class="hidden-mobile">Alur Pendaftaran</span>
                </a>
              </li>
          </ul>
        
          @yield('content')

        </section>
      </div>
    </section>
    <!---->
    <!---->
    <footer id="footer">
      <div class="container">
        <section class="row">
          <div class="socialMedia alignCenter">
            <ul class="noPad">
              <li><a class="fb" href="#"><i class="fa fa-facebook-official"></i></a></li>
              <li><a class="tw" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="ig" href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </section>
        <div class="row text-center">
          <div class="credits">
            <p class="">&copy; <span class="pur bold">Algorhythm</span> UGM 2017</p>
        </div>
        </div>
      </div>
    </footer>
    <!---->
  </div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/jquery.easing.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/wow.js"></script>
    <script src="./js/jquery.bxslider.min.js"></script>
    <script src="./js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
  </body>
</html>
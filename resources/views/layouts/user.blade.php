<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - Algorhythm</title>
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
    <link rel="shortcut icon" type="x-icon" href="../img/icon.png">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.bxslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/baker-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/algorhythm-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
    <style type="text/css">
      .modal-dialog{
        z-index : 1060 ;
      }
    </style>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- =======================================================
      Theme Name: Baker
      Theme URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
      ======================================================= -->
    </head>
    <body class="flatWhiteSec">
      <!--  -->
      <nav class="navbar navbar-fixed-top navbar-fixed-custom">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">
              <img src="{{ asset('img/text.png')}}">
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#asideNav">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
          </div>
          <ul class="nav navbar-nav navbar-right wh">
            <li class="username">Hello, <span class="bold">{{ Auth::user()->name }}</span></li>
            <li><a href="{{ url('/logout') }}" class="btn btn-purple-1" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><span class="fa fa-sign-out"></span> Sign Out</a></li>
            </ul>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </div>
        </nav>
        <!--  -->
        <!-- aside -->
        @yield('content')
      </section>
      <!-- /aside -->
      <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/wow.js') }}"></script>
      <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
      <!-- <script src="{{ asset('js/custom.js') }}"></script> -->
    </body>
    </html>
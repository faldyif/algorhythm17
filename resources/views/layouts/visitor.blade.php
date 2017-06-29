<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Algorhythm</title>
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
    <link rel="shortcut icon" type="x-icon" href="{{ url('img/icon.png') }}">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" type="text/css" href="{{ url('css/jquery.bxslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/baker-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/lightcase.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/algorhythm-style.css') }}">
  </head>
  <body>
    <div class="loader"></div>
    <div id="myDiv">

    @yield('content')

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
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/jquery.easing.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/wow.js') }}"></script>
    <script src="{{ url('js/jquery.bxslider.min.js') }}"></script>
    <script src="{{ url('js/lightcase.js') }}"></script>
    <script src="{{ url('js/custom.js') }}"></script>
    <script src="{{ url('contactform/contactform.js') }}"></script>
    
  </body>
</html>
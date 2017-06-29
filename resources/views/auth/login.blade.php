@extends('layouts.visitor')

@section('content')
<!--HEADER-->
<div class="header-cover" style="background-image: url('{{ url('img/bg-banner02.jpg') }}');">
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
          <a class="navbar-brand" href="{{ url('') }}">
            <img src="{{ url('img/text.png') }}">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="{{ url('') }}#myDiv">Home</a></li>
            <li class=""><a href="{{ url('') }}#event">Event</a></li>
            <li class=""><a href="{{ url('') }}#timeline">timeline</a></li>
            <li class=""><a href="{{ url('') }}#gallery">gallery</a></li>
            <li class=""><a href="{{ url('') }}#news">news</a></li>
            <li class=""><a href="{{ url('') }}#about">about</a></li>
            <li class=""><a href="{{ url('') }}#contact">Contact Us</a></li>
            <li class=""><a href="{{ url('register') }}">Register</a></li>
            <li class="active"><a href="{{ url('login') }}">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    </header>
    <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="banner-info text-center wow fadeIn delay-05s containerCenter">
          <h2 class="bnr-sub-title">LOGIN</h2>
          <h1 class="bnr-title">Algorhythm 2017</h1>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
<!--/ HEADER-->
    <!---->
    <section id="timeline" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <section class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <form role="form" method="POST" action="{{ url('/login') }}">
              {{ csrf_field() }}
              <div class="form-control form-control-bl">
                <div class="form-group">
                  <label class="control-label openSansSemiBold">Email</label> <label class="floatRight smaller gray">Wajib Diisi</label>
                  <input type="text" name="email" id="email" placeholder="Email" class="form-control" required>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-group">
                  <label class="control-label openSansSemiBold">Password</label> <label class="floatRight smaller gray">Wajib Diisi</label>
                  <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="checkbox">
                      <label><input type="checkbox" value="">Remember Me</label>
                    </div>
                <div class="form-group">
                  <input type="submit" class="fullWidth floatRight mg-l-10 btn btn-default btn-submit-purple" value="LOGIN" name="">
                </div>
              </div>
            </form>
          </div>
        </section>
        <section class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
            <p class="alignCenter mg-t-30">Forgot your password?</p>
            <div class="brn-btn alignCenter">
              <a href="" class="mg-t-0 btn btn-algo btn-lightpurple">Click Here</a>
            </div>
          </div>
        </section>
      </div>
    </section>
    <!---->
    <!---->

    @endsection

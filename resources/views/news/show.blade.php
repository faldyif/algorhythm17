@extends('layouts.visitor')

@section('content')
    <!--HEADER-->
    <div class="news-cover" style="background-image: url('{{ url('storage/news_thumbs') }}/{{ $news->thumbnail }}');">
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
                <li class="active"><a href="{{ url('') }}#news">news</a></li>
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
              <h2 class="bnr-sub-title">{{ $news->title }}</h2>
              <hr>
              <h1 class="bnr-title">{{ $news->created_at->format('F jS, Y') }}</h1>
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
          <section>
            {!! $news->content !!}
          </section>
        </section>
      </div>
    </section>
@endsection
@extends('layouts.visitor')

@section('content')
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
            <li class=""><a href="{{ url('') }}#myDiv">Home</a></li>
            <li class=""><a href="{{ url('') }}#event">Event</a></li>
            <li class=""><a href="{{ url('') }}#timeline">timeline</a></li>
            <li class=""><a href="{{ url('') }}#gallery">gallery</a></li>
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
              <h2 class="bnr-sub-title">Pendaftaran Berhasil!</h2>
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
        <section class="mypills-center">        
          <section>
            <p>Calon peserta yang telah mengisi form pendaftaran online wajib melakukan penyetoran biaya pendaftaran melalui:<br>
            No. rekening :<br>
            Bank : BANK INI<br>
            Atas Nama : Daniel Da Lopez<br>
            Jumlah : Rp 30.000 x {{ $instagram->submitting_slot }} foto = <b>Rp {{ number_format(30000 * $instagram->submitting_slot, 0, ".", ".") }}</b><br><br>
            Ketentuan pembayaran/penyetoran :<br>
            </p>
            <ol>
              <li>Maksimal pembayaran H+5 dari Regisrtrasi Pendaftaran di web Algorhythm</li>
              <li>Foto bukti pembayaran dikirim ke Line, WA, atau email Algorhythm beserta format pesan IGCAlgo_[Nama]_[ID Instagram]_[Judul Foto]</li>
              <li>Penyetoran biaya pendaftaran dinyatakan sah apabila dilakukan pada rekening yang tertera diatas.</li>
            </ol>
          </section>
        </section>
      </div>
    </section>
    <!---->
@endsection



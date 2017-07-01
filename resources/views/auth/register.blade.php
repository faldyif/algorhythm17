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
            <li class="active"><a href="{{ url('register') }}">Register</a></li>
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
              <h2 class="bnr-sub-title">REGISTER</h2>
              <h1 class="bnr-title">Algorhythm 2017</h1>
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
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <section class="mypills-center">
          <ul class="nav nav-pills mg-b-20">
              <li class="active">
                <a data-toggle="pill" href="#one">
                  <span><i class="fa fa-film fa-2x mg-bt-10"></i></span> <br>
                  <span class="hidden-mobile">Short Film Competition</span>
                </a>
              </li>
              <li class="">
                <a data-toggle="pill" href="#two">
                  <span><i class="fa fa-instagram fa-2x mg-bt-10"></i></span> <br>
                  <span class="hidden-mobile">Instagram Competition</span>
                </a>
              </li>
              <li class="">
                <a data-toggle="pill" href="#three">
                  <span><i class="fa fa-star fa-2x mg-bt-10"></i></span> <br>
                  <span class="hidden-mobile">Algorhythm Concert</span>
                </a>
              </li>
          </ul>
        
          <div class="tab-content pd-lr-20">
              <div id="one" class="tab-pane fade in active">
                <section class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <form role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="type" value="1">
                      <div class="form-control form-control-bl">
                        <div class="form-group">
                          <label class="control-label openSansSemiBold">Nama Tim </label> <label class="floatRight smaller gray">Wajib Diisi</label>
                          <input type="text" name="team_name" id="team_name" placeholder="Nama Tim" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label class="control-label openSansSemiBold">Ketua Tim</label> <label class="floatRight smaller gray">Wajib Diisi</label>
                          <input type="text" name="name" id="name" placeholder="Ketua Tim" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label class="control-label openSansSemiBold">Email Ketua</label> <label class="floatRight smaller gray">Wajib Diisi</label>
                          <input type="text" name="email" id="email" placeholder="Email Ketua" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label class="control-label openSansSemiBold">Password</label> <label class="floatRight smaller gray">Wajib Diisi</label>
                          <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                        </div>
                        <hr class="mg-bt-30">
                        <div class="form-group">
                          <label class="control-label openSansSemiBold">Nomor Telepon (HP)</label> <label class="floatRight smaller gray">Wajib Diisi</label>
                          <div class="input-group">
                              <span class="input-group-addon">+62</span>
                              <input id="phone" type="number" class="form-control" name="phone" placeholder="Nomor Telepon">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label openSansSemiBold">Asal atau Instansi</label> <label class="floatRight smaller gray">Wajib Diisi</label>
                          <input type="text" name="from_instance" id="from_instance" placeholder="Asal atau Instansi" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label class="control-label openSansSemiBold">Jumlah Film yang Dilombakan</label> <label class="floatRight smaller gray">Wajib Diisi</label>
                          <select class="form-control" id="submitting_slot" name="submitting_slot" required>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <input type="submit" class="floatRight fullWidth mg-l-10 btn btn-default btn-submit-purple" value="REGISTER" name=""> 
                        </div>
                      </div>
                    </form>
                  </div>
                </section>
              </div>
              <div id="two" class="tab-pane fade">
                <section class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <form role="form" method="POST" action="{{ url('/register-instagram') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="type" value="2">
                      <div class="form-control form-control-bl">
                        <div class="form-group">
                          <label class="control-label openSansSemiBold">Nama Lengkap </label> <label class="floatRight smaller gray">Wajib Diisi</label>
                          <input type="text" name="name" id="name" placeholder="Nama Lengkap" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label class="control-label openSansSemiBold">Email</label> <label class="floatRight smaller gray">Wajib Diisi</label>
                          <input type="text" name="email" id="email" placeholder="Email" class="form-control" required>
                        </div>
                        <hr class="mg-bt-30">
                        <div class="form-group">
                          <label class="control-label openSansSemiBold">Nomor Telepon (HP)</label> <label class="floatRight smaller gray">Wajib Diisi</label>
                          <div class="input-group">
                              <span class="input-group-addon">+62</span>
                              <input id="phone" type="number" class="form-control" name="phone" placeholder="Nomor Telepon">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label openSansSemiBold">ID Line </label>
                          <input type="text" name="line_id" id="line_id" placeholder="ID Line" class="form-control">
                        </div>
                        <div class="form-group">
                          <label class="control-label openSansSemiBold">Username Instagram </label> <label class="floatRight smaller gray">Wajib Diisi</label>
                          <input type="text" name="instagram_username" id="instagram_username" placeholder="Username Instagram" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label class="control-label openSansSemiBold">Asal atau Instansi</label> <label class="floatRight smaller gray">Wajib Diisi</label>
                          <input type="text" name="from_instance" id="from_instance" placeholder="Asal atau Instansi" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label class="control-label openSansSemiBold">Jumlah Foto yang Dilombakan</label> <label class="floatRight smaller gray">Wajib Diisi</label>
                          <input id="submitting_slot" type="number" class="form-control" name="submitting_slot" placeholder="Jumlah Foto">
                        </div>
                        <div class="form-group">
                          <input type="submit" class="floatRight fullWidth mg-l-10 btn btn-default btn-submit-purple" value="REGISTER" name=""> 
                        </div>
                      </div>
                    </form>
                  </div>
                </section>
              </div>
              <div id="three" class="tab-pane fade">
                <section class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <form role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="type" value="3">
                      <div class="form-control form-control-bl">
                        <div class="form-group">
                          <label class="control-label openSansSemiBold">Nama Lengkap </label> <label class="floatRight smaller gray">Wajib Diisi</label>
                          <input type="text" name="name" id="name" placeholder="Nama Lengkap" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label class="control-label openSansSemiBold">Email</label> <label class="floatRight smaller gray">Wajib Diisi</label>
                          <input type="text" name="email" id="email" placeholder="Email" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label class="control-label openSansSemiBold">Password</label> <label class="floatRight smaller gray">Wajib Diisi</label>
                          <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                        </div>
                        <hr class="mg-bt-30">
                        <div class="form-group">
                          <label class="control-label openSansSemiBold">Nomor Telepon (HP)</label> <label class="floatRight smaller gray">Wajib Diisi</label>
                          <div class="input-group">
                              <span class="input-group-addon">+62</span>
                              <input id="phone" type="number" class="form-control" name="phone" placeholder="Nomor Telepon">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label openSansSemiBold">Asal atau Instansi</label> <label class="floatRight smaller gray">Wajib Diisi</label>
                          <input type="text" name="from_instance" id="from_instance" placeholder="Asal atau Instansi" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <input type="submit" class="floatRight fullWidth mg-l-10 btn btn-default btn-submit-purple" value="REGISTER" name=""> 
                        </div>
                      </div>
                    </form>
                  </div>
                </section>
              </div>
          </div>
        </section>
        <section class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
            <p class="alignCenter mg-t-30">Already have an account?</p>
            <div class="brn-btn alignCenter">
              <a href="{{ url('login') }}" class="mg-t-0 btn btn-algo btn-lightpurple">Login Here</a>
            </div>
          </div>
        </section>
      </div>
    </section>
    <!---->
@endsection



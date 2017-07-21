@extends('layouts.user')

@section('content')

 <section class="row">
    <aside class="aside col-md-2 col-sm-3 pd-r-0 pd-t-db">
      <div id="navigation">
        <nav class="navbar navbar-default noPad">
            <div class="collapse navbar-collapse noPad" id="asideNav">
              <ul class="nav nav-db">
                <li><a class="active" href="{{ url('user') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                <li><a class="" href="{{ url('user/payment') }}"><i class="fa fa-credit-card-alt"></i><span>Payment</span></a></li>
                @if($user->isPaymentDone())
                <li><a class="" href="{{ url('user/upload') }}"><i class="fa fa-upload"></i><span>Upload</span></a></li>
                @endif
              </ul>
            </div>
        </nav>
      </div>
    </aside>

 
<div class="contentSide flatWhiteSec col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 pd-t-db">
      <section class="pd-20 mg">
        <div class="whiteSec pd-20 mg-b-30">
          <h3 class="mg-t-0">Selamat Datang, {{ $user->name }}</h3>
          <p>Selamat datang di dasbor peserta Algorhythm 2017</p> 
          <p>Informasi penting atau step selanjutnya yang harus user lakukan</p>         
        </div>
        <div class="whiteSec pd-20 mg-b-30">
          <h3 class="mg-t-0">Progress</h3>
          <section class="row">
            <div class="col-md-4">
              <section class="progressSec">
                <h2><i class="fa fa-user-plus pur"></i></h2>
                <h4 class="bold">Registration</h4>
                <p class="gray">Status : <span class="black">Registered</span></p>
              </section>
            </div>
            <div class="col-md-4">
              <section class="progressSec">
                <h2><i class="fa fa-credit-card-alt pur"></i></h2>
                <h4 class="bold">Payment</h4>
                <p class="gray">Status : <span class="black">{{ ($user->isPaymentDone()) ? "Lunas" : "Belum melakukan pembayaran" }}</span></p>
              </section>
            </div>
            <div class="col-md-4">
              <section class="progressSec">
                <h2><i class="fa fa-upload pur"></i></h2>
                <h4 class="bold">Upload</h4>
                <p class="gray">Status : <span class="black">{{ ($user->isPaymentDone()) ? ($user->submissions()->count() . "/" . $user->shortFilm->submitting_slot) : "Anda harus melakukan pembayaran terlebih dahulu" }}</span></p>
              </section>
            </div>
          </section>
        </div>
      </section>
    </div>

 @endsection
@extends('layouts.user')

@section('content')
  <!--  -->
  <!-- aside -->
  <section class="row">
    <aside class="aside col-md-2 col-sm-3 pd-r-0 pd-t-db">
      <div id="navigation">
        <nav class="navbar navbar-default noPad">
            <div class="collapse navbar-collapse noPad" id="asideNav">
              <ul class="nav nav-db">
                <li><a class="active" href="{{ url('admin') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                <li><a class="" href="{{ url('admin/user') }}"><i class="fa fa-user"></i><span>User</span></a></li>
                <li><a class="" href="{{ url('admin/payment') }}"><i class="fa fa-credit-card-alt"></i><span>Payment </span></a></li>
                <li><a class="" href="{{ url('admin/news') }}"><i class="fa fa-newspaper-o"></i><span>News</span></a></li>
                <li><a class="" href="{{ url('admin/submission') }}"><i class="fa fa-upload"></i><span>Submission</span></a></li>
              </ul>
            </div>
        </nav>
      </div>
    </aside>
    <div class="contentSide flatWhiteSec col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 pd-t-db">
      <section class="pd-25">
        <div class="whiteSec pd-10">
          <div class="alignCenter">
            <h3 class="mg-t-0">Detail Users Short Film Competition</h3>
            <hr class="bottom-line">
          </div>
          <div class="row">

    				<div class="col-md-3 pd-15 ">
    					<div class="sec-content-db flatWhiteSec ">
    						<figure class="img-profile">
    							<img src="{{ url('img/leader.jpg') }}">
    						</figure>
    						<div style="padding-bottom:5px" class="text-center">
    							<h3 class="mont-bold">{{ $user->name }}</h3>
    							<hr class="bl-line-sep" style="margin : 10px auto ;">
    							<p class="nomag">{{ $user->email }}</p>
    							<p class="mg-b-10">
                                @if($user->paid_amount == -1)
                                <span class="label label-default">Belum Bayar</span></p>
                                @elseif($user->padid_amount == 1)
                                <span class="label label-default">Sudah Bayar</span></p>
                                @endif
    						</div>
    					</div>
    				</div>

    			<section id="body-profile">
    				<div class="col-md-9 pd-15 ">
    					<div class="sec-content-db">
    						<div class="div-content-db">
    							<div class="row">
    								<div class="col-md-12 flatWhiteSec">
    									<h3 class="nowrap">About Team</h3>
    									<div class="row pd-bt-20">
    										<div class="col-md-6">
    											<table class="table">
    												<tr>
    													<td>Nama tim</td>
    													<td>:</td>
    													<td>{{ $user->name }}</td>
    												</tr>
    												<tr>
    													<td>Email tim</td>
    													<td>:</td>
    													<td>{{ $user->email}}</td>
    												</tr>
    												<tr>
    													<td>Contact person</td>
    													<td>:</td>
    													<td>{{ $user->phone }}</td>
    												</tr>
    											</table>
    										</div>
    										<div class="col-md-6">
    											<table class="table">
    												<tr>
    													<td class="col-md-4">Asal Instansi</td>
    													<td>:</td>
    													<td>{{ $user->from_instance }}</td>
    												</tr>
    												<tr>
    													<td>Jumlah film</td>
    													<td>:</td>
    													<td>
                                                            @if(!empty($user->user->submitting_slot))
    														{{ $user->user->submitting_slot }}
                                                            @else
                                                            -
                                                            @endif
    													</td>
    												</tr>
    											</table>
    										</div>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</section>
    		</div>
  	</div>
    </div>
      </section>

  </section>
  @endsection

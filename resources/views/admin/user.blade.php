@extends('layouts.user')

@section('content')
  <!-- aside -->
  <section class="row">
    <aside class="aside col-md-2 col-sm-3 pd-r-0 pd-t-db">
      <div id="navigation">
        <nav class="navbar navbar-default noPad">
            <div class="collapse navbar-collapse noPad" id="asideNav">
              <ul class="nav nav-db">
                <li><a class="" href="{{ url('admin') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                <li><a class="active" href="{{ url('admin/user') }}"><i class="fa fa-user"></i><span>User</span></a></li>
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
            <h3 class="mg-t-0">Users</h3>
            <hr class="bottom-line">
          </div>
      <div class="row">
  			<section id="teams" class="pd-bt-20">
  				<div class="col-md-12 pd-lr-15 pd-bt-15">
  					<div class="sec-content-db">
  						<div class="div-content-db">
  							<!-- Content goes here -->
  							<form>

                  <div class="panel panel-default">
  									<div class="panel-heading">
  										Users
  									</div>
  									<div class="panel-body">
  										<div class="row nomag pd-b-10">
                      	<div class="col-md-6 nopad">
                      	</div>
                      	<div class="col-md-6 nopad text-right">
                      		<label>
                      			<input type="text" id="input-search" name="" class="form-control input-sm">
                      		</label>
                      		<label>
                      			<input type="submit" value="Search" name="" class="btn btn-sm btn-info">
                      		</label>
                      	</div>
  			              </div>
  										<table class="table table-hover table-bordered table-striped">
  											<thead>
  												<tr>
  													<th>No</th>
  													<th>Nama </th>
  													<th>Kategori</th>
  													<th>Status</th>
  													<th>Aksi</th>
  												</tr>
  											</thead>
  											<tbody>
                          @foreach($user as $key)
  												<tr>
  													<td>{{ (($user->currentPage() - 1 ) * $user->perPage() ) + $loop->iteration }}</td>
  													<td><a href="{{ url('admin/user') }}/{{ $key->id }}" class="special blue">{{ $key->name }}</a></td>
  													<td>{{ $key->getKategori() }}</td>
  													<td>
                            @if($key->paid_amount == -1)
                            <span class="label label-default">Belum Bayar</span>
                            @elseif($key->paid_amount == 1)
                            <span class="label label-success">Sudah Bayar</span>
                            @endif
                            </td>
  													<td>
  														<a href="{{ url('admin/user') }}/{{ $key->id }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
  														<a href="#" class="btn btn-danger btn-sm" onclick="
                            $().ready(function(e){
                              swal({
                                title : 'Are you sure?',
                                text : 'You will not be able to recover this object',
                                type : 'warning',
                                showCancelButton : true,
                                confirmButtonColor: '#DD6B55',
                                confirmButtonText: 'Yes, delete it!',
                                cancelButtonText: 'No, cancel it!',
                                closeOnConfirm: false,
                                closeOnCancel: false,
                                showLoaderOnConfirm : true
                              },
                                function(isConfirm){
                                  if(isConfirm){
                                    $.get('<?php echo url('admin/user/delete/').'/'.$key->id ?>', function(){
                                        swal({
                                          title : 'Deleted',
                                          text : 'The team data has been deleted',
                                          type : 'success'
                                        },function(){
                                          location.reload();
                                        });
                                    }) ;
                                  }else{
                                    swal('Cancelled', 'Your imaginary file is safe :)', 'error');
                                  }
                                }
                              )

                            }) ;"><i class="fa fa-trash"></i></a>
  													</td>
  												</tr>
                          @endforeach
                          {!! $user->render() !!}
  											</tbody>
  										</table>
  										<div class="row nomag">
                      	<div class="col-md-6 nopad">
                        	<span>Showing 1 to {{ $user->count() }} from {{ $user->count() }} entries</span>
                      	</div>
                      </div>
  									</div>
  								</div>
  							</form>
  						</div>
  					</div>
  				</div>
  			</section>
  		</div>
  	</div>
    </div>
      </section>
@endsection

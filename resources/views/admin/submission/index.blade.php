@extends('layouts.submission')

@section('content');

  <!--  -->
  <!-- aside -->
  <section class="row">
    <aside class="aside col-md-2 col-sm-3 pd-r-0 pd-t-db">
      <div id="navigation">
        <nav class="navbar navbar-default noPad">
            <div class="collapse navbar-collapse noPad" id="asideNav">
              <ul class="nav nav-db">
                <li><a class="" href="{{ url('admin') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                <li><a class="" href="{{ url('admin/user') }}"><i class="fa fa-user"></i><span>User</span></a></li>
                <li><a class="" href="{{ url('admin/payment') }}"><i class="fa fa-credit-card-alt"></i><span>Payment </span></a></li>
                <li><a class="" href="{{ url('admin/news') }}"><i class="fa fa-newspaper-o"></i><span>News</span></a></li>
                <li><a class="active" href="{{ url('admin/submission') }}"><i class="fa fa-upload"></i><span>Submission</span></a></li>
              </ul>
            </div>
        </nav>
      </div>
    </aside>
    <div class="contentSide flatWhiteSec col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 pd-t-db">
      <section class="pd-25">
        <div class="whiteSec pd-10">
          <div class="alignCenter">
            <h3 class="mg-t-0">Payment Confirmations</h3>
            <hr class="bottom-line">
          </div>
          <div class="row">
			<section id="files">
				<div class="col-md-12 pd-15">
					<div class="sec-content-db">
						<div class="div-content-db">
							<form>
								<div class="panel panel-default">
									<div class="panel-heading">
										All file upload
									</div>
									<div class="panel-body">
										<div class="row nomag pd-b-10">
			                            	<div class="col-md-6 nopad">
				                            	<label>
				                            		<select class="form-control input-sm">
				                            			<option value="5">5</option>
				                            			<option value="10">10</option>
				                            			<option value="15">15</option>
				                            			<option value="20">20</option>
				                            		</select>
				                            	</label>
				                            		<span>records per page</span>
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
			                            <table class="table table-responsive table-striped table-hover table-bordered">
			                            	<thead>
			                            		<tr>
			                            			<th>No</th>
			                            			<th>Nama Tim</th>
			                            			<th>Kategori</th>
			                            			<th>Tahap</th>
			                            			<th>File</th>
			                            			<th>Aksi</th>
			                            		</tr>
			                            	</thead>
			                            	<tbody>
			                            	<?php $it = 1; ?>
			                            	@foreach($submission as $key)
			                            		<tr>
			                            			<td>{{ $it++ }}</td>
			                            			<td>{{ \App\User::where('id', $key->user_id)->first()->name }}</td>
			                            			<td>{{ \App\User::where('id', $key->user_id)->first()->getKategori() }}</td>
			                            			<td>Penyisihan</td>
			                            			<td>Loremipsum.zip</td>
			                            			<td>
			                            				<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-download"></i></a>
			                            				<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
			                            			</td>
			                            		</tr>
			                            	@endforeach
			                            	{!! $submission->render() !!}
			                            	</tbody>
			                            </table>
			                            <div class="row nomag pd-b-10">
			                            	<div class="col-md-6 nopad">
				                            	<span>Showing 1 to 5 from 400 entries</span>
			                            	</div>
			                            	<div class="col-md-6 nopad text-right">
			                            		<ul class="pagination nomag">
			                            			<li class="disabled"><a href="#">Prev</a></li>
													<li><a href="#">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li>
													<li><a href="#">5</a></li>
													<li><a href="#">Next</a></li>
												</ul>
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

  </section>
@endsection

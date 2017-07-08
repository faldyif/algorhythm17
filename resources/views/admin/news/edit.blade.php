@extends('layouts.edit_news')

@section('content')
  <!-- aside -->
  <section class="row">
    <aside class="aside col-md-2 col-sm-3 pd-r-0 pd-t-db">
      <div id="navigation">
        <nav class="navbar navbar-default noPad">
            <div class="collapse navbar-collapse noPad" id="asideNav">
              <ul class="nav nav-db">
                <li><a class="" href="./dashboard.html"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                <li><a class="" href="./user.html"><i class="fa fa-user"></i><span>User</span></a></li>
                <li><a class="" href="./payment.html"><i class="fa fa-credit-card-alt"></i><span>Payment </span></a></li>
                <li><a class="active" href="./news.html"><i class="fa fa-newspaper-o"></i><span>News</span></a></li>
                <li><a class="" href="./submission.html"><i class="fa fa-upload"></i><span>Submission</span></a></li>
              </ul>
            </div>
        </nav>
      </div>
    </aside>
    <div class="contentSide flatWhiteSec col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 pd-t-db">
      <section class="pd-20">
        <div class="whiteSec pd-10">
          <div class="alignCenter">
            <h3 class="mg-t-0">News</h3>
            <hr class="bottom-line">
          </div>
          <div class="row">
    <section class="col-md-12 pd-t-15 pd-lr-15">
      <div class="sec-content-db">
        <div class="div-content-db">
          {!! Form::model($news, array('route' => array('news.update', $news->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data')) !!}
							<h3 class="nomag">Edit Post</h3>
							<div class="row mg-t-20">
								<div class="col-md-8">
									{{ Form::text('title', null, array('class' => 'form-control')) }}
								</div>
								<div class="col-md-4 text-right">
									<span>Image Thumbnail : </span>
									<label>
										{{ Form::file('thumbnail' ,array('class' => 'form-control')) }}
									</label>
								</div>
							</div>
							<div class="row mg-t-20">
								<div class="col-md-12">
									{{ Form::textarea('content', null, array('class' => 'tinymce')) }}
								</div>
							</div>
							<div class="row mg-t-20">
								<div class="col-md-12">
		                            <label>
		                            	<input type="submit" value="Publish" name="" class="btn btn-sm btn-info">
		                            </label>
								</div>
							</div>
						{!! Form::close() !!}
        </div>
      </div>
    </section>
  </div>

  	</div>
    </div>
      </section>

  </section>
  @endsection
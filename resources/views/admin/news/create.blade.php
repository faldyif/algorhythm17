@extends('layouts.add_news')

@section('content')
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
                <li><a class="active" href="{{ url('admin/news') }}"><i class="fa fa-newspaper-o"></i><span>News</span></a></li>
                <li><a class="" href="{{ url('admin/submission') }}"><i class="fa fa-upload"></i><span>Submission</span></a></li>
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
      						{!! Form::open(array('route' => 'news.store', 'enctype' => 'multipart/form-data')) !!}
      							<h3 class="nomag">Add New Post</h3>
      							<div class="row mg-t-20">
      								<div class="col-md-8">
      									<input type="text" name="title" id="title" placeholder="Enter News Title Here" class="form-control">
      								</div>
      								<div class="col-md-4 text-right">
                        Thumbnail:
      									<input type="file" name="thumbnail" id="thumbnail" placeholder="Thumbnail" class="form-control">
      								</div>
      							</div>
      							<div class="row mg-t-20">
      								<div class="col-md-12">
      									<textarea class="tinymce" name="content">
                        </textarea>
      								</div>
      							</div>
      							<div class="row mg-t-20">
      								<div class="col-md-12">
                        <label>
                          <input type="submit" value="Publish" name="" class="btn btn-lightpurple">
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

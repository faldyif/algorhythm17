@extends('layouts.news')

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
                <a href="{{ url('admin/news/create') }}" class="btn btn-purple-1">Add News <i class="fa fa-plus"></i></a>
                <br>
                <form>
                  <p class="mg-bt-10"> All ({{ $news->count() }})</p>
                  <!-- NEWS TABLE -->
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      News
                    </div>
                    <div class="panel-body">
                      <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="news-table">
                          <thead>
                            <tr>
                              <th></th>
                              <th>Title</th>
                              <th>Author</th>
                              <th>Categories</th>
                              <th>Date</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($news as $key)
                            <tr class="odd gradeX">
                              <td>
                                <label><input type="checkbox" name="" value="1"></label>
                              </td>
                              <td>
                                <strong><a href="{{ url('admin/news') }}/{{ $key->id }}/edit">{{ $key->title }}</a></strong>
                                <br>
                                <span>
                                  <a href="{{ url('news') }}/{{ $key->id }}">View</a> |
                                  <a href="{{ url('admin/news') }}/{{ $key->id }}/edit">Edit</a> |
                                  <a href="#" onclick="
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
                                        $.get('<?php echo url('admin/news/delete').'/'.$key->id?>', function(){
                                          swal({
                                            title : 'Deleted!',
                                            text : 'Your news has been deleted!',
                                            type : 'success'
                                          },function(){
                                            location.reload() ;
                                          });
                                        }) ;
                                      }else{
                                        swal('Cancelled', 'Your news is safe :)', 'error');
                                      }
                                    }
                                    )

                                  }) ;
                                  ">Delete</a>
                                </span>
                              </td>
                              <td>The Author</td>
                              <td>Uncategorized</td>
                              <td>
                                Published
                                <br>
                                <span>
                                  {{ $key->created_at }}
                                </span>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <div class="row nomag">
                          <div class="col-md-6 nopad">
                            <span>Showing 1 to {{ $news->count() }} from {{ $news->count() }} entries</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /NEWS TABLE -->
              </form>
            </div>
          </div>
        </section>
      </div>

    </div>
  </div>
</section>

</section>
@endsection

@extends('layouts.user')

@section('content')

<!-- Modal -->
  <div id="uploadModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Upload Link</h3>
        </div>
        <div class="modal-body">
          <div class="pd-20">
            <form method="POST" action="" class="form-black">
              <div class="form-group">
                <label class="control-label">Link : </label>
                <input type="text" name="team" id="team" placeholder="alamat link" class="form-control" >
              </div>
              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-info" value="Upload" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- /modal -->

<section class="row">
    <aside class="aside col-md-2 col-sm-3 pd-r-0 pd-t-db">
      <div id="navigation">
        <nav class="navbar navbar-default noPad">
            <div class="collapse navbar-collapse noPad" id="asideNav">
              <ul class="nav nav-db">
                <li><a class="" href="{{ url('user') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                <li><a class="" href="{{ url('user/payment') }}"><i class="fa fa-credit-card-alt"></i><span>Payment</span></a></li>
                <li><a class="active" href="{{ url('user/upload') }}"><i class="fa fa-upload"></i><span>Upload</span></a></li>
              </ul>
            </div>
        </nav>
      </div>
    </aside>


<div class="contentSide flatWhiteSec col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 pd-t-db">
      <section class="pd-20 mg">
        <div class="whiteSec pd-20 mg-b-30">
          <h3 class="mg-t-0">Upload</h3>
          <h4 class="mg-t-20">Data</h4>
          <table class="table table-hover">
            <tbody>
              <tr>
                <td colspan="2">Kompetisi</td>
                <td>:</td>
                <td class="bold">Lorem ipsum dolor sit amet</td>
              </tr>
              <tr>
                <td>1</td>
                <td>Link</td>
                <td>:</td>
                <td><a href="https://github.com/Titihanifah/frontend-Algorhythm" target="_blank">https://github.com/Titihanifah/frontend-Algorhythm</a></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Link</td>
                <td>:</td>
                <td><a href="https://github.com/Titihanifah/frontend-Algorhythm" target="_blank">https://github.com/Titihanifah/frontend-Algorhythm</a></td>
              </tr>
            </tbody>
          </table>
        <a href="#" data-toggle="modal" data-target="#uploadModal" class="btn btn-purple-1"><span class="fa fa-upload"></span> Tambah Data</a>
        </div>
      </section>
    </div>


@endsection
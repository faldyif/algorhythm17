@extends('layouts.user')

@section('content')
  <!-- Modal -->
  <div id="uploadPayment" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Upload Bukti Pembayaran</h3>
        </div>
        <div class="modal-body">
          <div class="pd-20">
            <form method="POST" action="" class="form-black">
              {{ csrf_field() }}
              <div class="form-group">
                <label class="control-label">Nama : </label>
                <input type="text" name="team" id="team" value="Namanya siapa" class="form-control" disabled>
              </div>
              <div class="form-group">
                <label class="control-label openSansSemiBold">Jumlah Bayar</label>
                <div class="input-group">
                    <span class="input-group-addon">Rp</span>
                    <input type="number" class="form-control" name="phone_number" placeholder="Nomor Telepon" value="000000" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="photoUpload" class="control-label">Image File :</label>
                <div class="previewPhoto" style="width : 225px ;">
                  <img src="" id="previewGallery">
                </div>
                <input type="file" id="photoUpload" name="paymentPhoto" class="form-control" accept=".jpg, .jpeg, .png, .gif" />
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
                <li><a class="active" href="{{ url('user/payment') }}"><i class="fa fa-credit-card-alt"></i><span>Payment</span></a></li>
                <li><a class="" href="{{ url('user/upload') }}"><i class="fa fa-upload"></i><span>Upload</span></a></li>
              </ul>
            </div>
        </nav>
      </div>
    </aside>


<div class="contentSide flatWhiteSec col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 pd-t-db">
      <section class="pd-20 mg">
        <div class="whiteSec pd-20 mg-b-30">
          <h3 class="mg-t-0">Payment</h3>
          <h4 class="mg-t-20">Keterangan</h4>
          <p>Belum melakukan pembayaran</p>
          <a class="btn btn-purple-1" href="#" data-toggle="modal" data-target="#uploadPayment">
            <i class="fa fa-upload"></i><span> Upload Bukti Pembayaran</span>
          </a>
          <h4 class="mg-t-20">Data</h4>
          <table class="table table-hover">
            <tbody>
              <tr>
                <td>Kompetisi</td>
                <td>:</td>
                <td class="bold">Lorem ipsum dolor sit amet</td>
              </tr>
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td>Aliquam principes</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>:</td>
                <td>mail@mail.com</td>
              </tr>
              <tr>
                <td>Jumlah foto/film yang dilombakan</td>
                <td>:</td>
                <td>1</td>
              </tr>
              <tr>
                <td>Total Pembayaran</td>
                <td>:</td>
                <td>1</td>
              </tr>
            </tbody>
          </table>
        <a href="#" class="btn btn-lightpurple"><span class="fa fa-edit"></span> Ubah</a> <a href="#" class="btn btn-purple-1"><span class="fa fa-lock"></span> Kunci Data</a>
        </div>
      </section>
    </div>
@endsection
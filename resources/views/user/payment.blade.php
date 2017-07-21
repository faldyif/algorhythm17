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
          <form method="POST" action="" class="form-black" id="paymentForm" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label">Nama : </label>
              <input type="text" name="team" id="team" class="form-control" value="{{ $shortfilm->team_name }}" disabled>
            </div>
            <div class="form-group">
              <label class="control-label openSansSemiBold">Jumlah Bayar</label>
              <div class="input-group">
                <span class="input-group-addon">Rp</span>
                <input type="number" class="form-control" name="amount" id="amount" value='{{  60000 * $user->shortFilm->submitting_slot }}' disabled>
              </div>
            </div>
            <div class="form-group">
              <label for="photoUpload" class="control-label">Image File :</label>
              <div class="previewPhoto" style="width : 225px ;">
                <img src="" id="previewGallery">
              </div>
              <input type="file" id="photoUpload" name="photo" class="form-control" accept=".jpg, .jpeg, .png, .gif" />
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
        <h3 class="mg-t-0">Payment</h3>
        <h4 class="mg-t-20">Keterangan</h4>
        @if($user->isPaymentDone())
        <p>Sudah lunas</p>
        @else
        <p>Belum melakukan pembayaran</p>
        @endif
        @if($user->latestPayment->count() == 0)
        <a class="btn btn-purple-1" href="#" data-toggle="modal" data-target="#uploadPayment">
          <i class="fa fa-upload"></i><span> Upload Bukti Pembayaran</span>
        </a>
        @endif
        <h4 class="mg-t-20">Data</h4>
        <table class="table table-hover">
          <tbody>
            <tr>
              <td>Kompetisi</td>
              <td>:</td>
              <td class="bold">{{ $user->getKategori() }}</td>
            </tr>
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td>{{ $user->name }}</td>
            </tr>
            <tr>
              <td>Email</td>
              <td>:</td>
              <td>{{ $user->email }}</td>
            </tr>
            @if($user->role_id == 1)
            <tr>
              <td>Jumlah foto/film yang dilombakan</td>
              <td>:</td>
              <td>{{ $user->shortFilm->submitting_slot }}</td>
            </tr>
            @endif
            <tr>
              <td>Total Pembayaran</td>
              <td>:</td>
              @if($user->role_id == 1)
              <td>Rp {{ number_format(60000 * $user->shortFilm->submitting_slot, 0, ".", ".") }}</td>
              @else
              <td>Rp {{ number_format(10000, 0, ".", ".") }}</td>
              @endif
            </tr>
            <tr>
              <td>Kiriman verifikasi</td>
              <td>:</td>
              @if($user->latestPayment->count() != 0)
              <td><a href="{{ url('storage/pc') }}/{{ $news->photo_path }} }}">Sudah mengirimkan</a></td>
              @else
              <td>Belum mengirimkan</td>
              @endif
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>
  @endsection

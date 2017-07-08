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
        <h3 class="mg-t-0">Detail Users Concert</h3>
        <hr class="bottom-line">
    </div>
    <div class="row">

        <div class="col-md-3 pd-15 ">
           <div class="sec-content-db flatWhiteSec ">
              <figure class="img-profile">
              <img src="{{ url('img/male.png') }}">
             </figure>
             <div class="text-center">

                <p class="mg-b-10">
                        @if($user->paid_amount == -1)
                        <span class="label label-default">Belum Bayar</span>
                        @elseif($user->paid_amount == 1)
                        <span class="label label-success">Sudah Bayar</span>
                        @endif
                    </span>
                </p>
             </div>
         </div>
     </div>

     <section id="body-profile">
        <div class="col-md-9 pd-15 ">
           <div class="sec-content-db">
              <div class="div-content-db">
                 <div class="row">
                    <div class="col-md-10 flatWhiteSec">
                       <h3 class="nowrap">About User</h3>
                       <div class="row pd-bt-20">
                          <div class="col-md-10">
                             <table class="table">
                                <tr>
                                   <td>Nama Lengkap</td>
                                   <td>:</td>
                                   <td>{{ $user->name }}</td>
                               </tr>
                               <tr>
                                   <td>Email </td>
                                   <td>:</td>
                                   <td>{{ $user->email }}</td>
                               </tr>
                               <tr>
                                   <td>Contact person</td>
                                   <td>:</td>
                                   <td>{{ $user->phone }}</td>
                               </tr>
                               <tr>
                                   <td class="col-md-8">Asal Instansi</td>
                                   <td>:</td>
                                   <td>{{ $user->from_instance }}</td>
                               </tr>
                           </table>
                       </div>



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

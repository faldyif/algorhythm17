@extends('layouts.visitor')

@section('content')
    <!--HEADER-->
    <div class="header" style="background-image: url('{{ url('img/bg-banner.jpg') }}');">
      <div class="bg-color">
        <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">
                <img src="{{ url('img/text.png') }}">
              </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#myDiv">Home</a></li>
                <li class=""><a href="#event">Event</a></li>
                <li class=""><a href="#timeline">timeline</a></li>
                <li class=""><a href="#gallery">gallery</a></li>
                <li class=""><a href="#news">news</a></li>
                <li class=""><a href="#about">about</a></li>
                <li class=""><a href="#contact">Contact Us</a></li>
                @if(Auth::guest())
                <li class=""><a href="{{ url('register') }}">Register</a></li>
                <li class=""><a href="{{ url('login') }}">Login</a></li>
                @else
                <li class=""><a href="{{ url('user') }}">Dashboard</a></li>
                @endif
              </ul>
            </div>
          </div>
        </nav>
        </header>
        <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="banner-info text-center wow fadeIn delay-05s containerCenter">
              <h2 class="bnr-sub-title">Forever young</h2>
              <h1 class="bnr-title">Annual Gorgeous Creativity with Your Rhythm</h1>
              <div class="brn-btn">
                <a href="#event" class="btn btn-more btn-purple">Learn More</a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!--/ HEADER-->
    <!---->
    <section id="event" class="section-padding wow fadeIn delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">ALGORHYTHM 2017</h2>
            <p class="sub-title pad-bt15">Annual Gorgeous Creativity with Your Rhythm</p>
            <p class="normal">Algorhythm UGM merupakan acara tahunan Himpunan Mahasiswa Komputer dan Sistem Informasi (Himakomsi) UGM yang bertujuan untuk memperingati ulang tahun Himakomsi dan program studi Komputer dan Sistem Informasi.
Tahun ini merupakan tahun ke lima penyelenggaraan Algorhythm UGM dan dengan mengangkat tema “<b>Forever Young</b>”. Algorhythm UGM kali ini terdiri dari beberapa rangkaian acara.</p>
            <hr class="bottom-line">
          </div>
          <section class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
              <section class="row big-mg-bt-sec wow slideInLeft delay-05s">
                <div class="col-md-3 col-sm-3">
                  <figure>
                    <img src="{{ url('img/bg-square.png') }}" style="background-image: url('{{ url('img/short-film.png') }}');">
                  </figure>
                </div>
                <div class="col-md-9 col-sm-9">
                  <div class="service-item alignCenter-mobile">
                    <h3><span>S</span>hort Film Competition</h3>
                    <!-- <h3 class="pur">"Nostalgia"</h3> -->
                    <p class="black">Algorhythm Short Film Competition merupakan sebuah kompetisi film pendek yang diperuntukkan bagi seluruh kalangan untuk menggali kreativitas, khasanah budaya yang dimilikinya dan menuangkannya ke dalam rekaman gambar yang mampu bercerita. Dengan mengangkat tema “<strong>Nostalgia</strong>”, diharapkan agar peserta dapat bercerita dan berbagi tentang sebuah kenangan di masa lampau. </p>
                    <a href="{{ url('short-film') }}">Learn more ...</a>
                  </div>
                </div>
              </section>
              <section class="row big-mg-bt-sec wow slideInRight delay-05s">
                <div class="col-md-3 col-sm-3 floatRight noFloat-mobile">
                  <figure>
                    <img src="{{ url('img/bg-square.png') }}" style="background-image: url('{{ url('img/ig-comp.png') }}');">
                  </figure>
                </div>
                <div class="col-md-8 col-sm-8 col-md-offset-1">
                  <div class="service-item alignRight alignCenter-mobile">
                    <h3><span>I</span>nstagram Competition</h3>
                    <!-- <h3 class="pur">"Memorable Place"</h3> -->
                    <p class="black">Algorhythm Instagram Competition merupakan sebuah ajang kompetisi foto melalui sosial media Instagram. Instagram Competition Algorythm 2017 ini mengusung tema “<strong>Memorable Place</strong>”. Kompetisi ini diperuntukkan bagi semua kalangan dan bertujuan untuk mengembangkan kreativitas dalam seni fotografi.</p>
                    <a href="{{ url('ig') }}">Learn more ...</a>
                  </div>
                </div>
              </section>
              <section class="row big-mg-bt-sec wow slideInLeft delay-05s">
                <div class="col-md-3 col-sm-3">
                  <figure>
                    <img src="{{ url('img/bg-square.png') }}" style="background-image: url('{{ url('img/concert.png') }}');">
                  </figure>
                </div>
                <div class="col-md-9 col-sm-9">
                  <div class="service-item alignCenter-mobile">
                    <h3><span>C</span>oncert</h3>
                    <!-- <h3 class="pur">"A Night To Remember"</h3> -->
                    <p class="black">Kegiatan ini merupakan acara puncak dari ALGORHYTHM 2017. Konser Algorhythm mengangkat tema “<strong>A Night to Remember</strong>” bertujuan untuk untuk merayakan ulang tahun program studi KOMSI, serta menumbuhkan solidaritas antar mahasiswa KOMSI. Dengan adanya konser ini juga diharapkan dapat menciptakan suatu acara dengan suasana yang mengenang dan berkesan bagi seluruh keluarga KOMSI maupun para penonton konser</p>
                    <a href="{{ url('concert') }}">Learn more ...</a>
                  </div>
                </div>
              </section>
            </div>
          </section>
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <section id="timeline" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">TIMELINE</h2>
            <p class="sub-title pad-bt15">Berikut merupakan timeline keseluruhan dari rangkaian acara Algorhythm 2017</p>
            <hr class="bottom-line">
          </div>
        </div>
                  <section class="mypills-center">
                    <ul class="nav nav-pills mg-b-20">
                        <li class="active"><a data-toggle="pill" href="#one">Short Film Competition</a></li>
                        <li class=""><a data-toggle="pill" href="#two">Instagram Competition</a></li>
                        <li class=""><a data-toggle="pill" href="#three">Algorhythm Concert</a></li>
                    </ul>

                    <div class="tab-content pd-lr-20">
                        <div id="one" class="tab-pane fade in active">
                          <div class="timeline-section row">
                            <p class="col-md-2 col-sm-2 col-xs-2 alignRight mg-t-10">17 Juli - 17 Oktober 2017</p>
                            <div class="line-ver col-md-1 col-sm-2 col-xs-2 hidden-mobile">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <div class="col-md-9 col-sm-8 col-xs-10 whiteSec noPad mg-bt-10">
                              <div class="pd-lr-15">
                                <h3 class="mg-t-10">Pendaftaran</h3>
                                <p>Pendaftaran Short Film Competition</p>
                              </div>
                            </div>
                          </div>
                          <div class="timeline-section row">
                            <p class="col-md-2 col-sm-2 col-xs-2 alignRight mg-t-10">18 - 23 Oktober 2017</p>
                            <div class="line-ver col-md-1 col-sm-2 col-xs-2 hidden-mobile">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <div class="col-md-9 col-sm-8 col-xs-10 whiteSec noPad mg-bt-10">
                              <div class="pd-lr-15">
                                <h3 class="mg-t-10">Proses Seleksi</h3>
                                <p>Seleksi Administrasi dan Tahap Penjurian untuk masuk ke dalam 10 besar finalis Short Film Competition</p>
                              </div>
                            </div>
                          </div>
                          <div class="timeline-section row">
                            <p class="col-md-2 col-sm-2 col-xs-2 alignRight mg-t-10">25 Oktober 2017</p>
                            <div class="line-ver col-md-1 col-sm-2 col-xs-2 hidden-mobile">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <div class="col-md-9 col-sm-8 col-xs-10 whiteSec noPad mg-bt-10">
                              <div class="pd-lr-15">
                                <h3 class="mg-t-10">Pengumuman Seleksi dan Penjurian oleh Panitia</h3>
                              </div>
                            </div>
                          </div>
                          <div class="timeline-section row">
                            <p class="col-md-2 col-sm-2 col-xs-2 alignRight mg-t-10">28 Oktober 2017</p>
                            <div class="line-ver col-md-1 col-sm-2 col-xs-2 hidden-mobile">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <div class="col-md-9 col-sm-8 col-xs-10 whiteSec noPad mg-bt-10">
                              <div class="pd-lr-15">
                                <h3 class="mg-t-10">Penjurian Finalis oleh Juri</h3>
                              </div>
                            </div>
                          </div>
                          <div class="timeline-section row">
                            <p class="col-md-2 col-sm-2 col-xs-2 alignRight mg-t-10">4 November 2017</p>
                            <div class="col-md-1 col-sm-2 col-xs-2 hidden-mobile">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <div class="col-md-9 col-sm-8 col-xs-10 whiteSec noPad mg-bt-10">
                              <div class="pd-lr-15">
                                <h3 class="mg-t-10">Awarding Night</h3>
                                <p>Malam Penganugerahan 10 besar finalis Short Film Competition</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="two" class="tab-pane fade">
                          <div class="timeline-section row">
                            <p class="col-md-2 col-sm-2 col-xs-2 alignRight mg-t-10">10 Juli - 31 Agustus 2017</p>
                            <div class="line-ver col-md-1 col-sm-2 col-xs-2 hidden-mobile">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <div class="col-md-9 col-sm-8 col-xs-10 whiteSec noPad mg-bt-10">
                              <div class="pd-lr-15">
                                <h3 class="mg-t-10">Pendaftaran</h3>
                                <p>Pendaftaran Instagram Competition</p>
                              </div>
                            </div>
                          </div>
                          <div class="timeline-section row">
                            <p class="col-md-2 col-sm-2 col-xs-2 alignRight mg-t-10">1 - 10 September 2017</p>
                            <div class="line-ver col-md-1 col-sm-2 col-xs-2 hidden-mobile">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <div class="col-md-9 col-sm-8 col-xs-10 whiteSec noPad mg-bt-10">
                              <div class="pd-lr-15">
                                <h3 class="mg-t-10">Proses Seleksi</h3>
                                <p>Tahap Penjurian &amp Voting Like Terbanyak di akun Instagram @algorhythmugm</p>
                              </div>
                            </div>
                          </div>
                          <div class="timeline-section row">
                            <p class="col-md-2 col-sm-2 col-xs-2 alignRight mg-t-10">11 September 2017</p>
                            <div class="col-md-1 col-sm-2 col-xs-2 hidden-mobile">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <div class="col-md-9 col-sm-8 col-xs-10 whiteSec noPad mg-bt-10">
                              <div class="pd-lr-15">
                                <h3 class="mg-t-10">Pengumuman</h3>
                                <p>Pengumuman pemenang Instagram Competition Juara 1, 2 dan Like Terbanyak</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="three" class="tab-pane fade">
                          <h2 class="alignCenter mg-bt-30">Coming Soon!</h2>
                        </div>
                    </div>
                  </section>
      </div>
    </section>
    <!---->
    <section id="gallery" class="section-padding wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">GALLERY</h2>
            <p class="sub-title pad-bt15">We don't remember days, we remember memories. That's why let's take a look at old memory of us.</p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-4 col-sm-6">
            <a href="{{ url('img/port01.jpg') }}" data-rel="lightcase:galleryCollection" title="Vix eu etiam mediocrem">
              <figure class="pd-lr-10 pd-bt-20">
                <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/galeri-1.jpg') }}');">
              </figure>
            </a>
          </div>
          <div class="col-md-4 col-sm-6">
            <a href="{{ url('img/port02.jpg') }}" data-rel="lightcase:galleryCollection" title="Delenit utroque vivendo est ea">
              <figure class="pd-lr-10 pd-bt-20">
                <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/galeri-2.jpg') }}');">
              </figure>
            </a>
          </div>
          <div class="col-md-4 col-sm-6">
            <a href="{{ url('img/port03.jpg') }}" data-rel="lightcase:galleryCollection" title="Delenit utroque vivendo est ea">
              <figure class="pd-lr-10 pd-bt-20">
                <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/galeri-3.jpg') }}');">
              </figure>
            </a>
          </div>
          <div class="col-md-4 col-sm-6">
            <a href="{{ url('img/port04.jpg') }}" data-rel="lightcase:galleryCollection" title="Delenit utroque vivendo est ea">
              <figure class="pd-lr-10 pd-bt-20">
                <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/galeri-4.jpg') }}');">
              </figure>
            </a>
          </div>
          <div class="col-md-4 col-sm-6">
            <a href="{{ url('img/port05.jpg') }}" data-rel="lightcase:galleryCollection" title="Delenit utroque vivendo est ea">
              <figure class="pd-lr-10 pd-bt-20">
                <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/galeri-5.jpg') }}');">
              </figure>
            </a>
          </div>
          <div class="col-md-4 col-sm-6">
            <a href="{{ url('img/port06.jpg') }}" data-rel="lightcase:galleryCollection" title="Delenit utroque vivendo est ea">
              <figure class="pd-lr-10 pd-bt-20">
                <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/galeri-6.jpg') }}');">
              </figure>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <section class="register-home wow fadeInUp delay-05s hidden-mobile">
      <figure>
        <img src="{{ url('img/bg2.png') }}" style="background-image: url('{{ url('img/port03.jpg') }}');">
        <div class="overlay"></div>
        <div class="container-fluid containerCenter alignCenter wh">
          <h2 class="mg-b-20">What are you waiting for?</h2>
          <p class="small">Segera daftarkan dirimu untuk mengikuti rangkaian Algorhythm 2017!</p>
          <div class="brn-btn">
            <a href="#event" class="btn btn-more btn-white bold mg-t-10">REGISTER</a>
          </div>
        </div>
      </figure>
    </section>
    <!---->
    <section id="news" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">news</h2>
            <p class="sub-title pad-bt15">Semua informasi &amp berita mengenai rangkaian Algorhythm 2017 ada di sini!</p>
            <hr class="bottom-line">
          </div>
          @foreach($news as $key)
          <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12 mg-b-30">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="">
                  <img src="{{ url('storage/news_thumbs') }}/{{ $key->thumbnail }}" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2>{{ $key->title }}</h2>
                    <p>Posted In: <span>{{ $key->created_at->format('F jS, Y') }}</span></p>
                <a href="" class="read-more">Read more →</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <section id="testimonial" class="wow fadeInUp delay-05s">
      <div class="bg-testicolor">
        <div class="container section-padding">
        <div class="row">
          <div class="testimonial-item">
            <ul class="bxslider pd-0">
              <li>
                <blockquote>
                  <img src="{{ url('img/thumb.png') }}" class="img-responsive">
                  <p>Come a day there won't be room for naughty men like us to slip about at all. This job goes south, there well may not be another. </p>
                </blockquote>
                <small>Shaun Paul, Client</small>
              </li>
              <li>
                <blockquote>
                  <img src="{{ url('img/thumb.png') }}" class="img-responsive">
                  <p>So here is us, on the raggedy edge. Don't push me, and I won't push you. </p>
                </blockquote>
                <small>Marry Smith, Client</small>
              </li>
              <li>
                <blockquote>
                  <img src="{{ url('img/thumb.png') }}" class="img-responsive">
                  <p>Come a day there won't be room for naughty men like us to slip about at all. This job goes south, there well may not be another.</p>
                </blockquote>
                <small>Vivek Singh, Client</small>
              </li>
              <li>
                <blockquote>
                  <img src="{{ url('img/thumb.png') }}" class="img-responsive">
                  <p>So here is us, on the raggedy edge. Don't push me, and I won't push you.</p>
                </blockquote>
                <small>John Doe, Client</small>
              </li>
            </ul>
          </div>
        </div>
        </div>
      </div>
    </section>
    <!---->
    <section id="about" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">about</h2>
            <p class="sub-title pad-bt15">Sebelum kita melangkah lebih jauh. Maka perkenankanlah kami untuk mengenalkan diri.</p>
            <hr class="bottom-line">
          </div>
        </div>
        <section class="row">
          <div class="col-md-6 noPad mg-b-20">
            <figure>
              <img src="{{ url('img/hima-all.JPG') }}">
            </figure>
          </div>
          <div class="col-md-6 small mg-b-20">
            <section>
              <h3 class="mg-t-0">HIMAKOMSI</h3>
              <p>
                HIMAKOMSI (Himpunan Mahasiswa Komputer dan Sistem Informasi) merupakan sebuah wadah bagi mahasiswa Komputer dan Sistem Informasi (KOMSI) yang ingin mengembangkan pengetahuannya dibidang organisasi. Himakomsi sendiri dibentuk pada tahun 2010, setelah berpisah dengan Himakom (Himpunan Mahasiswa Ilmu Komputer). Kegiatan Himakomsi UGM dituangkan dalam bentuk program-program kerja yang bertujuan mendukung Tri Dharma Perguruan Tinggi yang terdiri atas Pendidikan dan Pengajaran, Penelitian, dan Pengabdian kepada Masyarakat.
              </p>
              <p>
                Himakomsi memiliki 5 divisi, yaitu Event Organizer and Network (EON), Talent Entertainment and Art (TEA), Entrepreneurship (EPS), Administrasi Publikasi dan Advokasi (ADPA), dan Study Intra Scientica (SIS). Himakomsi berlokasi di Sekolah Vokasi UGM.
              </p>
              <p>
                Annual Gorgeous Creativity with Your Rhythm (Algorhythm) merupakan suatu rangkaian acara yang diselenggarakan setiap tahun dalam rangka ulang tahun Himpunan Mahasiswa Komputer dan Sistem Informasi Universitas Gadjah Mada. Rangkaian - rangkaian acara algorhythm terdiri dari Instagram Competition, Short Movie Competition dan pada acara puncaknya adalah Algorhythm Concert
              </p>
            </section>
          </div>
        </section>
      </div>
    </section>
    <!---->
    <section id="contact" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center white">
            <h2 class="service-title pad-bt15">Keep in touch with us</h2>
            <p class="sub-title pad-bt15">Hubungi kami untuk informasi lebih lanjut</p>
            <hr class="bottom-line white-bg">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="loction-info white">
              <p><i class="fa fa-map-marker fa-fw pull-left fa-2x pur"></i>Gedung Sekolah Vokasi<br>Universitas Gadjah Mada</p>
              <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x pur"></i>algorhythmugm@gmail.com</p>
              <p><i class="fa fa-phone fa-fw pull-left fa-2x pur"></i>+41 5787 2323</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="contact-form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="col-md-6 padding-right-zero">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                      <button type="submit" class="btn btn-primary btn-submit">SEND NOW</button>
                    </div>
                </form>

            </div>
          </div>
        </div>
      </div>
    </section>


@endsection

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
          <form method="" action="">
            <h3 class="nomag">Edit Post</h3>
            <div class="row mg-t-20">
              <div class="col-md-8">
                <input type="text" name="title" id="title" placeholder="Enter News Title Here" value="Lorem Ipsum Dolorsit Amet" class="form-control">
              </div>
              <div class="col-md-4 text-right">
                <span>Categories : </span>
                <label>
                  <select class="form-control" id="categories">
                    <option value="1">Categories 1</option>
                    <option value="2" selected>Categories 2</option>
                    <option value="3">Categories 3</option>
                    <option value="4">Categories 4</option>
                  </select>
                </label>
              </div>
            </div>
            <div class="row mg-t-20">
              <div class="col-md-12">
                <textarea class="tinymce">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </textarea>
              </div>
            </div>
            <div class="row mg-t-20">
              <div class="col-md-12">
                <label>
                                <input type="submit" value="Save Draft" name="" class="btn btn-submit">
                              </label>
                              <label>
                                <input type="submit" value="Preview" name="" class="btn btn-submit">
                              </label>
                              <label>
                                <input type="submit" value="Publish" name="" class="btn btn-lightpurple">
                              </label>
              </div>
            </div>
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
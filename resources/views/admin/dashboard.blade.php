@extends('layouts.admin')

@section('content')

  <!-- aside -->
<section class="row">
 <aside class="aside col-md-2 col-sm-3 pd-r-0 pd-t-db">
      <div id="navigation">
        <nav class="navbar navbar-default noPad">
            <div class="collapse navbar-collapse noPad" id="asideNav">
              <ul class="nav nav-db">
                <li><a class="active" href="{{ url('admin') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                <li><a class="" href="{{ url('admin/user') }}"><i class="fa fa-user"></i><span>User</span></a></li>
                <li><a class="" href="{{ url('admin/payment') }}"><i class="fa fa-credit-card-alt"></i><span>Payment </span></a></li>
                <li><a class="" href="{{ url('admin/news') }}"><i class="fa fa-newspaper-o"></i><span>News</span></a></li>
                <li><a class="" href="{{ url('admin/submission') }}"><i class="fa fa-upload"></i><span>Submission</span></a></li>
              </ul>
            </div>
        </nav>
      </div>
    </aside>

<div class="contentSide flatWhiteSec col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 pd-t-db">
      <section class="pd-20 mg">
        <div class="whiteSec pd-20 mg-b-30">
          <h3 class="mg-t-0">Welcome Admin</h3>
        </div>
        <div class="whiteSec pd-20 mg-b-30">
          <h3 class="mg-t-0">Progress</h3>
          <section class="row">
            <div class="col-md-4">
              <section class="progressSec">
                <h2><i class="fa fa-film pur"></i></h2>
                <h4 class="bold">Movie Contest</h4>
                <p class="gray">Pendaftar : <span class="black">200</span></p>
              </section>
            </div>
            <div class="col-md-4">
              <section class="progressSec">
                <h2><i class="fa fa-instagram pur"></i></h2>
                <h4 class="bold">IG Contest</h4>
                <p class="gray">Pendaftar : <span class="black">-</span></p>
              </section>
            </div>
            <div class="col-md-4">
              <section class="progressSec">
                <h2><i class="fa fa-star  pur"></i></h2>
                <h4 class="bold">Concert</h4>
                <p class="gray">Pendaftar : <span class="black">-</span></p>
              </section>
            </div>
          </section>

        <section id="chart" class="pd-bt-10">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 dash-frame">
							<div id="chart-container" class="pd-bt-15" style="width :100% ; height : 400px ;"></div>
						</div>
					</div>
				</div>
			</section>
			<section id="activity" class="pd-bt-10">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 dash-frame">
							<div class="dash-header">
								<h3 class="mont">Recent Activity</h3>
								<hr class="bl-line-sep">
							</div>
							<div class="dash-body">
								<div class="row">
									<div class="col-md-6">
										<h4>Registered </h4>
										<table class="table table-hover table-striped table-responsive">
											<thead>
												<tr>
													<th>No</th>
													<th class="col-md-3">Name</th>
													<th>Category</th>
													<th>Recent status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>John</td>
													<td>Short Film Competition</td>
													<td><span class="label label-success">Finalist</span></td>
												</tr>
												<tr>
													<td>2</td>
													<td>James</td>
													<td>Instagram Competition</td>
													<td><span class="label label-default">Registered</span></td>
												</tr>
												<tr>
													<td>3</td>
													<td>David</td>
													<td>Concert</td>
													<td><span class="label label-warning">Paid</span></td>
												</tr>
												<tr>
													<td>4</td>
													<td>Team Anda</td>
													<td>Short Film Competition</td>
													<td><span class="label label-confirm">Confirmed</span></td>
												</tr>
												<tr>
													<td>5</td>
													<td>Team Kita</td>
													<td>Short Film Competition</td>
													<td><span class="label label-info">Batch 1 Passed</span></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="col-md-6">
										<h4>Payments</h4>
										<table class="table table-hover table-striped table-responsive">
											<thead>
												<tr>
													<th>No</th>
													<th>Name</th>
													<th>Category</th>
													<th>Amount</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Grafika </td>
													<td>Concert</td>
													<td>50.000,00 IDR</td>
													<td>Paid</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Team Kita</td>
													<td>Short Film Competition</td>
													<td>100.000,00 IDR</td>
													<td>Registered</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Team Anda</td>
													<td>Short Film Competition</td>
													<td>100.000,00 IDR</td>
													<td>Paid</td>
												</tr>
												<tr>
													<td>4</td>
													<td>Denise</td>
													<td>Instagram Competition</td>
													<td>20.000,00 IDR</td>
													<td>Confirmed</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
        </div>
      </section>

    </div>

    <script type="text/javascript">
    $(function () {
		    Highcharts.chart('chart-container', {
		        chart: {
		            type: 'column'
		        },
		        title: {
		            text: 'Statistik Pendaftar'
		        },
		        subtitle: {
		            text: 'sumber : data panitia'
		        },
		        xAxis: {
		            categories: [
		                'Juli',
		                'Agustus',
		                'September',
		            ],
		            crosshair: true
		        },
		        yAxis: {
		            min: 0,
		            title: {
		                text: 'Jumlah Pendaftar'
		            }
		        },
		        tooltip: {
		            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
		            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
		                '<td style="padding:0"><b>{point.y:.0f} orang</b></td></tr>',
		            footerFormat: '</table>',
		            shared: true,
		            useHTML: true
		        },
		        plotOptions: {
		            column: {
		                pointPadding: 0.2,
		                borderWidth: 0
		            }
		        },
		        series: [{
		            name: 'Short Film Competition',
		            data: [20,20,10]

		        }, {
		            name: 'IG Competition',
		            data: [20,15,19]

		        }, {
		            name: 'Concert',
		            data: [30,5,0]

		        }, ]
		    });
		});
	</script>
@endsection
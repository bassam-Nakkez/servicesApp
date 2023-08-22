

@extends('layout')
@section('content')

				<!-- Page Content -->
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Admin!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-user"></i></span>
									<div class="dash-widget-info">
										<h3>{{$result['serviceProviderCount']}}</h3>
										<span>Service Provider</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-users"></i></span>
									<div class="dash-widget-info">
										<h3>{{ $result['userCount']}}</h3>
										<span>Customers</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-sitemap"></i></span>
									<div class="dash-widget-info">
										<h3>{{ $result['categoryrCount']}}</h3>
										<span>Categories</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="la la-gears"></i></span>
									<div class="dash-widget-info">
										<h3>{{$result['orderCount']}}</h3>
										<span>orders per week</span>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6 text-center">
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Total User</h3>
											<div id="bar-charts"></div>
										</div>
									</div>
								</div>
								<div class="col-md-6 text-center">
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Order Overview</h3>
											<div id="line-charts"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6 text-center d-flex">
									<div class="card flex-fill">
										<div class="card-body">
											<h3 class="card-title">Overview</h3>
											<canvas id="lineChart"></canvas>
										</div>
									</div>
								</div>
								<div class="col-md-6 d-flex">
									<div class="card flex-fill">
										<div class="card-body">
											<h3 class="card-title text-center">Latest Jobs</h3>
											<ul class="list-group">
											  	<li class="list-group-item list-group-item-action">Home Cleaning <span class="float-right text-sm text-muted">1 Hours ago</span></li>
											  	<li class="list-group-item list-group-item-action">Pipe repair <span class="float-right text-sm text-muted">1 Days ago</span></li>
											  	<li class="list-group-item list-group-item-action">Moving furniture<span class="float-right text-sm text-muted">2 Days ago</span></li>
											  	<li class="list-group-item list-group-item-action">Car Cleaning<span class="float-right text-sm text-muted">3 Days ago</span></li>
											  	<li class="list-group-item list-group-item-action">Baby sitter<span class="float-right text-sm text-muted">3 Days ago</span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>



					<div class="row">
						<div class="col-md-6 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Employment</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped custom-table mb-0 datatable">
											<thead>
												<tr >
													<th>#</th>
													<th>Customer</th>
													<th>ID</th>
													<th>Email</th>
													<th>phone</th>
													<th>Service</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Saly Sy</td>
													<td>CU-0002</td>
													<td>Saly541@gmail.com</td>
													<td>0962341749</td>
													<td>Teacher Farnce</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Saly Sy</td>
													<td>CU-0002</td>
													<td>Saly541@gmail.com</td>
													<td>0962341749</td>
													<td>Teacher Farnce</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Saly Sy</td>
													<td>CU-0002</td>
													<td>Saly541@gmail.com</td>
													<td>0962341749</td>
													<td>Teacher Farnce</td>
												</tr>
												<tr>
													<td>4</td>
													<td>Saly Sy</td>
													<td>CU-0002</td>
													<td>Saly541@gmail.com</td>
													<td>0962341749</td>
													<td>Teacher Farnce</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="Employment.html">View all Employment</a>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Reports</h3>
								</div>
								<div class="card-body">
									<div class="report">
										<div class="table-responsive">
											<table class="table table-striped custom-table mb-0 datatable">
												<thead>
													<tr >
														<th>#</th>
														<th>Customer</th>
														<th>ID</th>
														<th>Topic</th>
														<th>Service</th>
														<th>Created Date</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Abd alkhader</td>
														<td>CU-0002</td>
														<td>Service performed</td>
														<td>Home Cleanning</td>
														<td>17 Mar 2019</td>
													</tr>
													<tr>
														<td>2</td>
														<td>Soso sy</td>
														<td>CU-0001</td>
														<td>My Service provider</td>
														<td>Baby siter</td>
														<td>20 Mar 2019</td>
													</tr>
													<tr>
														<td>3</td>
														<td>Soso sy</td>
														<td>CU-0001</td>
														<td>My Service provider</td>
														<td>Baby siter</td>
														<td>20 Mar 2019</td>
													</tr>
													<tr>
														<td>4</td>
														<td>Soso sy</td>
														<td>CU-0001</td>
														<td>My Service provider</td>
														<td>Baby siter</td>
														<td>20 Mar 2019</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<a href="report.html">View all Report</a>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /Page Content -->
@endsection

@extends('layout');

@section('content');

				<!-- Page Content -->
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Reports</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active"> Reports</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<!-- Search Filter -->
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus select-focus">
								<select class="select floating">
									<option>Select Topic</option>
									<option>Service performed</option>
									<option>Schedule of realization</option>
									<option>loss / breakage / theft</option>
									<option>My Service provider</option>
									<option>Other</option>
								</select>
								<label class="focus-label">Topic</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">From</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">To</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<a href="#" class="btn btn-success btn-block"> Search </a>
						</div>
                    </div>

					<div class="row">
						<div class="col-md-12">
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
                                             @if ( $success)
                                             @foreach ($reports as $report )

												<td>{{$i++}}</td>
												<td>{{$report->empID}}</td>
												<td>{{$report->reportID}}</td>
												<td>{{$report->subject}}</td>
												<td>{{$report['service']}}</td>
												<td>{{$report->subject}}</td>
											</tr>
                                            @endforeach

                                            @endif

											{{-- <tr>
												<td>2</td>
												<td>Soso sy</td>
												<td>CU-0001</td>
												<td>My Service provider</td>
												<td>Baby siter</td>
												<td>20 Mar 2019</td>
											</tr> --}}
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->

@endsection

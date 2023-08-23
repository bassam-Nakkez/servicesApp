@extends('layout')
@section('content')

				<!-- Page Content -->
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Employment</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active"> Employment</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->


					<div class="row">
						<div class="col-md-12">
								<div class="table-responsive">
									<table class="table table-striped custom-table mb-0 datatable">
										<thead>
											<tr >
                                                <th>ID</th>
												<th>Customer</th>
												<th>Email</th>
												<th>phone</th>
												<th>Service</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach ( $emps as $emp )


											<tr>
												<td>{{$emp->id}}</td>
												<td>{{$emp->user->firstName . ' ' . $emp->user->lastName }}</td>
												<td>{{$emp->user->email}}</td>
												<td>{{$emp->user->phone}}</td>
												<td>{{$emp['categoryName']}}</td>
											</tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
							</div>
					</div>
                </div>
				<!-- /Page Content -->



@endsection

@extends('layout')

@section('content')


				<!-- Page Content -->
                <div class="content container-fluid">
					<!-- Page Header -->
					<div class="page-header">
						<div class="page-header">
							<div class="row align-items-center">
								<div class="col">
									<h3 class="page-title">Customers</h3>
									<ul class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
										<li class="breadcrumb-item active">Customers</li>
									</ul>
								</div>

							</div>
						</div>
					<!-- /Page Header -->

					<!-- Search Filter -->
                    <form action=" {{route('clinte.search')}}" method="GET">
                        @csrf
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<input type="text" class="form-control floating" name="Customer-id">
								<label class="focus-label">Customer ID</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<input type="text" class="form-control floating" name="Customer-name">
								<label class="focus-label">Customer Name</label>
							</div>
						</div>

						<div class="col-sm-6 col-md-3">
                            <button  class="btn btn-success btn-block" type="submit">Search</button>
						</div>
                    </div>
                </form>

					<!-- /Search Filter -->

					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th>Name</th>
											<th>Customer ID</th>
											<th> Email</th>
											<th>Mobile</th>
											<th class="text-nowrap">Join Date</th>
											<th>Block</th>
											{{-- <th class="text-right no-sort">Action</th> --}}
										</tr>
									</thead>
									<tbody>
                                        @foreach ($users as $user)
										<tr>
											<td>
												<h2 class="table-avatar">
													<a class="avatar"><img alt="" src="assets/img/profiles/avatar-25.jpg"></a>
													<a >{{ $user->firstName ." ". $user->lastName }} </a>
												</h2>
											</td>
											<td>{{ $user->userID }}</td>
											<td>{{ $user->email }}</td>
											<td>{{ $user->phone }}</td>
											<td>{{ date_format($user->created_at,'Y-m-d') }}</td>
											<td>
												<div class="col-md-10">
													<div class="onoffswitch">
														<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_hra" data-toggle="modal" data-target="#Block-User">
														<label class="onoffswitch-label" for="switch_hra">
															<span class="onoffswitch-inner"></span>
															<span class="onoffswitch-switch"></span>
														</label>
													</div>
												</div>
											</td>

											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
                                        @endforeach

									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->



				<!-- Delete Employee Modal -->
				<div class="modal custom-modal fade" id="delete_employee" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Customer</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Delete Employee Modal -->

				  <!-- Block  Modal -->
					<div class="modal custom-modal fade" id="Block-User" role="dialog">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-body">
									<div class="form-header">
										<h3>Block Costomer</h3>
										<p>Are you sure want to block?</p>
									</div>
									<div class="modal-btn delete-action">
										<div class="row">
											<div class="col-6">
												<a href="javascript:void(0);" class="btn btn-primary continue-btn">Block</a>
											</div>
											<div class="col-6">
												<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- <Script>
				$('#Block-User').on('hidden.bs.modal', function (e) {
					if (e.relatedTarget && e.relatedTarget.classList.contains('continue-btn')) {
						$('#switch_hra').prop('checked', true);
					} else {
						$('#switch_hra').prop('checked', false);
					}
				});</Script> -->

				<!-- /Block  Modal -->


@endsection


@extends('layout')
@section('content')

				<!-- Page Content -->
                <div class="content container-fluid">

					<!-- Page Header -->

						<div class="page-header">
							<div class="row align-items-center">
								<div class="col">
									<h3 class="page-title">Service Providers</h3>
									<ul class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
										<li class="breadcrumb-item active">Service Providers</li>
									</ul>
								</div>
								<div class="col-auto float-right ml-auto">
									<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Add Service Provider</a>
									<div class="view-icons">
										<a href="employees.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
										<a href="employees-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
									</div>
								</div>
							</div>
						</div>
					<!-- /Page Header -->

					<!-- Search Filter -->
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Service Provider ID</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Service Provider Name</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus select-focus">
								<select class="select floating">
									<option>Select Service</option>
									<option>home Cleaning </option>
									<option>Car Cleaning </option>
									<option>Teacher English</option>
									<option>Baby sitter</option>
								</select>
								<label class="focus-label">Services</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<a href="#" class="btn btn-success btn-block"> Search </a>
						</div>
                    </div>
					<!-- /Search Filter -->

					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th>Name</th>
											<th>Employee ID</th>
											<th> Email</th>
											<th>Mobile</th>
											<th class="text-nowrap">Join Date</th>
											<th>Block</th>
											<th class="text-right no-sort">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/Profile1.jpg"></a>
													<a href="profile.html">Ali salah <span>Home Cleaning</span></a>
												</h2>
											</td>
											<td>SP-0001</td>
											<td>alisalah12324@gmail.com</td>
											<td>9876543210</td>
											<td>1 Jan 2023</td>
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


										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/profile2.jpg"></a>
													<a href="profile.html">samer sleman <span>Pipe repair</span></a>
												</h2>
											</td>
											<td>SP-0002</td>
											<td>samersleman1232@gmail.com</td>
											<td>009876543210</td>
											<td>18 Mar 2023</td>
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
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>


									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->

					<!-- Add Employee Modal -->
					<div id="add_employee" class="modal custom-modal fade" role="dialog">
						<div class="modal-dialog modal-dialog-centered modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Add Service Provider</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-form-label">First Name </label>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-form-label">Last Name</label>
													<input class="form-control" type="text">
												</div>
											</div>

											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-form-label">Email </label>
													<input class="form-control" type="email">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-form-label">Password</label>
													<input class="form-control" type="password">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-form-label">Confirm Password</label>
													<input class="form-control" type="password">
												</div>
											</div>

											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-form-label">Phone </label>
													<input class="form-control" type="number">
												</div>
											</div>



											<div class="col-md-6">
												<div class="form-group">
													<label>Categories </label>
													<select class="select">
														<option>Select categorie</option>
														<option>Cleaning</option>
														<option>Courses</option>
														<option>Repair</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Services </label>
													<select class="select">
														<option>Select service</option>
														<option> Teacher Arabic </option>
														<option>Teacher English</option>
														<option>Home Cleanning</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-form-label">Joining Date </label>
													<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
												</div>
											</div>
										</div>

										<div class="submit-section">
											<button class="btn btn-primary submit-btn">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /Add Employee Modal -->
				<!-- Edit Employee Modal -->
				<div id="edit_employee" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Service Provider</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">First Name </span></label>
												<input class="form-control" value="Bassam" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Last Name</label>
												<input class="form-control" value="NKZ" type="text">
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Email </label>
												<input class="form-control" value="bassam@gmail.com" type="email">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Password</label>
												<input class="form-control" value="bassam nkz" type="password">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Confirm Password</label>
												<input class="form-control" value="bassam nkz" type="password">
											</div>
										</div>


										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Phone </label>
												<input class="form-control" value="0962341749" type="text">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>Categories </label>
												<select class="select">
													<option>Select categorie</option>
													<option>Cleaning</option>
													<option>Courses</option>
													<option>Repair</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Services </label>
												<select class="select">
													<option>Select service</option>
													<option>Teacher Arabic</option>
													<option>Teacher English</option>
													<option>Home Cleanning</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Joining Date </label>
												<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
											</div>
										</div>
									</div>

									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Employee Modal -->

				<!-- Delete Employee Modal -->
				<div class="modal custom-modal fade" id="delete_employee" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Service Provider</h3>
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
										<h3>Block Service Provider</h3>
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

				<!-- /Block  Modal -->

@endsection

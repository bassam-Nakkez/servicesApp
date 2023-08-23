@extends('layout');


@section('content')



				<!-- Page Content -->
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Employee Salary</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Salary</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_salary"><i class="fa fa-plus"></i> Add Salary</a>
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
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>Employee</th>
											<th>ID</th>
											<th>Categorie</th>
											<th>Service</th>
											<th>Salary</th>
											<th>Payslip</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($salaries as $salary)
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/Profile1.jpg"></a>
													<a href="profile.html">{{$salary->easer->firstName}}</a>
												</h2>
											</td>
											<td>{{$salary->easer->userID}}</td>
											<td>{{$salary->easer->category->label}}</td>
											<td>Home</td>
											<td>{{($salary->radioOfSalary==null)?"":$salary->radioOfSalary}} %</td>
											<td><a class="btn btn-sm btn-primary" href="{{route('showSalaryDetails',$salary->easer->userID)}}">Generate Slip</a></td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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

				<!-- Add Salary Modal -->
				<div id="add_salary" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-md">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Salary</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="{{route('addSalary')}}" method="POST">
									@csrf
									@method('POST')
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Service Provider</label>
											<input class="form-control" type="text" name="userID">
											</div>
										</div>
										<div class="col-sm-6">
											<label>Basic Salary</label>
											<input class="form-control" type="number" name="radioOfSalary">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<h4 class="text-primary">Earnings</h4>
										</div>
										<div class="col-sm-6">

											<div class="form-group">
												<label>living allowance</label>
												<input class="form-control" type="number" name="livingAllowance">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Conveyance</label>
												<input class="form-control" type="number" name="Conveyance">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>HRA</label>
												<input class="form-control" type="number" name="HRA">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Medical  Allowance</label>
												<input class="form-control" type="number" name="medicalAllowance">
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
				<!-- /Add Salary Modal -->

				<!-- Edit Salary Modal -->
				<div id="edit_salary" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-md" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Staff Salary</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Service Provider</label>
											<input class="form-control" type="text" value="Ali Salah">
											</div>
										</div>
										<div class="col-sm-6">
											<label>Basic Salary</label>
											<input class="form-control" type="number" value="20">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<h4 class="text-primary">Earnings</h4>
										</div>
										<div class="col-sm-6">

											<div class="form-group">
												<label>living allowance</label>
												<input class="form-control" type="number"value ="10">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Conveyance</label>
												<input class="form-control" type="number"value="5">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>HRA</label>
												<input class="form-control" type="number" value="10">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Medical  Allowance</label>
												<input class="form-control" type="number" value="15">
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
				<!-- /Edit Salary Modal -->

				<!-- Delete Salary Modal -->
				<div class="modal custom-modal fade" id="delete_salary" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Salary</h3>
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
				<!-- /Delete Salary Modal -->

    
@endsection

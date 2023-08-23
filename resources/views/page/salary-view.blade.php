@extends('layout')


@section('content')


				<!-- Page Content -->
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Payslip</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Payslip</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<div class="btn-group btn-group-sm">

									<button class="btn btn-white" onclick="printPage()"><i class="fa fa-print fa-lg"></i> Print</button>

								</div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<h4 class="payslip-title">Payslip for the month of  {{date('Y-m',time())}}</h4>
									<div class="row">
										<div class="col-sm-6 m-b-20">
											<img src="assets/img/logo.png" class="inv-logo" width="80" height="80" alt="">

										</div>
										<div class="col-sm-6 m-b-20">
											<div class="invoice-details">
												<h3 class="text-uppercase" style="text-align: right" >Payslip #{{rand(1000,9999)}}</h3>
												<ul class="list-unstyled" style="text-align: right">
													<li>Salary Month: <span>{{date('Y-m-d',time())}}</span></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 m-b-20">
											<ul class="list-unstyled">
												<li><h5 class="mb-0"><strong>{{$easer[0]->firstName}}</strong></h5></li>
												<li><span>{{$easer[0]->category->label}}</span></li>
												<li>{{$easer[0]->userID}}</li>
											</ul>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div>
												<h4 class="m-b-10"><strong>Earnings</strong></h4>
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td><strong>Basic Salary</strong> <span class="float-right">{{$salary}}</span></td>
														</tr>
														<tr>
															<td><strong>House Rent Allowance (H.R.A.)</strong> <span class="float-right">{{$easer[0]->salary->livingAllowance}}$</span></td>
														</tr>
														<tr>
															<td><strong>Conveyance</strong> <span class="float-right">{{$easer[0]->salary->Conveyance}}$</span></td>
														</tr>
														<tr>
															<td><strong>Medical Allowance</strong> <span class="float-right">{{$easer[0]->salary->HRA}}$</span></td>
														</tr>
														<tr>
															<td><strong>living allowance</strong> <span class="float-right">{{$easer[0]->salary->MedicalAllowance}}$</span></td>
														</tr>

														<tr style="background-color: #b5ff98">
															<td><strong>Total Earnings</strong> <span class="float-right"><strong>
															{{(int)$easer[0]->salary->livingAllowance+(int)$easer[0]->salary->Conveyance+(int)$easer[0]->salary->HRA+(int)$easer[0]->salary->MedicalAllowance+(int)$salary}}$</strong></span></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="col-sm-6">
											<div>
												<h4 class="m-b-10"><strong>Completed</strong></h4>
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td><strong>Number of Task </strong> <span class="float-right">{{$numberOfTasks}}</span></td>
														</tr>
														<tr>
															<td><strong>Ratio of Task </strong> <span class="float-right">{{$easer[0]->salary->radioOfSalary}}%</span></td>
														</tr>

													</tbody>
												</table>
											</div>
										</div>

									</div>
								</div>
								<script>
									function printPage() {
										var printContents = document.querySelector('.card').innerHTML;
										var originalContents = document.body.innerHTML;
										document.body.innerHTML = printContents;
										window.print();
										document.body.innerHTML = originalContents;
									}
								</script>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->


@endsection

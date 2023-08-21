
@extends('layout');

@section('content');

				<!-- Page Content -->
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Order</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Order</li>
								</ul>
							</div>

						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-lg-7 col-xl-8">
							<div class="card">
								<div class="card-body">
									<div class="project-title">
										<h4 class="card-title"> Service details</h4>
										<p>Surfaces and floors, sanitary facilities window cleaning,egarbage cans, maintenance of household appliances, washinf up... </p>
									</div>

									<div class="project-title">
										<h4 class="card-title">Customer's instructions</h4>
									</div>
										<p>you will find the key under the doorment, Attertion a dog is in the house </p>
										<div class="project-title">
											<h4 class="card-title">Customer's Review</h4>
										</div>
											<p>Ali was super nice with the kids! I am satisfied with his service </p>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
				                    <h5 class="card-title m-b-20">final debriefing</h5>
									<p>Everything went well </p>
									<div class="row">
										<div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
											<div class="uploaded-box">
												<div class="uploaded-img">
													<img src="assets/img/placeholder.jpg" class="img-fluid" alt="">
												</div>

											</div>
										</div>
										<div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
											<div class="uploaded-box">
												<div class="uploaded-img">
													<img src="assets/img/placeholder.jpg" class="img-fluid" alt="">
												</div>

											</div>
										</div>
										<div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
											<div class="uploaded-box">
												<div class="uploaded-img">
													<img src="assets/img/placeholder.jpg" class="img-fluid" alt="">
												</div>

											</div>
										</div>
										<div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
											<div class="uploaded-box">
												<div class="uploaded-img">
													<img src="assets/img/placeholder.jpg" class="img-fluid" alt="">
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-lg-4 col-xl-4">
							<div class="card">
								<div class="card-body">
									<h6 class="card-title m-b-15">Order details</h6>
									<table class="table table-striped table-border">
										<tbody>
											<tr>
												<td>Service :</td>
												<td class="text-right" >Home Cleaning</td>
											</tr>
											<tr>
												<td>Start : </td>
												<td  class="text-right">16:05</td>
											</tr>
											<tr>
												<td>End :</td>
												<td class="text-right">18:05</td>
											</tr>
											<tr>
												<td>Date :</td>
												<td class="text-right">12 Jun, 2019</td>
											</tr>
											<tr>
												<td>Address :</td>
												<td class="text-right">
													Damas,Almalky
												</td>
											</tr>
											<tr>
												<td>Request by :</td>
												<td class="text-right"><a href="clients-list.html">Soso Sy </a></td>
											</tr>
											<tr>
												<td>done by :</td>
												<td class="text-right"><a href="employees-list.html">Ali Salah </a></td>
											</tr>
											<tr>
												<td>Status :</td>
												<td class="text-right">Completed</td>
											</tr>
										</tbody>
									</table>
									<!-- <p class="m-b-5">Progress <span class="text-success float-right">40%</span></p> -->
									<div class="progress progress-xs mb-0">
										<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip"  style="width: 100%"></div>
									</div>
								</div>
							</div>

						</div>
					</div>
                </div>
				<!-- /Page Content -->



            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="assets/js/jquery-3.5.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>

		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>

		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>

		<!-- Summernote JS -->
		<script src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

    </body>
</html>


@endsection

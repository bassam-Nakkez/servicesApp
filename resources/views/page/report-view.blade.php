@extends('layout');

@section('content');
				<!-- Page Content -->
                <div class="content container-fluid">

					<!-- Page Header -->
                    <div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Report</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Report</li>
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
										<h4 class="card-title">Message : </h4>
										<!-- <small class="block text-ellipsis m-b-15"><span class="text-xs">2</span> <span class="text-muted">open tasks, </span><span class="text-xs">5</span> <span class="text-muted">tasks completed</span></small> -->
									</div>
									<p>
                                        {{-- Hello, I have a problem with the service, and it is the service provider that did the work. It was not completely done, and there were leaks and bad things in its work --}}
                                        {{$report->message}}
                                    </p>

								</div>
							</div>
							<div class="card">
								<div class="card-body">
				                    <h5 class="card-title m-b-20">Attached pictures</h5>
									<div class="row">
										<div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
											<div class="uploaded-box">
												<div class="uploaded-img">
													<img src="assets/img/screen.jpg" class="img-fluid" alt="" style="border-radius: 10px">
												</div>

											</div>
										</div>
										<div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
											<div class="uploaded-box">
												<div class="uploaded-img">
													<img src="assets/img/placeholder.jpg" class="img-fluid" alt=""style="border-radius: 10px">
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
											<div class="uploaded-box">
												<div class="uploaded-img">
													<img src="assets/img/placeholder.jpg" class="img-fluid" alt=""style="border-radius: 10px">
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
											<div class="uploaded-box">
												<div class="uploaded-img">
													<img src="assets/img/placeholder.jpg" class="img-fluid" alt=""style="border-radius: 10px">
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
									<h6 class="card-title m-b-15">Report details</h6>
									<table class="table table-striped table-border">
										<tbody>
											<tr>
												<td>Service :</td>
												<td class="text-right">Home Cleanning</td>
											</tr>
                                            <tr>
												<td>Topic :</td>
												<td class="text-right">{{$report->subject}}</td>
											</tr>
											<tr>
												<td>Provider :</td>
                                                <td class="text-right">
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-25.jpg"></a>
                                                        <a href="profile.html">Abd alkhader </a>
                                                    </h2>
                                                </td>

											</tr>
											<tr>
												<td>Date: </td>
												<td class="text-right">{{$report->created_at}}</td>
											</tr>

										</tbody>
									</table>
									<p class="m-b-5"> <span class="text-success float-right"></span></p>
									<div class="progress progress-xs mb-0">
										<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip"  style="width: 100%"></div>
									</div>
								</div>
							</div>

						</div>
					</div>
                </div>
				<!-- /Page Content -->


<<<<<<< Updated upstream
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
=======

>>>>>>> Stashed changes
@endsection

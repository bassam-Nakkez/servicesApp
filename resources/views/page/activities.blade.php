@extends('layout');

@section('content');

				<!-- Page Content -->
                <div class="content">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Activities</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Activities</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-md-12">
							<div class="activity">
								<div class="activity-box">
									<ul class="activity-list">
										<li>
											<div class="activity-user">
												<a href="profile.html" title="Lesley Grauer" data-toggle="tooltip" class="avatar">
													<img src="assets/img/profiles/Bassam.png" alt="">
												</a>
											</div>
											<div class="activity-content">
												<div class="timeline-content">
													<a href="profile.html" class="name">Bassam Nkz</a> Submit a complaint <a href="#">for service</a>
													<span class="time">4 mins ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="activity-user">
												<a href="profile.html" class="avatar" title="Jeffery Lalor" data-toggle="tooltip">
													<img src="assets/img/profiles/KH.png" alt="">
												</a>
											</div>
											<div class="activity-content">
												<div class="timeline-content">
													<a href="profile.html" class="name">Bassam Elkateb</a> Submit a complaint <a href="profile.html" class="name">for service</a> and <a href="profile.html" class="name">Tarah Shropshire</a> to project <a href="#">Patient appointment booking</a>
													<span class="time">6 mins ago</span>
												</div>
											</div>
										</li>

									</ul>
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

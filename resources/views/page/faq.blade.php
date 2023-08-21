
@extends('layout');

@section('content');

				<!-- Page Content -->
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">FAQ</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">FAQ</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_FAQ"><i class="fa fa-plus"></i> Add FAQ</a>

							</div>
						</div>
					</div>
					<!-- /Page Header -->

				    <h4 class="card-title">
							<div class="category-card" data-category="category1">
								Users
							</div>
							<div class="category-card" data-category="category2">
								Services
							</div>
							<div class="category-card" data-category="category3">
								Prices,Payments and billing
							</div>
					</h4>
					<div class="faq-card" style="display:none;">
							<div class="card"data-category="category1">
								<div class="card-header">
									<h4 class="card-title">
										<a class="collapsed" data-toggle="collapse" href="#collapseOne"> What is an Easer?</a>
									</h4>
								</div>
								<div id="collapseOne" class="card-collapse collapse">
									<div class="card-body">
										<p>	At Facilitateurdevies.com, the speakers are called
											"Easers" understand "facilitators". He is the trusted
											professional coming to your home to carry out various
											missions and make your life easier.
										</p>

									</div>
								</div>
							</div>


							<div class="card" data-category="category1">
								<div class="card-header">
										<h4 class="card-title">
											<a class="collapsed" data-toggle="collapse" href="#collapseTwo">What is the difference between an Easer Green, aEaser Clean and a Major?</a>
										</h4>
									</div>
									<div id="collapseTwo" class="card-collapse collapse">
										<div class="card-body">
											<!-- <p> sadasdqwd.</p> -->
										</div>
									</div>
						    </div>

					</div>
                </div>
				<!-- /Page Content -->
				<div id="add_FAQ" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add FAQ</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>

									<div class="form-group">
										<label>Topic </label>
										<input class="form-control" type="text">
									</div>
									<div class="form-group">
										<label>Question </label>
										<input class="form-control" type="text">
									</div>
									<div class="form-group">
										<label>Descrption</label>
										<textarea rows="6" class="form-control" placeholder="Enter your message here"></textarea>
									</div>






									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
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

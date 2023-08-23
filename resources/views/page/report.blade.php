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
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
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
                                            @php
                                                $i=0;
                                            @endphp
                                            @foreach ($reports as $report)
                                            <tr>
												<td>{{ $i+1 }}</td>
												<td>{{ $report->order->user->firstName }}</td>
												<td>{{ $report->doOrderID }}</td>
												<td>Service performed</td>
												<td>{{ $report->order->line[0]->product->category->label }}</td>
												<td>{{ date('Y-m-d',(int)$report->order->date) }}</td>
											</tr>
                                            @php
                                                $i++;
                                            @endphp
                                            @endforeach
										</tbody>
									</table>
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

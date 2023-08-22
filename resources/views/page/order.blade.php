<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Facilitation</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href={{ asset("assets/css/bootstrap.min.css") }}>

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href={{ asset("assets/css/font-awesome.min.css") }}>

		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href= {{ asset("assets/css/line-awesome.min.css") }}>

		<!-- Summernote CSS -->
		<link rel="stylesheet" href={{ asset("assets/plugins/summernote/dist/summernote-bs4.css") }}>
		<!-- Datatable CSS -->
		<link rel="stylesheet" href={{ asset("assets/css/dataTables.bootstrap4.min.css") }}>

		<!-- Select2 CSS -->
		<link rel="stylesheet" href={{ asset("assets/css/select2.min.css") }}>

		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href={{ asset("assets/css/bootstrap-datetimepicker.min.css") }}>

		<!-- Main CSS -->
        <link rel="stylesheet" href={{ asset("assets/css/style.css") }}>


    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">

			<!-- Header -->
            <div class="header">

				<!-- Logo -->
                <div class="header-left">
                    <a href="index.html" class="logo">
						<img src="assets/img/logo.png" width="40" height="40" alt="">
					</a>
                </div>
				<!-- /Logo -->

				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>

				<!-- Header Title -->
                <div class="page-title-box">
					<h3>Facilitation</h3>
                </div>
				<!-- /Header Title -->

				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

				<!-- Header Menu -->
				<ul class="nav user-menu">



					<!-- Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i> <span class="badge badge-pill">2</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="assets/img/profiles/Bassam.png">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Bassam Nkz</span> Submit a complaint <span class="noti-title">for service</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="assets/img/profiles/KH.png">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Bassam Elkateb</span> Submit a complaint <span class="noti-title">for service</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>

								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.html">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="assets/img/profiles/Hazam.png" alt="">
							<span class="status online"></span></span>
							<span>Admin</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="profile.html">My Profile</a>
							<a class="dropdown-item" href="settings.html">Settings</a>
							<a class="dropdown-item" href="login.html">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->

				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="settings.html">Settings</a>
						<a class="dropdown-item" href="login.html">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->

            </div>
			<!-- /Header -->

			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title">
								<span>SPS</span>
							</li>
							<li>
								<a href="index.html"><i class="la la-dashboard"></i> <span> Dashboard</span></a>
							</li>

							<li class="submenu">
								<a href="#" class="noti-dot"><i class="la la-user"></i> <span> Users </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a  href="employees.html">Service Provider </a></li>
									<li><a href="clients-list.html">Customers</a></li>

								</ul>
							</li>

							<li class="submenu">
								<a href="#"><i class="la la-gears"></i> <span> Categories Services </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="categories.html">Categories</a></li>
									<li><a href="services.html">Services</a></li>

								</ul>
							</li>
							<li class="active" >
								<a href="order.html"><i class="la la-cart-arrow-down"></i> <span>Order</span></a>
							</li>

							<li>
								<a href="salary.html"><i class="la la-money"></i> <span>Salary</span></a>
							</li>
							<li>
								<a href="Employment.html"><i class="la la-briefcase"></i> <span>Employment Requests</span></a>
							</li>
							<li>
								<a href="report.html"><i class="la la-pie-chart"></i> <span>Reports</span></a>
							</li>
							<li>
								<a href="activities.html"><i class="la la-bell"></i> <span>Activities</span></a>
							</li>
							<li>
								<a href="company_info.html"><i class="la la-cog"></i> <span>Company Settings</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-question"></i> <span> Help </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">

									<li><a href="faq.html"> FAQ </a></li>
									<li><a href="terms.html"> Terms </a></li>
									<li><a href="privacy-policy.html"> Privacy Policy </a></li>

								</ul>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->

			<!-- Page Wrapper -->
            <div class="page-wrapper">

				<!-- Page Content -->
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Orders</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Orders</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<!-- Search Filter -->
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Order Name</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Provider Name</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">Date</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<a href="#" class="btn btn-success btn-block"> Search </a>
						</div>
                    </div>
					<!-- Search Filter -->
					<div class="project-task">
						<ul class="nav nav-tabs nav-tabs-top nav-justified mb-0">
							<li class="nav-item"><a class="nav-link active" href="{{ route('showOrders') }}" data-toggle="tab" aria-expanded="true">All Tasks</a></li>
							<li class="nav-item"><a class="nav-link" href="#pending_tasks" data-toggle="tab" aria-expanded="false">Pending Tasks</a></li>
							<li class="nav-item"><a class="nav-link" href="#completed_tasks" data-toggle="tab" aria-expanded="false">Completed Tasks</a></li>
						</ul>
                        @foreach ($orders as $order)
						<div class="tab-content">
							<div class="tab-pane show active" id="all_tasks">
								<div class="task-wrapper">
									<div class="task-list-container">
										<div class="row">
											<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
												<div class="card">
													<div class="card-body">

														<h4 class="project-title"><a href="{{ route('showOrderDetails',$order->orderID) }}">{{ $order->line[0]->product->lable }}</a></h4>
														<small class="block text-ellipsis m-b-15">
															<span class="text-xs">Date</span> <span class="text-muted">{{  date('Y-m-d', (int)$order->date)}}  </span>

														</small>
														<p class="text-muted">
                                                            {{ $order->line[0]->product->description }}
														</p>
														<div class="pro-deadline m-b-15">
															<div class="sub-title">
																Customer :
															</div>
															<div class="text-muted">
																{{ $order->user->firstName }}
															</div>
														</div>
														<div class="project-members m-b-15">
															<div>Provider :</div>
															<div class="activity-user">
																<td class="text-right">
																	<h2 class="table-avatar">

																		<a href="profile.html"  class="avatar"><img alt="" src="assets/img/profiles/avatar-25.jpg"></a></li>
																		<a href="profile.html"><span class="small-name">{{ $order->employ->firstName }}</span></a> <!-- Add this line -->
																	</h2>
																</td>
															</div>
														</div>
														{{-- <p class="m-b-5">Rating : </p>
														<div class="rating">
															<span class="star" data-value="1">☆</span>
															<span class="star" data-value="2">☆</span>
															<span class="star" data-value="3">☆</span>
															<span class="star" data-value="4">☆</span>
															<span class="star" data-value="5">☆</span> --}}
														</div>

														<!-- <p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
														<div class="progress progress-xs mb-0">
															<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
														</div> -->
													</div>
												</div>
											</div>
                         @endforeach


								<section class="comp-section" id="comp_pagination">
										<div class="row">
										<div class="col">
											<h4>Showing 1 to 6 of 6 entries</h4>
										</div>
										<div class="col">
											<div class="pagination-box" style="text-align: right;">
											<div>
												<ul class="pagination" style="display: flex; justify-content: flex-end;">
												<li class="page-item disabled">
													<a class="page-link" href="#" tabindex="-1">Previous</a>
												</li>
												<li class="page-item active"><a class="page-link" href="#">1</a></li>
												<li class="page-item">
													<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
												</li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item">
													<a class="page-link" href="#">Next</a>
												</li>
												</ul>
											</div>
											</div>
										</div>
										</div>
								</section>

								<!-- /Pagination -->
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

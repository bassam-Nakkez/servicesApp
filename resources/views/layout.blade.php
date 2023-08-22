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
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo.png') }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

<!-- Lineawesome CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">

<!-- Summernote CSS -->
<link rel="stylesheet" href="{{ asset('assets/plugins/summernote/dist/summernote-bs4.css') }}">
<!-- Datatable CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">

<!-- Select2 CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">

<!-- Datetimepicker CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

<!-- Main CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


    </head>
    <body>
<!-- Main Wrapper -->
<div class="main-wrapper">

	<!-- Header -->
	<div class="header">

		<!-- Logo -->
		<div class="header-left">
			<a href="index.html" class="logo">
				<img src="{{ asset('assets/img/logo.png') }}" width="40" height="40" alt="">
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
											<img alt="" src="{{ asset('assets/img/profiles/Bassam.png') }}">
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
											<img alt="" src="{{ asset('assets/img/profiles/KH.png') }}">
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
					<span class="user-img"><img src="{{ asset('assets/img/profiles/Hazam.png') }}" alt="">
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
              <li><a href="employees.html">Service Provider </a></li>
              <li><a href="{{route('clinte.index')}}">Customers</a></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="#"><i class="la la-gears"></i> <span> Categories Services </span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
              <li ><a href="{{route('categories.index')}}">Categories</a></li>
              <li ><a href="services.html">Services</a></li>
            </ul>
          </li>
          <li>
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
          <li class="active">
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

                           @yield('content');


				<!-- /Page Content -->

            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="{{ asset('assets/assets/js/jquery-3.5.1.min.js') }}"></script>

<!-- Bootstrap Core JS -->
<script src="{{ asset('assets/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/assets/js/bootstrap.min.js') }}"></script>

<!-- Slimscroll JS -->
<script src="{{ asset('assets/assets/js/jquery.slimscroll.min.js') }}"></script>

<!-- Select2 JS -->
<script src="{{ asset('assets/assets/js/select2.min.js') }}"></script>

<!-- Datetimepicker JS -->
<script src="{{ asset('assets/assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/assets/js/bootstrap-datetimepicker.min.js') }}"></script>

<!-- Datatable JS -->
<script src="{{ asset('assets/assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/assets/js/dataTables.bootstrap4.min.js') }}"></script>

<!-- Summernote JS -->
<script src="{{ asset('assets/assets/plugins/summernote/dist/summernote-bs4.min.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/assets/js/app.js') }}"></script>

    </body>
</html>

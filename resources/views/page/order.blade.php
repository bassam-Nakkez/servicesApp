
@extends('layout')
@section('content')
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
    @endsection

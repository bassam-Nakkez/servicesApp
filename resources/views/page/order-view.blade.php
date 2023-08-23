
@extends('layout')

@section('content')

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
										<p>{{ $order->line[0]->product->description }}</p>
									</div>

									<div class="project-title">
										<h4 class="card-title">Customer's instructions</h4>
									</div>
										<p>{{ ($order->note_public!=null)?$order->note_public:" " }} </p>
										<div class="project-title">
											<h4 class="card-title">Customer's Review</h4>
										</div>
											<p> </p>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
				                    <h5 class="card-title m-b-20">final debriefing</h5>
				                    <h5 class="card-title m-b-20">report befor</h5>
									<p>{{ $order->doOrder->message }} </p>
                                    <h5 class="card-title m-b-20">report After</h5>
									<p>{{ $order->doOrder->messageAfter }} </p>
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
												<td class="text-right" >{{ $order->line[0]->product->lable }}</td>
											</tr>
											<tr>
												<td>Start : </td>
												<td  class="text-right">{{ date('H:i',$order->line[0]->dateStart) }}</td>
											</tr>
											<tr>
												<td>End :</td>
												<td class="text-right">{{ date('H:i',$order->line[0]->dateEnd) }}</td>
											</tr>
											<tr>
												<td>Date :</td>
												<td class="text-right">{{ date('Y-m-d', (int)$order->date) }}</td>
											</tr>
											<tr>
												<td>Address :</td>
												<td class="text-right">
													Damas,Almalky
												</td>
											</tr>
											<tr>
												<td>Request by :</td>
												<td class="text-right"><a href="clients-list.html">{{ $order->user->firstName }} </a></td>
											</tr>
											<tr>
												<td>done by :</td>
												<td class="text-right"><a href="employees-list.html">{{ $order->employ->firstName }} </a></td>
											</tr>
											<tr>
												<td>Status :</td>
												<td class="text-right">{{ ($order->status)?"Completed":"onprocess" }}</td>
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




@endsection

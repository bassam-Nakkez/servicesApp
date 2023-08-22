@extends('layout');

@section('content');


				<!-- Page Content -->
                <div class="content container-fluid">

					<div class="row">
						<div class="col-sm-12">
							<div class="file-wrap">
								<div class="file-sidebar">
									<div class="file-header justify-content-center">
										<span>Categories</span>
										<a href="javascript:void(0);" class="file-side-close"><i class="fa fa-times"></i></a>
									</div>
									<form class="file-search">
										<div class="input-group">
											<div class="input-group-prepend">
												<i class="fa fa-search"></i>
											</div>
											<input type="text" class="form-control" placeholder="Search">
										</div>
									</form>
									<div class="file-pro-list">
										<div class="file-scroll">
											<ul class="file-menu">
												<li >
													<a href="#">All Service</a>
												</li>
												<li>
													<a href="#">Cleanings</a>
												</li>
												<li>
													<a href="#">Maintenance</a>
												</li>
												<li>
													<a href="#">Education</a>
												</li>
												<li>
													<a href="#">Transfer</a>
												</li>
											</ul>
											<div class="show-more">
												<a href="#">Show More</a>
											</div>
										</div>
									</div>
								</div>
								<div class="file-cont-wrap">
									<div class="file-cont-inner">
										<div class="file-cont-header">
											<div class="file-options">
												<a href="javascript:void(0)" id="file_sidebar_toggle" class="file-sidebar-toggle">
													<i class="fa fa-bars"></i>
												</a>
											</div>
											<span>Services</span>
											<a href="#" class="btn-add" data-toggle="modal" data-target="#add_service"><i class="fa fa-plus"></i></a>
										</div>
										<div class="file-content">
											<form class="file-search">
												<div class="input-group">
													<div class="input-group-prepend">
														<i class="fa fa-search"></i>
													</div>
													<input type="text" class="form-control" placeholder="Search">
												</div>
											</form>
											<div class="file-body">
												<div class="file-scroll">
													<div class="file-content-inner">
														<!-- <h4>Recent Service</h4> -->
														<br>
														<div class="row row-sm">
															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_service"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_service"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																	  <div class="welcome-img"  >
																		<img alt="" src="assets/img/profiles/KH.png"  >
																	  </div>
																    </div>
																	<div class="card-body">
																		<h6>teacher English</h6>
																	</div>
																	<div class="card-footer">
																		<span class="d-none d-sm-inline">Price: </span><span>100$</span>
																	</div>
																</div>
															</div>

															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_service"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_service"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																	  <div class="welcome-img"  >
																		<img alt="" src="assets/img/profiles/KH.png"  >
																	  </div>
																    </div>
																	<div class="card-body">
																		<h6>teacher English</h6>
																	</div>
																	<div class="card-footer">
																		<span class="d-none d-sm-inline">Price: </span><span>100$</span>
																	</div>
																</div>
															</div>
															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_service"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_service"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																	  <div class="welcome-img"  >
																		<img alt="" src="assets/img/profiles/KH.png"  >
																	  </div>
																    </div>
																	<div class="card-body">
																		<h6>teacher English</h6>
																	</div>
																	<div class="card-footer">
																		<span class="d-none d-sm-inline">Price: </span><span>100$</span>
																	</div>
																</div>
															</div>

															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_service"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_service"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																	  <div class="welcome-img"  >
																		<img alt="" src="assets/img/profiles/KH.png"  >
																	  </div>
																    </div>
																	<div class="card-body">
																		<h6>teacher English</h6>
																	</div>
																	<div class="card-footer">
																		<span class="d-none d-sm-inline">Price: </span><span>100$</span>
																	</div>
																</div>
															</div>

														</div>

														<!-- <h4>Files</h4> -->
														<div class="row row-sm">
															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_service"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_service"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																	  <div class="welcome-img"  >
																		<img alt="" src="assets/img/profiles/KH.png"  >
																	  </div>
																    </div>
																	<div class="card-body">
																		<h6>teacher English</h6>
																	</div>
																	<div class="card-footer">
																		<span class="d-none d-sm-inline">Price: </span><span>100$</span>
																	</div>
																</div>
															</div>

															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_service"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_service"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																	  <div class="welcome-img"  >
																		<img alt="" src="assets/img/profiles/KH.png"  >
																	  </div>
																    </div>
																	<div class="card-body">
																		<h6>teacher English</h6>
																	</div>
																	<div class="card-footer">
																		<span class="d-none d-sm-inline">Price: </span><span>100$</span>
																	</div>
																</div>
															</div>

															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a href="#" class="dropdown-item">Edit</a>
																			<a href="#" class="dropdown-item">Delete</a>

																		</div>
																	</div>
																	<div class="card-file-thumb">
																	  <div class="welcome-img"  >
																		<img alt="" src="assets/img/profiles/KH.png"  >
																	  </div>
																    </div>
																	<div class="card-body">
																		<h6>teacher English</h6>
																	</div>
																	<div class="card-footer">
																		<span class="d-none d-sm-inline">Price: </span><span>100$</span>
																	</div>
																</div>
															</div>

															<div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3">
																<div class="card card-file">
																	<div class="dropdown-file">
																		<a href="" class="dropdown-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_service"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_service"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
																		</div>
																	</div>
																	<div class="card-file-thumb">
																	  <div class="welcome-img"  >
																		<img alt="" src="assets/img/profiles/KH.png"  >
																	  </div>
																    </div>
																	<div class="card-body">
																		<h6>teacher English</h6>
																	</div>
																	<div class="card-footer">
																		<span class="d-none d-sm-inline">Price: </span><span>100$</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

                </div>
				<!-- /Page Content -->

						<!-- Add Service -->
						<div id="add_service" class="modal custom-modal fade" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-md">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Add Service </h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form>
											<div class="form-group">
												<img src="assets/img/placeholder.jpg" alt="Profile" id="profile-image" style="height:150px; width:150px; border-radius: 5px; border:2px solid white">
												<input type="file" id="image-file" style="display:none">

											</div>

											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label class="col-form-label">Service Name </label>
														<input class="form-control" type="text">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label class="col-form-label">Price</label>
														<input class="form-control" type="number">
													</div>
												</div>

												<div class="col-sm-6">
													<div class="form-group">
														<label class="col-form-label">PriceMin  </label>
														<input class="form-control" type="number">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Categories </label>
														<select class="select">
															<option>Select categorie</option>
															<option>Cleaning</option>
															<option>Courses</option>
															<option>Repair</option>
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<label for="color-picker">Choose color</label>
													<input class="form-control" type="color" id="color-picker" value="#ffffff">

												</div>
												<div class="col-md-6">
													<label for="color-value"> Color Value </label>
													<input class="form-control" type="text" id="color-value" readonly>
												</div>

											</div>
											<br>
											<div class="form-group">
												<label class="col-form-label">Condition</label>
												<textarea rows="4" class="form-control" placeholder="Enter your message here"></textarea>
											</div>

											<div class="submit-section">
												<button class="btn btn-primary submit-btn">Submit</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

						<!-- /Add Employee Modal -->
					<!-- Edit Employee Modal -->
					<div id="edit_service" class="modal custom-modal fade" role="dialog">
						<div class="modal-dialog modal-dialog-centered modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Edit Service </h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<img src="assets/img/profiles/Profile1.jpg" alt="Profile" id="profile-image" style="height:150px; width:150px; border-radius: 5px; border:2px solid white">
											<input type="file" id="image-file" style="display:none">

										</div>

										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-form-label">Service Name </label>
													<input class="form-control" type="text" value="Home Cleanning">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-form-label">Price</label>
													<input class="form-control" type="number" value="50">
												</div>
											</div>

											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-form-label">PriceMin  </label>
													<input class="form-control" type="number"value="25">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Categories </label>
													<select class="select" >
														<option>Select categorie</option>
														<option>Cleaning</option>
														<option>Courses</option>
														<option>Repair</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<label for="color-picker">Choose color</label>
												<input class="form-control" type="color" id="color-picker" value="#ffffff">

											</div>
											<div class="col-md-6">
												<label for="color-value"> Color Value </label>
												<input class="form-control" type="text" id="color-value" readonly>
											</div>

										</div>
										<br>
										<div class="form-group">
											<label class="col-form-label">Condition</label>
											<textarea rows="4" class="form-control" placeholder="Enter your message here">AASDWWWW</textarea>
										</div>

										<div class="submit-section">
											<button class="btn btn-primary submit-btn">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /Edit Employee Modal -->

					<!-- Delete Employee Modal -->
					<div class="modal custom-modal fade" id="delete_service" role="dialog">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-body">
									<div class="form-header">
										<h3>Delete Service </h3>
										<p>Are you sure want to delete?</p>
									</div>
									<div class="modal-btn delete-action">
										<div class="row">
											<div class="col-6">
												<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
											</div>
											<div class="col-6">
												<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Delete Employee Modal -->
            </div>

@endsection

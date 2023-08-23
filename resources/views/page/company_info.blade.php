@extends('layout')
@section('content')


				<!-- Page Content -->
                <div class="content container-fluid">
					<div class="row">
						<div class="col-md-8 offset-md-2">

							<!-- Page Header -->
							<div class="page-header">
								<div class="row">
									<div class="col-sm-12">
										<h3 class="page-title">Company Settings</h3>
									</div>
								</div>
							</div>
							<!-- /Page Header -->

							<form>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Company Name </label>
											<input class="form-control" type="text" value="Facilitation">
										</div>
									</div>

								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label>Address</label>
											<input class="form-control " value="SYR.Damascus.Malky.Al-Khatib" type="text">
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="form-group">
											<label>Country</label>
											<input class="form-control" value="SYR" type="text">
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="form-group">
											<label>City</label>
											<input class="form-control" value="Damascus" type="text">
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="form-group">
											<label>Regions</label>
											<input class="form-control" value="Malky" type="text">
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="form-group">
											<label>Street</label>
											<input class="form-control" value="Al-Khatib" type="text">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Email</label>
											<input class="form-control" value="Facilitation@Company.com" type="email">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Phone Number</label>
											<input class="form-control" value="0115133146" type="number">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Start of Work</label>
											<input class="form-control" value="9 AM" type="time">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>End of Work</label>
											<input class="form-control" value="5 PM" type="time">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label>Descrption</label>
											<textarea rows="6" class="form-control"  >You are welcome to our company. We aim to create a pleasant and strong work environment between the service provider and the clients. We have many services and suppliers that are able to meet the demands of our customers </textarea>
										</div>
									</div>
								</div>
								<div class="submit-section">
									<button class="btn btn-primary submit-btn">Save</button>
								</div>
							</form>
						</div>
					</div>
                </div>
				<!-- /Page Content -->

@endsection

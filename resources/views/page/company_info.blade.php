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
										<h3 class="page-title">company Settings</h3>
									</div>
								</div>
							</div>
							<!-- /Page Header -->

							{{-- <form action="{{route('companyInfo.update')}}" method="GET"> --}}
                                <form>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label> Name </label>
											<input class="form-control" name="firstName" type="text" value="{{ $company[0]->firstName}}">
										</div>
									</div>

								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label>Address</label>
											<input class="form-control " name="address"  type="text" value="{{$company[0]->address}}">
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="form-group">
											<label>Country</label>
											<input class="form-control"  name="country" type="text" value="{{$company[0]->country}}">
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="form-group">
											<label>City</label>
											<input class="form-control"  type="text" value="{{$company[0]->city}}">
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="form-group">
											<label>Regions</label>
											<input class="form-control" value="{{$company[0]->regioms}}" type="text">
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="form-group">
											<label>Street</label>
											<input class="form-control" value="{{$company[0]->street}}" type="text">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Email</label>
											<input class="form-control" value="{{$company[0]->email}}" type="email">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Phone Number</label>
											<input class="form-control" value="{{$company[0]->phone}}" type="number">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Start of Work</label>
											<input class="form-control" value="{{$company[0]->startWork}}" type="time">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>End of Work</label>
											<input class="form-control" value="{{$company[0]->endWork}}" type="time">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label>Descrption</label>
											<textarea rows="6" class="form-control"  >{{$company[0]->descrpition}} </textarea>
										</div>
									</div>
								</div>
								<div class="submit-section">
									<button type="submit" class="btn btn-primary submit-btn">Save</button>
								</div>
							</form>
						</div>
					</div>
                </div>
				<!-- /Page Content -->

@endsection

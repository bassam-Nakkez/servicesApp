@extends('layout')


@section('content')

				<script>
						$(document).ready(function(){
							$('#edit-form').on('submit', function(e){
								e.preventDefault();
								$.ajax({
									type: 'POST',
									url: $(this).attr('action'),
									data: $(this).serialize(),
									success: function(response){
										// update the row in the table based on the response
									}
								});
							});
						});
						function editId(id, name, color, image){
						document.getElementById('Category_id').value = id;
						document.getElementById('edit-profile-image').src = image;
						document.querySelector('input[name="label"]').value = label;
						document.getElementById('edit-color-picker').value = color;
					}


				</script>
			<script>
				function saveId(id){
					var id = id;
					localStorage.setItem('id' , id);
					document.getElementById('Category_id').value = id;
					return false;
				}

			</script>
		  <div class="page-wrapper">

				<!-- Page Content -->
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Categories</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Categories</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_department"><i class="fa fa-plus"></i> Add Category</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-md-12">
							<div>
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th style="width: 30px;">#</th>
											<th>Category Name</th>
											<th>Color</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>

											@foreach ($categories as $category )

											<tr>
												<td >{{$category->categoryID}}</td>
												<td>{{$category->label}}</td>
												<td>{{$category->color}}</td>
												<td class="text-right">
												<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_category" onclick="editId({{$category->categoryID}}, '{{$category->label}}', '{{$category->color}}', '{{$category->image}}')"><i class="fa fa-pencil m-r-5"></i> Edit</a>

														<a class="dropdown-item" href="#" data-toggle="modal"
														data-target="#delete_category" onclick="saveId({{$category->categoryID}})"><i
																class="fa fa-trash-o m-r-5"></i>Delete</a>
													</div>
													</div>
												</td>
											</tr>

											@endforeach
										<tr>

									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->


				<div class="modal custom-modal fade" id="delete_category" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Category </h3>
									<p>Are you sure want to delete? </p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" class="btn btn-primary continue-btn" href="{{ route('categories.delete') }}"
											   onclick="event.preventDefault();
														 document.getElementById('delete-Category-form').submit();">Delete</a>

											<form id="delete-Category-form" action="{{ route('categories.delete') }}" method="GET" class="d-none">
												@csrf
												@method('DELETE')
												<input name="Category_id" id="Category_id" type="hidden" >

											</form>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-dismiss="modal"
												class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- edit -->

				<div id="edit_category" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<!-- ... -->
							<div class="modal-body">
								<form id="edit-form" action="{{route('categories.edit')}}" method="POST">
									@csrf
									<input type="hidden" name="Category_id" id="Category_id">
									<!-- ... -->
									<div class="form-group">

										<img src="assets/img/profiles/Profile1.jpg" alt="Profile" id="edit-profile-image" style="height:150px; width:150px; border-radius: 5px; border:2px solid white; ">
										<input type="file" id="edit-image-file" style="display:none">

								</div>
								<div class="form-group">
									<label>Category Name </label>
									<input class="form-control"  type="text" value="Cleanings">
								</div>

								<div class="row">
									<div class="col-md-6">
										<label for="color-picker">Choose color</label>
										<input class="form-control"  type="color" id="edit-color-picker" value="#ffffff">

									</div>
									<div class="col-md-6">
										<label for="color-value"> Color Value </label>
										<input class="form-control" type="text" id="edit-color-value" readonly>
									</div>
								</div>
								<div class="submit-section">
									<button class="btn btn-primary submit-btn">Save</button>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>



            </div>
@endsection











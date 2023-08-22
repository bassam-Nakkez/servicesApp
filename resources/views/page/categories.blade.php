@extends('layout');
@section('content');


@if(isset($test))
    @foreach($test as $item)
      <h1>  {{ $item }} </h1>
    @endforeach
@endif






{{--

<script>
    function saveId(id){
        var id = id;
        localStorage.setItem('id' , id);
        document.getElementById('job_id').value = id;
        return false;
    }
</script> --}}


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

                                        @foreach ($categories as $category )

										<tr>
											<td>{{$category->categoryID}}</td>
											<td>{{$category->lable}}</td>
                                            <td>{{$category->color}}</td>
											<td class="text-right">
                                            <div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_department" onclick="save({{$category->categoryID}})"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_department"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
												</div>
											</td>
										</tr>
                                        		<!-- Edit Department Modal -->
				<div id="edit_department" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Category</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">


								<form action="{{route('categories.edit' , $category->categoryID)}}" method="POST">

									<div class="form-group">

											<img src="{{asset('assets/img/profiles/Profile1.jpg')}} " alt="Profile" id="edit-profile-image" style="height:150px; width:150px; border-radius: 5px; border:2px solid white; ">
											<input type="file" id="edit-image-file" name="photo" style="display:none">

									</div>
									<div class="form-group">
										<label>Category Name </label>
										<input class="form-control" type="text" name="categoryName" value="Cleanings">
									</div>

                                    <input type="hidden" name="job_id" id="job_id" >

									<div class="row">
										<div class="col-md-6">
											<label for="color-picker">Choose color</label>
											<input class="form-control" name="categoryColor" type="color" id="edit-color-picker" value="#ffffff">

										</div>
										<div class="col-md-6">
											<label for="color-value"> Color Value </label>
											<input class="form-control" type="text" id="edit-color-value" readonly>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn" >Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Department Modal -->



				<!-- Delete Department Modal -->
				<div class="modal custom-modal fade" id="delete_department" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Category </h3>
									<p>Are you sure want to delete? ======</p>
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
				<!-- /Delete Department Modal -->

                                        @endforeach

									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>

				<!-- /Page Content -->


		{{-- <!-- Add Department Modal -->
                    <div id="add_department" class="modal custom-modal fade" role="dialog">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form   action="{{route('categories.edit')}}" method="POST"  >

                                        <div class="form-group">
                                            <img src="{{asset('assets/img/placeholder.jpg')}}" alt="Profile" id="profile-image" style="height:150px; width:150px; border-radius: 5px; border:2px solid white">
                                            <input type="file" id="image-file" style="display:none">

                                        </div>
                                        <div class="form-group">
                                            <label>Category Name </label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="color-picker">Choose color</label>
                                                <input class="form-control" type="color" id="color-picker" value="#ffffff">

                                            </div>
                                            <div class="col-md-6">
                                                <label for="color-value"> Color Value </label>
                                                <input class="form-control" type="text" id="color-value" readonly>
                                            </div>
                                        </div>


                                        <div class="submit-section">
                                            <button class="btn btn-primary submit-btn">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
    <!-- /Add Department Modal --> --}}



            </div>
			<!-- /Page Wrapper -->

</div>

<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>

<!-- Bootstrap Core JS -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- Slimscroll JS -->
<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

<!-- Select2 JS -->
<script src="{{ asset('assets/js/select2.min.js') }}"></script>

<!-- Datetimepicker JS -->
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>

<!-- Datatable JS -->
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>

<!-- Summernote JS -->
<script src="{{ asset('assets/plugins/summernote/dist/summernote-bs4.min.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/js/app.js') }}"></script>

    </body>
</html>

@endsection

@extends('layout')

@section('content')


<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-4">
                            <h3 class="page-title">Add SubTask  </h3>
                        </div>
                    </div>
                </div>


                <form action="{{ route('storeTask') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>label</label>
                            <input class="form-control" type="text" name="label">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label>color</label>
                            <input class="form-control" type="text" name="color">
                        </div>
                        <div class="col-sm-6">
                            <input class="form-control" type="hidden" name="fk_parent" value="{{ $id }}">
                        </div>
                    </div>

                   <div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label>Descrption</label>
											<textarea rows="4" class="form-control"  name="description"></textarea>
										</div>
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

@endsection

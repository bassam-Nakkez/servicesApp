
@extends('layout')
@section('content');
<div class="">

<form  method="POST">

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
@endsection

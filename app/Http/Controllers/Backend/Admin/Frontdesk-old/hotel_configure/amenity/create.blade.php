@extends('backend.master')
@section('title',"Create Amenity")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Create Amenities</h1>
		  <div class="page-header-actions">
			 <a href="{{route('backend.admin.frontdesk.hotel_configure.amenities')}}">
			 <button type="button" class="btn btn-primary" > Amenities List</button></a>
		  </div>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			 <div>
				<form action="{{route('backend.admin.frontdesk.hotel_configure.amenities.store')}}" method="post">
					{{csrf_field()}}
				   <div class="col-md-12">
					  <h4 >Name<strong class="text-danger">*</strong></h4>
					  <input type="text" class="form-control " name="name" placeholder="name" value="{{old('name')}}">
					  <span class="text-danger">{{$errors->first('name')}}</span>
				   </div>
				   <br>
				   <div class="col-md-12">
					  <h4 >Description:(optional)</h4>
					  <div class="form-group row">
						 <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
						 <div class="col-md-12">
							<input type="text" class="form-control form-control-lg"
							   name="description" placeholder="Description" value="{{old('description')}}">
						 </div>
					  </div>
				   </div>
				   <!-- End Panel Basic -->
				   <div class="col-lg-4 ">
					  <h4>Status:</h4>
					  <div class="input-group">
						 <div class="float-left mr-20">
							<input type="checkbox" id="status" name="status" data-plugin="switchery"
							   />
						 </div>
						 <label class="pt-3" for="inputBasicOff">Off</label>
					  </div>
				   </div>
				   <br>
				   <div class="col-md-9">
					  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> &nbsp;Save </button>
				   </div>
				</form>
			 </div>
		  </div>             
	   </div>
	</div>



 </div>

@endsection

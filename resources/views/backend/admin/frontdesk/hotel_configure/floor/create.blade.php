@extends('backend.master')
@section('title',"Create Floor")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Create Floor</h1>
		  <div class="page-header-actions">
			 <a href="{{route('backend.admin.frontdesk.hotel_configure.floor')}}">
			 <button type="button" class="btn btn-primary" > Floor List</button></a>
		  </div>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; "> 
			 <div>
				<form action="{{route('backend.admin.frontdesk.hotel_configure.floor.store')}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
				   <div class="row" >
					  <div class="col-lg-6">
						 <h4>Name:<strong class="text-danger">*</strong></h4>
						 <input type="text" class="form-control " name="name" placeholder="name" value="{{old('name')}}" required />
						 <span class="text-danger">{{$errors->first('name')}}</span>
					</div>
					  <div class="col-lg-6">
						 <h4>Number<strong class="text-danger">*</strong></h4>
						 <input type="number" class="form-control " name="number" placeholder="Number" value="{{old('number')}}" Required />
						 <span class="text-danger">{{$errors->first('number')}}</span>
						</div>
				   </div>
				   <br>
				   <div class="row" >
					  <div class="col-md-12">
						 <h4>Description:(optional)</h4>
						 <div class="form-group row">
							<label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
							<div class="col-md-12">
							 <input type="text" class="form-control form-control-lg" 
								  placeholder="Description" name="description" value="{{old('description')}}" >
								  <span class="text-danger">{{$errors->first('description')}}</span>
							</div>
						 </div>
					  </div>
				   </div>
				   <!-- End Panel Basic -->
				   <div class="row" >
					  <div class="col-lg-4 ">
						 <h4 >Status:</h4>
						 <div class="input-group">
							<div class="float-left mr-20">
							   <input type="checkbox" id="status" name="status" data-plugin="switchery"
							   {{old('status')?'checked': ''}}/>
							</div>
							<label class="pt-3" for="inputBasicOff">Off</label>
						 </div>
					  </div>
				   </div>
				   <br>
				   <div class="row" >
					  <div class="col-md-9">
						 <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit </button>
					  </div>
				   </div>
				</form>
			 </div>
		  </div>             
	   </div>
	</div>


 </div>

@endsection

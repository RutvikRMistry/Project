@extends('backend.master')
@section('title',"Add Paid Service")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Add Paid Service</h1>
		  <div class="page-header-actions">
			 <a href="{{route('backend.admin.frontdesk.hotel_configure.paid_service')}}">
			 <button type="button" class="btn btn-primary" > Paid Service List</button></a>
		  </div>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			 <div>
				<form action="{{route('backend.admin.paid_service.store')}}" method="post">
					{{csrf_field()}}
				   <div class="row" >
					  <div class="col-lg-6 ">
						 <h4 >Title<strong class="text-danger">*</strong></h4>
						  <input type="text" class="form-control" name="title" placeholder="Title" value="{{old('title')}}" required />
						 <span class="text-danger">{{$errors->first('title')}}</span>
					  </div>
					  <div class="col-lg-6 ">
						 <h4 >Price<strong class="text-danger">*</strong></h4>
						 <input type="number" class="form-control " name="price" placeholder="Price" value="{{old('price')}}" required />
						 <span class="text-danger">{{$errors->first('price')}}</span>
					  </div>
				   </div>
				   <br>
				   <div class="row" >
					  <div class="col-lg-6 ">
						 <h4 >Icon No.<strong class="text-danger">*</strong></h4>
						 <input type="text" class="form-control " name="icon" placeholder="Icon" value="{{old('icon')}}" required />
						 <span class="text-danger">{{$errors->first('icon')}}</span>
					  </div>
					  <div class="col-lg-6 ">
						 <h4 >Status:</h4>
						 <div class="input-group">
							<div class="float-left mr-20">
							   <input type="checkbox"  data-plugin="switchery" id="status"  name="status" {{old('status')?'checked': ''}}/>
							</div>
							<label class="pt-3" for="inputBasicOff">Off</label>
						 </div>
					  </div>
				   </div>
				   <br>
				   <div class="row" >
					  <div class="col-md-9">
						 <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					  </div>
				   </div>
				</form>
			 </div>
		  </div>
		 
	   </div>
	</div>

 </div>

@endsection

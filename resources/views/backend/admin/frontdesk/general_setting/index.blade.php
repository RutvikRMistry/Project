@extends('backend.master')
@section('title',"General Settings")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">General Settings</h1>
	   </div>
	   <div style="width: 100%; padding: 30px;">
	   @include('backend.partials.flash_message')
		  <div class="panel-body" style="background-color: #fff; ">
			 <header class="panel-heading">
			 <div>
				<form role="form" method="post" action="{{route('backend.admin.general_setting.update')}}" enctype="multipart/form-data">
					{{csrf_field()}}
				   <div class="row">
					  <div class="col-lg-3 ">
						 <h5>Title:<span class="text-danger">*</span></h5>
						 <input type="text" class="form-control " value="{{general_setting()->title}}" name="title" required>
						 <span class="text-danger">{{$errors->first('title')}}</span>
					  </div>
					  <div class="col-lg-3 ">
						 <h5>Address:<span class="text-danger">*</span></h5>
						 <input type="text" class="form-control " value="{{general_setting()->address}}" name="address" required>
						 <span class="text-danger">{{$errors->first('address')}}</span>
					  </div>
					  <div class="col-lg-3 ">
						 <h5 >
						 Email:<span class="text-danger">*</span></h5>     
						 <input type="email" class="form-control " value="{{general_setting()->email}}" name="email" required> 
						 <span class="text-danger">{{$errors->first('email')}}</span>
					  </div>
					  <div class="col-lg-3 ">
						 <h5>
						 Phone No:<span class="text-danger">*</span></h5>     
						 <input type="text" class="form-control " value="{{general_setting()->phone}}" name="phone" required>
						 <span class="text-danger">{{$errors->first('phone')}}</span>
					  </div>
				   </div>
				   <br>
				   <div class="row">
					  <div class="col-lg-4 ">
						 <h5>SITE BASE COLOR CODE:<span class="text-danger">*</span></h5>
						 <input type="text" class="form-control" value="{{general_setting()->color}}" name="color" required>
						 <span class="text-danger">{{$errors->first('color')}}</span>
					  </div>
					  <div class="col-lg-4">
						 <h5>CURRENCY:<span class="text-danger">*</span></h5>
						 <input type="text" class="form-control " value="{{general_setting()->cur}}" name="cur" required>
						 <span class="text-danger">{{$errors->first('cur')}}</span>
					  </div>
					  <div class="col-lg-4">
						 <h5>CURRENCY SYMBOL:<span class="text-danger">*</span></h5>
						 <input type="text" class="form-control " value="{{general_setting()->cur_sym}}" name="cur_sym" required>
						 <span class="text-danger">{{$errors->first('cur_sym')}}</span>
					  </div>
				   </div>
				   <br>         
				   <!-- End Panel Basic -->
				   <div class="row">
					  <div class="col-lg-6 ">
						 <h5>Email Notification:</h5>
						 <div class="input-group">
							<div class="float-left mr-20">
							   <input type="checkbox" id="inputBasicOn" name="en" data-plugin="switchery" {{!general_setting()->en?:'checked'}} />
							</div>
							<label class="pt-3" for="inputBasicOn">{{!general_setting()->en?'OFF':'ON'}}</label>
						 </div>
					  </div>
					  <div class="col-lg-6">
						 <h4 >
						 SMS Notification:</h5>     
						 <div class="input-group">
							<div class="float-left mr-20">
							   <input type="checkbox" id="inputBasicOff" name="mn" data-plugin="switchery" {{!general_setting()->mn?:'checked'}} />
							</div>
							<label class="pt-3" for="inputBasicOff">{{!general_setting()->mn?'OFF':'ON'}}</label>
						 </div>
					  </div>
				   </div>
				   <br>
				   <div class="row" >
					  <div class="col-md-6">
						 <!-- Example Default Clockpicker -->
						 <div class="example-wrap m-sm-0">
							<h5 >
							Check In Time:<span class="text-danger">*</span></h5>
							<div class="example">
							   <div class="input-group clockpicker-wrap" data-plugin="clockpicker">
								  <input type="text" class="form-control" required value="{{general_setting()->check_in_time}}" id="check_in_time" name="check_in_time">
								 
								  <span class="input-group-addon">
								  <span class="wb-time"></span>
								  </span>
							   </div>
							    <span class="text-danger">{{$errors->first('check_in_time')}}</span>
							</div>
						 </div>
					  </div>
					  <div class="col-md-6">
						 <!-- Example Default Clockpicker -->
						 <div class="example-wrap m-sm-0">
							<h5>
							Check Out Time:<span class="text-danger">*</span></h5>
							<div class="example">
							   <div class="input-group clockpicker-wrap" data-plugin="clockpicker">
								  <input type="text" class="form-control" required value="{{general_setting()->check_out_time}}" id="check_out_time" name="check_out_time">
								  
								  <span class="input-group-addon">
								  <span class="wb-time"></span>
								  </span>
								  
							   </div>
							   <span class="text-danger">{{$errors->first('check_out_time')}}</span>
							</div>
						 </div>
					  </div>
				   </div>
				   <div class="row">
					  <div class="col-md-9">
						 <button type="submit" class="btn btn-primary">Update</button>
					  </div>
				   </div>
				</form>
			 </div>
		  </div>           
	   </div>
	</div>
</div>

 </div>

@endsection

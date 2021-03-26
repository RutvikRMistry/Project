@extends('backend.master')
@section('title',"Create Floor")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">General Settings</h1>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			 <header class="panel-heading">
			 <div>
				<form>
				   <div class="row">
					  <div class="col-lg-3 ">
						 <h5>Title:</h5>
						 <input type="text" class="form-control " value="Hotel" name="title">
					  </div>
					  <div class="col-lg-3 ">
						 <h5>Address:</h5>
						 <input type="text" class="form-control " value="City, Country1" name="address">
					  </div>
					  <div class="col-lg-3 ">
						 <h4 >
						 Email:</h5>     
						 <input type="email" class="form-control " value="support@thesoftking.com" name="email"> 
					  </div>
					  <div class="col-lg-3 ">
						 <h4 >
						 Phone No:</h5>     
						 <input type="text" class="form-control " value="9898098980" name="phone">
					  </div>
				   </div>
				   <br>
				   <div class="row">
					  <div class="col-lg-4 ">
						 <h5>SITE BASE COLOR CODE:</h5>
						 <input type="text" class="form-control  " value="4c4c4c" name="color">
					  </div>
					  <div class="col-lg-4">
						 <h5>CURRENCY:</h5>
						 <input type="text" class="form-control " value="USD" name="cur">
					  </div>
					  <div class="col-lg-4">
						 <h5>CURRENCY SYMBOL:</h5>
						 <input type="text" class="form-control " value="$" name="cur_sym">
					  </div>
				   </div>
				   <br>         
				   <!-- End Panel Basic -->
				   <div class="row">
					  <div class="col-lg-6 ">
						 <h5>Email Notification:</h5>
						 <div class="input-group">
							<div class="float-left mr-20">
							   <input type="checkbox" id="inputBasicOff"  name="en" data-plugin="switchery"
								  />
							</div>
							<label class="pt-3" for="inputBasicOff">Off</label>
						 </div>
					  </div>
					  <div class="col-lg-6">
						 <h4 >
						 SMS Notification:</h5>     
						 <div class="input-group">
							<div class="float-left mr-20">
							   <input type="checkbox" id="inputBasicOff" name="mn" data-plugin="switchery"
								  />
							</div>
							<label class="pt-3" for="inputBasicOff">Off</label>
						 </div>
					  </div>
				   </div>
				   <br>
				   <div class="row" >
					  <div class="col-md-6">
						 <!-- Example Default Clockpicker -->
						 <div class="example-wrap m-sm-0">
							<h4 >
							Chech In Time</h5>
							<div class="example">
							   <div class="input-group clockpicker-wrap" data-plugin="clockpicker">
								  <input type="text" class="form-control" value="09:30" id="check_in_time" name="check_in_time">
								  <span class="input-group-addon">
								  <span class="wb-time"></span>
								  </span>
							   </div>
							</div>
						 </div>
					  </div>
					  <div class="col-md-6">
						 <!-- Example Default Clockpicker -->
						 <div class="example-wrap m-sm-0">
							<h4 >
							Chech In Time</h5>
							<div class="example">
							   <div class="input-group clockpicker-wrap" data-plugin="clockpicker">
								  <input type="text" class="form-control" value="09:30" id="check_out_time" name="check_out_time">
								  <span class="input-group-addon">
								  <span class="wb-time"></span>
								  </span>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				   <div class="row">
					  <div class="col-md-9">
						 <button type="button" class="btn btn-primary">Update</button>
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

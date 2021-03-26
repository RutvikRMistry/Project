@extends('backend.master')
@section('title',"Sales Team Detail")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	

	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Sales Team Details</h1>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			 <header class="panel-heading">
			 <div>
				<div class="panel-body">
				   <div class="row">
					  <div class="col-sm-4">
						 <div class="form-group">
							<label for="title" class="control-label">Sales Team</label> 
							<div class="controls">
							   Mike's Sales Team
							</div>
						 </div>
					  </div>
					  <div class="col-sm-4">
						 <div class="form-group">
							<label for="title" class="control-label">Manager</label> 
							<div class="controls">
							   David Felming
							</div>
						 </div>
					  </div>
					  <div class="col-sm-4">
						 <div class="form-group">
							<label for="title" class="control-label">Staff Members</label> 
							<div class="controls">
							   Adan Brown
							   ,
							   Saachi Katwe
							</div>
						 </div>
					  </div>
				   </div>
				   <div class="row">
					  <div class="col-sm-4">
						 <div class="form-group">
							<label for="title" class="control-label">Invoice Target</label> 
							<div class="controls">
							   5000
							</div>
						 </div>
					  </div>
					  <div class="col-sm-4">
						 <div class="form-group">
							<label for="title" class="control-label">Actual Invoice (this month)</label> 
							<div class="controls">
							   51282
							</div>
						 </div>
					  </div>
				   </div>
				   <div class="row">
					  <div class="col-md-12">
						 <div class="form-group">
							<label for="title" class="control-label">About Team</label> 
							<div class="controles">
							   West Zone Sales Team manages the west zone areas of california
							</div>
						 </div>
					  </div>
				   </div>
				   <div class="form-group">
					  <label for="title" class="control-label">List of Actual Invoice (this month)</label> 
					  <div class="controls">
						 <ul></ul>
					  </div>
				   </div>
				   <div class="form-group">
					  <div class="controls"><a href="http://127.0.0.1:8000/admin/banquet/setting/sales-team" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a></div>
				   </div>
				   <div class="member"></div>
				</div>
			 </div>
		  </div>
				
	   </div>
	</div>
	</div>


 </div>

@endsection
	
	@extends('backend.master')
@section('title',"Veiw Lead Detail")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header"style="height: 5px;" >
		  <h1 class="page-title">New Lead Call</h1>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			 <header class="panel-heading">
			 <div>
				<form action="{{route('backend.admin.banquet.sales.lead.call_store')}}" method="post">
				{{ csrf_field() }}
				   <div class="row" >
					  <div class="col-lg-10 ">
						 <h5>Company Name</h5>
						 <input readonly="readonly" name="company_name" type="text" value="Personal" id="company_name" class="form-control">
					  </div>
				   </div>
				   <br>
				   <div class="row">
					  <div class="col-lg-5">
						 <h5>Date<strong class="text-danger">*</strong></h5>
						 <div class="input-group">
							<span class="input-group-addon">
							<i class="icon wb-calendar" aria-hidden="true"></i>
							</span>
							<input type="date" class="form-control" data-plugin="datepicker" data-multidate="true" name="date"  id="date">
						 </div>
					  </div>
					  <div class="col-lg-5">
						 <h5>Call Summary<strong class="text-danger">*</strong></h5>
						 <input name="call_summary" type="text" id="call_summary" class="form-control" data-bv-field="call_summary">
					  </div>
				   </div>
				   <br>
				   <div class="row">
					  <div class="col-lg-5">
						 <h5>Event Manager<strong class="text-danger">*</strong></h5>
						 <select class="form-control" data-plugin="select2" id="resp_staff_id" name="resp_staff_id">
							<optgroup label="Please Select">
							   <option value="1">David Felming</option>
							   <option value="2">Adan Brown</option>
							   <option value="3"> Saachi Katwe</option>
							</optgroup>
						 </select>
					  </div>
					  <div class="col-lg-5">
						 <h5>Call Duration(in min.)<strong class="text-danger">*</strong></h5>
						 <input min="1" name="duration" type="number" id="duration" class="form-control" data-bv-field="duration">
					  </div>
				   </div>
				   <br>
				   <div class="row"  >
					  <div class="col-md-9">
						 <button type="submit" class="btn btn-primary">Submit </button>
						 <button type="reset" class="btn btn-default btn-outline">Cancel</button>
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
	
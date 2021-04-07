@extends('backend.master')
@section('title',"Create Lead")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header"style="height: 5px;" >
		  <h1 class="page-title">Create Lead</h1>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			 <header class="panel-heading">
				<div class="panel-actions"></div>
				<h3 ><b>Lead Detail</b></h3>
			 </header>
			 <header class="panel-heading">
			<div>
					@if($errors->all())
					<div class="row">
						<div class="col">
							@foreach($errors->all() as $msg)
							<div class="alert alert-danger" role="alert">
							{{$msg}}
							</div>
							@endforeach
						</div>
					</div>
					@endif()
			<form action="{{route('backend.admin.banquet.sales.lead.update',$leads->id)}}" method="post">
			{{csrf_field()}}
				<div class="row">
				   <div class="col-lg-3 ">
					  <h5>Client Name<strong class="text-danger">*</strong></h5>
					  <input placeholder="Client Name" name="client_name" Type="text" id="booking" class="form-control">
					  <!-- s -->
				   </div>
				   <div class="col-lg-3 ">
					  <h5>Email ID<strong class="text-danger">*</strong></h5>
					  <input placeholder="Email Address" name="email" type="email" id="email" class="form-control">
				   </div>
				   <div class="col-lg-3 ">
					  <h5>Phone<strong class="text-danger">*</strong></h5>
					  <input data-fv-integer="true" placeholder="Phone Number" name="mobile" type="tel" id="mobile" class="form-control">
				   </div>
				   <div class="col-lg-3 ">
					  <h5>Company<strong class="text-danger">*</strong></h5>
					  <select class="form-control" data-plugin="select2" id="client_company" name="company_name" >
						 <optgroup label="Please Select">
							<!-- <option value="Personal">Personal</option>
							<option value="California Cartage Express">California Cartage Express</option>
							<option value="Jawwal Palestine">Jawwal Palestine</option>
							<option value="Toll Brothers">Toll Brothers</option> -->
                     @foreach($company as $company)
							<option value="{{$company->name}}" {{$leads->company_name == $company->name?'selected':''}}>{{$company->name}}</option>
							@endforeach
						 </optgroup>
					  </select>
				   </div>
				</div>
				<br>
				<div class="row">
				   <div class="col-lg-3 ">
					  <h5>Country<strong class="text-danger">*</strong></h5>
					  <select class="form-control" data-plugin="select2" id="country_id" name="country_id">
						 <optgroup label="Please Select">
							<!-- <option value="1">Afghanistan</option>
							<option value="2">Albania</option>
							<option value="3">Antigua And Barbuda</option>
							<option value="4">Australia</option>
							<option value="5">Bahrain</option>
							<option value="6">Belgium</option> -->
                     @foreach($country as $country)
							<option value="{{$country->id}}" {{$leads->country_id == $country->id?'selected':''}}>{{$country->name}}</option>
							@endforeach
						 </optgroup>
					  </select>
				   </div>
				   <div class="col-lg-3 ">
					  <h5>State<strong class="text-danger">*</strong></h5>
					  <select class="form-control" data-plugin="select2" id="state_id" name="state_id">
						 <optgroup label="Please Select">
							<!-- <option value="1">Australian Capital Territory</option>
							<option value="2">New South Wales</option>
							<option value="3">Northern Territory</option>
							<option value="4">Queensland</option>
							<option value="5">Tasmania</option>
							<option value="6">Western Australia</option> -->
                     @foreach($state as $state)
							<option value="{{$state->id}}" {{$leads->state_id == $state->id?'selected':''}}>{{$state->name}}</option>
							@endforeach
					  </select>
				   </div>
				   <div class="col-lg-3 ">
				   <h5>City<strong class="text-danger">*</strong></h5>     
				   <select class="form-control" data-plugin="select2" id="city_id" name="city_id">
				   <optgroup label="Please Select">
				   			<!-- <option value="1">Australian Capital Territory</option>
							<option value="2">New South Wales</option>
							<option value="3">Northern Territory</option>
							<option value="4">Queensland</option>
							<option value="5">Tasmania</option>
							<option value="6">Western Australia</option> -->
                     @foreach($city as $city)
							<option value="{{$city->id}}" {{$leads->city_id == $city->id?'selected':''}}>{{$city->name}}</option>
							@endforeach
				   </optgroup>  
				   </select>      
				   </div>
				   <!-- <div class="col-lg-3 ">
					  <h5>Zipcode:</h5>
					  <input placeholder="Zip code" name="zipcode" type="text" class="form-control">
				   </div> -->
				</div>
				<br>
				<div class="row">
				   <div class="col-lg-3 ">
					  <h5>Lead Source<strong class="text-danger">*</strong></h5>
					  <select class="form-control" data-plugin="select2" id="lead_source" name="lead_source">
						 <optgroup label="Please Select">
							<!-- <option value="1">Facebook</option>
							<option value="2">Hoarding</option>
							<option value="3">Instagram</option>
							<option value="4">Newspaper</option>
							<option value="5">Twitter</option> -->
                     @foreach($lead as $lead)
							<option value="{{$lead->id}}" {{$leads->lead_source == $lead->id?'selected':''}}>{{$lead->name}}</option>
							@endforeach
						 </optgroup>
					  </select>
				   </div>
				   <div class="col-lg-3">
					  <h5>Sales Team<strong class="text-danger">*</strong></h5>
					  <select class="form-control" data-plugin="select2" id="sales_team_id" name="sales_team_id">
						 <optgroup label="Select Sales team">
							<!-- <option value="1">Mike's Sales Team</option>
							<option value="2">Hoarding</option> -->
                     @foreach($sale as $sale)
							<option value="{{$sale->id}}" {{$leads->sales_team_id == $sale->id?'selected':''}}>{{$sale->salesteam}}</option>
							@endforeach
						 </optgroup>
					  </select>
				   </div>
				   <div class="col-lg-3 ">
					  <h5>Lead Owner<strong class="text-danger">*</strong></h5>
					  <select class="form-control" data-plugin="select2" id="sales_person_id" name="sales_person_id" >
						 <optgroup label="Select Sales team">
							<!-- <option value="1">David Felming</option>
							<option value="2">Adan Brown</option>
							<option value="3"> Saachi Katwe</option> -->
                     @foreach($per as $per)
							<option value="{{$per->id}}" {{$leads->sales_person_id == $per->id?'selected':''}}>{{$per->name}}</option>
							@endforeach
						 </optgroup>
					  </select>
				   </div>
				   <div class="col-lg-3 ">
					  <h5>Event Manager<strong class="text-danger">*</strong></h5>
					  <select class="form-control" data-plugin="select2">
						 <optgroup label="Select Sales team" id="event_manager" name="event_manager">
							<option value="1">David Felming</option>
							<option value="2">Adan Brown</option>
							<option value="3"> Saachi Katwe</option>
						 </optgroup>
					  </select>
				   </div>
				</div>
				<br>
				<!-- End Panel Basic -->
				<div class="row">
				   <div class="col-lg-3 ">
					  <h5>Priority<strong class="text-danger">*</strong></h5>
					  <select class="form-control" data-plugin="select2" id="priority" name="priority">
						 <optgroup label="Please Select">
							<option value="1">Open</option>
							<option value="2">Approach</option>
							<option value="3">Do Not Contact</option>
						 </optgroup>
					  </select>
				   </div>
				</div>
				<br>
				<header class="panel-heading">
				   <div class="panel-actions"></div>
				   <h3 ><b>Event Information</b></h3>
				</header>
				<div class="row">
				   <div class="col-lg-3 ">
					  <h5>Event Name<strong class="text-danger">*</strong></h5>
					  <input id="event_name" placeholder="Event Name" name="event_name" type="text" class="form-control">
				   </div>
				   <div class="col-lg-3 ">
					  <h5>Event Type<strong class="text-danger">*</strong></h5>
					  <select class="form-control" data-plugin="select2" id="function" name="event_type" >
						 <optgroup label="Please Select">
							<!-- <option value="1">Birthday</option>
							<option value="2">Cocktail</option>
							<option value="3">Conference</option> -->
                     @foreach($type as $type)
							<option value="{{$type->id}}" {{$leads->event_type == $type->id?'selected':''}}>{{$type->name   }}</option>
							@endforeach
						 </optgroup>
					  </select>
				   </div>
				   <div class="col-lg-3 ">
					  <h5>Expected Number Of Guests<strong class="text-danger">*</strong></h5>
					  <input placeholder="Guest" min="0" name="expected_guests_veg" type="number" class="form-control">
				   </div>
				   <div class="col-lg-3 ">
					  <h5>Budget Up To<strong class="text-danger">*</strong></h5>
					  <input min="0" step="0.01" placeholder="Budget Up To In ₵" name="budget" type="number" id="budget" class="form-control">
				   </div>
				</div>
				<br>
				<div class="row">
				   <div class="col-lg-3 ">
					  <h5>Event Start Date<strong class="text-danger">*</strong></h5>
					  <div class="input-group">
						 <span class="input-group-addon">
						 <i class="icon wb-calendar" aria-hidden="true"></i>
						 </span>
						 <input type="date" class="form-control" data-plugin="datepicker" data-multidate="true"id="start_date" oninput="getDateTimes(this.value)" name="start_date">
					  </div>
				   </div>
				   <div class="col-lg-3 ">
					  <h5>Event End Date<strong class="text-danger">*</strong></h5>
					  <div class="input-group">
						 <span class="input-group-addon">
						 <i class="icon wb-calendar" aria-hidden="true"></i>
						 </span>
						 <input type="date" class="form-control" data-plugin="datepicker" data-multidate="true" id="end_date" oninput="getDateTimes(this.value)" name="end_date">
					  </div>
				   </div>
				</div>
				<br>
				<!-- <div class="row">
				   <div class="col-lg-4">
					  <h5>Category:*</h5>
				   </div>
				</div>
				<div class="row">
				   <div class="col-lg-2 ">
					  <li class="mb-15">
						 <input type="radio" class="icheckbox-primary" id="inputRadiosChecked" name="category"
							data-plugin="iCheck" data-radio-class="iradio_flat-blue"
							checked />
						 <label for="inputRadiosChecked">Function</label>
					  </li>
				   </div>
				   <div class="col-lg-2 ">
					  <li class="mb-15">
						 <input type="radio" class="icheckbox-primary" id="inputRadiosChecked"  name="category"
							data-plugin="iCheck" data-radio-class="iradio_flat-blue"
							checked />
						 <label for="inputRadiosChecked">Event</label>
					  </li>
				   </div>
				</div> -->
				<br>
				<div class="row" >
				   <div class="col-md-12">
					  <h5>Additional Info:</h5>
					  <div class="form-group row">
						 <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
						 <div class="col-md-12">
							<textarea name="additionl_info" cols="50" rows="10" id="additionl_info" class="form-control resize_vertical"></textarea>
						 </div>
					  </div>
				   </div>
				</div>
				<br>
				<div class="row" >
				   <div class="col-md-9">
					  <button type="submit" class="btn btn-primary">Submit </button>
					  <button type="reset" class="btn btn-default btn-outline">Cancel</button>
				   </div>
				</div>
			 </div>
			</form>
		  </div>             
	   </div>
	</div>
	</div>
</div>
</div>
 </div>

@endsection
	
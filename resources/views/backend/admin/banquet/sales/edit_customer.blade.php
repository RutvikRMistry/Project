@extends('backend.master')
@section('title',"New Customer")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">New Contact</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
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
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <form action="{{route('backend.admin.banquet.sales.customer.update',$cust->id)}}" method="post">
            {{csrf_field()}}
               <div class="col-xs-12">
                  <div data-provides="fileinput" class="fileinput fileinput-new">
                     <div data-trigger="fileinput" class="fileinput-preview thumbnail form_Blade"><img id="image-preview" width="300" style="display: none;"> <img src="https://saas.banquetcrm.com/uploads/site/blogo_1574859699.png" alt="Site Logo" class="ima-responsive"></div>
                     <button type="button" class="btn btn-dark" id="input-file-now" data-plugin="dropify" data-default-file=""><i class="icon wb-upload" aria-hidden="true"></i> Select Logo</button>
                  </div>
               </div>
               <br>
               <div class="row" >
                  <div class="col-lg-4">
                     <h5>Title <strong class="text-danger">*</strong></h5>
                     <select class="form-control" data-plugin="select2" id="title" name="title">
                        <optgroup label="Please Select">
                           <option value="Mr.">Mr.</option>
                           <option value="Mrs.">Mrs.</option>
                        </optgroup>
                     </select>
                  </div>
                  <div class="col-lg-4">
                     <h5>First Name<strong class="text-danger">*</strong></h5>
                     <input name="first_name" type="text" id="first_name" class="form-control" data-bv-field="first_name" value="{{$cust->first_name}}">
                  </div>
                  <div class="col-lg-4">
                     <h5>Last Name<strong class="text-danger">*</strong></h5>
                     <input name="last_name" type="text" id="last_name" class="form-control" data-bv-field="last_name" value="{{$cust->last_name}}">
                  </div>
               </div>
               <br>
               <div class="row" >
                  <div class="col-lg-6">
                     <h5>Job Position</h5>
                     <input id="job_position" name="job_position" type="text" class="form-control ui-autocomplete-input" autocomplete="off" value="{{$cust->job_position}}">
                  </div>
                  <div class="col-lg-6">
                     <h5>Company<strong class="text-danger">*</strong></h5>
                     <select class="form-control" data-plugin="select2" id="company_id" name="company_id" >
                     <option value="">--Select--</option>
							@foreach($com as $com)
							<option value="{{$com->id}}" {{$cust->company_id == $com->id?'selected':''}} > {{$com->name}} </option>
							@endforeach
                     </select>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-6">
                     <h5>Sales Team <strong class="text-danger">*</strong></h5>
                     <select class="form-control" data-plugin="select2" id="sales_team_id" name="sales_team_id">
                     <option value="">--Select--</option>
							@foreach($sal as $sal)
							<option value="{{$sal->id}}" {{$cust->sales_team_id == $sal->id?'selected':''}} > {{$sal->salesteam}} </option>
							@endforeach
                     </select>
                  </div>
                  {{--<!-- <div class="col-lg-6">
                     <h5>Email ID<strong class="text-danger">*</strong></h5>
                     <input name="email" type="email" id="email" class="form-control" data-bv-field="email" value="{{$cust->email}}">
                  </div> -->--}}
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-6">
                     <h5>Phone<strong class="text-danger">*</strong></h5>
                     <input data-fv-integer="true" name="mobile" type="tel" id="mobile" class="form-control " data-bv-field="phone_number" value="{{$cust->mobile}}">
                  </div>
                  <div class="col-lg-6">
                     <h5>Website<strong class="text-danger"></strong></h5>
                     <input data-fv-integer="true" name="website" type="site" id="website" class="form-control " data-bv-field="phone_number" value="$cust->website">
                  </div>
               </div>
               <br>
               <div class="row" >
                  <div class="col-md-12">
                     <h5>Address:</h5>
                     <div class="form-group row">
                        <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                        <div class="col-md-12">
                           <textarea name="address" cols="50" rows="5" id="address" class="form-control resize_vertical" value="$cust->address"></textarea>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-9">
                     <button type="submit" class="btn btn-primary">Back </button>
                     <button type="Buttons" class="btn btn-default btn-outline">OK</button>
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
	
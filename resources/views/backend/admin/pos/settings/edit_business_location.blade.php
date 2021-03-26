@extends('backend.master')
@section('title',"Edit Buiness Location")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
	@include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">edit business location</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <form action="{{route('backend.admin.pos.setting.business_location.update',$loc->id)}}" method="post">
				{{csrf_field()}}
               <div class="row">
                  <div class="col-lg-12">
                     <h5>Name<strong class="text-danger">*</strong></h5>
                     <input class="form-control" placeholder="Name" name="name" type="text" id="name" aria-required="true" value="{{$loc->name}}">
					<span class="text-danger">{{$errors->first('name')}}</span>
				  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-6">
                     <h5>Location ID:</h5>
                     <input class="form-control" placeholder="Location ID" name="location_id" type="text" id="location_id" value="{{$loc->location_id}}">
					<span class="text-danger">{{$errors->first('location_id')}}</span>
				  </div>
                  <div class="col-lg-6">
                     <h5>Landmark:</h5>
                     <input class="form-control" placeholder="Landmark" name="landmark" type="text" id="landmark" value="{{$loc->landmark}}">
					<span class="text-danger">{{$errors->first('landmark')}}</span>
				  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-6">
                     <h5>City<strong class="text-danger">*</strong></h5>
                     <input class="form-control" placeholder="City"  name="city" type="text" id="city" aria-required="true" value="{{$loc->city}}">
					 <span class="text-danger">{{$errors->first('city')}}</span>
                  </div>
                  <div class="col-lg-6">
                     <h5>Zip Code<strong class="text-danger">*</strong></h5>
                     <input class="form-control" placeholder="Zip Code"  name="zip_code" type="text" id="zip_code" aria-required="true" value="{{$loc->zip_code}}">
					 <span class="text-danger">{{$errors->first('zip_code')}}</span>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-6">
                     <h5>State<strong class="text-danger">*</strong></h5>
                     <input class="form-control" placeholder="State"  name="state" type="text" id="state" aria-required="true" value="{{$loc->state}}">
					 <span class="text-danger">{{$errors->first('state')}}</span>
                  </div>
                  <div class="col-lg-6">
                     <h5>Country<strong class="text-danger">*</strong></h5>
                     <input class="form-control" placeholder="Country"  name="country" type="text" id="country" aria-required="true" value="{{$loc->country}}">
					 <span class="text-danger">{{$errors->first('country')}}</span>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-6">
                     <h5>Mobile:<strong class="text-danger">*</strong></h5>
                     <input class="form-control" placeholder="Mobile" name="mobile" type="text" id="mobile" value="{{$loc->mobile}}">
					 <span class="text-danger">{{$errors->first('mobile')}}</span>
                  </div>
                  <div class="col-lg-6">
                     <h5>Alternate contact number:</h5>
                     <input class="form-control" placeholder="Alternate contact number" name="alternate_number" type="text" id="alternate_number" value="{{$loc->alternate_number}}">
					 <span class="text-danger">{{$errors->first('alternate_number')}}</span>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-6">
                     <h5>Email<strong class="text-danger">*</strong></h5>
                     <input class="form-control" placeholder="Email" name="email" type="email" id="email" value="{{$loc->email}}">
					 <span class="text-danger">{{$errors->first('email')}}</span>
                  </div>
                  <div class="col-lg-6">
                     <h5>Website:</h5>
                     <input class="form-control" placeholder="Website" name="website" type="text" id="website" value="{{$loc->website}}">
					 <span class="text-danger">{{$errors->first('website')}}</span>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-6">
                     <h5>Invoice scheme<strong class="text-danger">*</strong></h5>
                     <select class="form-control" id="invoice_scheme_id" name="invoice_scheme_id" aria-required="true">
                        <option value="">Please Select</option>
                        <option value="1"{{$loc->invoice_scheme_id == '1'?'selected':''}}>Default</option>
                     </select>
					 <span class="text-danger">{{$errors->first('invoice_scheme_id')}}</span>
                  </div>
				  <input type="hidden" value="{{$loc->business_id}}" name="business_id">
                  <div class="col-lg-6">
				   <h5>Invoice Layout<strong class="text-danger">*</strong></h5>
				   
                     <select class="form-control" id="invoice_layout_id" name="invoice_layout_id" aria-required="true">
                        <option value="">Please Select</option>
                        <option value="1" {{$loc->invoice_layout_id == '1'?'selected':''}}>Default</option>
                     </select>
					 <span class="text-danger">{{$errors->first('invoice_layout_id')}}</span>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-3">
                     <h5>Custom Field 1:</h5>
                     <input class="form-control" placeholder="Custom Field 1" name="custom_field1" type="text" id="custom_field1" value="{{$loc->custom_field1}}">
						<span class="text-danger">{{$errors->first('custom_field1')}}</span>
				 </div>
                  <div class="col-lg-3">
                     <h5>Custom Field 2:</h5>
                     <input class="form-control" placeholder="Custom Field 2" name="custom_field2" type="text" id="custom_field2" value="{{$loc->custom_field2}}">
						<span class="text-danger">{{$errors->first('custom_field2')}}</span>
				  </div>
                  <div class="col-lg-3">
                     <h5>Custom Field 3:</h5>
                     <input class="form-control" placeholder="Custom Field 3" name="custom_field3" type="text" id="custom_field3" value="{{$loc->custom_field3}}">
						<span class="text-danger">{{$errors->first('custom_field3')}}</span>
				  </div>
                  <div class="col-lg-3">
                     <h5>Custom Field 4:</h5>
                     <input class="form-control" placeholder="Custom Field 4" name="custom_field4" type="text" id="custom_field4" value="{{$loc->custom_field4}}">
						<span class="text-danger">{{$errors->first('custom_field4')}}</span>
				  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-9">
                     <button type="submit" class="btn btn-primary">Submit </button>
                     <button type="reset" class="btn btn-default btn-outline">Reset</button>
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
	
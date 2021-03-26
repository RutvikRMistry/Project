@extends('backend.master')
@section('title',"Edit Supplier")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
  <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Edit contact</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <div>
            <form action="{{route('backend.admin.pos.contact_book.supplier.update',$contact->id)}}" method="post">
				{{csrf_field()}}
               <div class="row">
                  <div class="col-lg-6">
                     <h5>Contact type<strong class="text-danger">*</strong></h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon wb-user" aria-hidden="true"></span>
                           </span>
                           <select class="form-control valid" id="contact_type" name="type" aria-required="true" aria-invalid="false" required >
                              <option value="">--Please Select--</option>
                              <option value="supplier" {{$contact->type == 'supplier' ? 'selected': ''}} >Suppliers</option>
                              <option value="customer" {{$contact->type == 'customer' ? 'selected': ''}} >Customers</option>
                              <option value="both" {{$contact->type == 'both' ? 'selected': ''}} >Both (Supplier &amp; Customer)</option>
                           </select>
                        </div>
						 <span class="text-danger">{{$errors->first('type')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <h5>Name<strong class="text-danger">*</strong></h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon wb-user" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" placeholder="Name" value="{{$contact->name}}" name="name" type="text" id="name" aria-required="true" required />
                        </div>
						 <span class="text-danger">{{$errors->first('name')}}</span>
                     </div>
                  </div>
               </div>
               <div class="row" >
                  <div class="col-lg-4">
                     <h5>Business Name<strong class="text-danger">*</strong></h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon io-briefcase" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" value="{{$contact->supplier_business_name}}" placeholder="Business Name" name="supplier_business_name" type="text" id="supplier_business_name" aria-required="true" required />
                        </div>
						<span class="text-danger">{{$errors->first('supplier_business_name')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <h5>Contact ID:</h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon oi-clippy" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" placeholder="Contact ID" name="contact_id" type="text" id="contact_id" value="{{$contact->contact_id}}" required />
                        </div>
						<span class="text-danger">{{$errors->first('contact_id')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <h5>Tax number:</h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon oi-info" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" placeholder="Tax number" name="tax_number" type="text" id="tax_number" value="{{$contact->tax_number}}">
                        </div>
						<span class="text-danger">{{$errors->first('tax_number')}}</span>
                     </div>
                  </div>
               </div>
               <!-- End Panel Basic -->
               <div class="row">
                  <div class="col-lg-4 form-group">
                     <h5>Opening Balance:</h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon oi-bookmark" aria-hidden="true"></span>
                           </span>
                           <input class="form-control input_number" name="opening_balance" type="text" value="{{$opening_balance}}" id="opening_balance" >
                        </div>
						<span class="text-danger">{{$errors->first('opening_balance')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <h5>Pay term<strong class="text-danger">*</strong></h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon fa-cc-paypal" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" value="{{$contact->pay_term_number}}" placeholder="Pay term" name="pay_term_number" type="number" id="pay_term_number" aria-required="true">
                        </div>
						<span class="text-danger">{{$errors->first('pay_term_number')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <h5>Pay term period<strong class="text-danger">*</strong></h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon fa-calendar" aria-hidden="true"></span>
                           </span>
                           <select class="form-control" id="pay_term_type" name="pay_term_type" aria-required="true" required >
                              <option value="">--Please Select--</option>
                              <option value="months" {{$contact->pay_term_type == 'months' ? 'selected': ''}}>Months</option>
                              <option value="days" {{$contact->pay_term_type == 'days' ? 'selected': ''}} >Days</option>
                           </select>
                        </div>
						<span class="text-danger">{{$errors->first('pay_term_type')}}</span>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-3">
                     <h5>Email:<strong class="text-danger">*</strong></h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon wb-envelope" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" placeholder="Email" name="email" type="email" id="email" value="{{$contact->email}}" required />           
                        </div>
						<span class="text-danger">{{$errors->first('email')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <h5>Mobile<strong class="text-danger">*</strong></h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon fa-mobile" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" placeholder="Mobile" value="{{$contact->mobile}}" name="mobile" type="number" id="mobile" aria-required="true" required />                    
                        </div>
						<span class="text-danger">{{$errors->first('mobile')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <h5>Alternate contact number:</h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon glyphicon glyphicon-earphone" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" placeholder="Alternate contact number" name="alternate_number" type="number" id="alternate_number" value="{{$contact->alternate_number}}">                    
                        </div>
						<span class="text-danger">{{$errors->first('alternate_number')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <h5>Landline:</h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon glyphicon glyphicon-earphone" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" placeholder="Landline" name="landline" type="number" id="landline" value="{{$contact->landline}}">
                        </div>
						<span class="text-danger">{{$errors->first('landline')}}</span>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-3">
                     <h5>City:<strong class="text-danger">*</strong></h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="form-control-icon wb-map" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" placeholder="City" name="city" value="{{$contact->city}}" type="text" id="city" required />           
                        </div>
						<span class="text-danger">{{$errors->first('city')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <h5>State:<strong class="text-danger">*</strong></h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="form-control-icon wb-map" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" placeholder="State" name="state" value="{{$contact->state}}" type="text" id="state" required />
                        </div>
						<span class="text-danger">{{$errors->first('state')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <h5>Country:<strong class="text-danger">*</strong></h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="form-control-icon wb-map" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" placeholder="Country" name="country"  value="{{$contact->country}}" type="text" id="country" required />
                        </div>
						<span class="text-danger">{{$errors->first('country')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <h5>Landmark:</h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="form-control-icon wb-map" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" placeholder="Landmark" name="landmark" type="text" value="{{$contact->landmark}}" id="landmark">
                        </div>
						<span class="text-danger">{{$errors->first('landmark')}}</span>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-3">
                     <h5>Custom Field 1:</h5>
                     <input class="form-control" placeholder="Custom Field 1" value="{{$contact->custom_field1}}" name="custom_field1" type="text" id="custom_field1">
                  </div>
                  <div class="col-lg-3">
                     <h5>Custom Field 2:</h5>
                     <input class="form-control" placeholder="Custom Field 2" value="{{$contact->custom_field2}}" name="custom_field2" type="text" id="custom_field2">
                  </div>
                  <div class="col-lg-3">
                     <h5>Custom Field 3:</h5>
                     <input class="form-control" placeholder="Custom Field 3" value="{{$contact->custom_field3}}" name="custom_field3" type="text" id="custom_field3">
                  </div>
                  <div class="col-lg-3">
                     <h5>Custom Field 4:</h5>
                     <input class="form-control" placeholder="Custom Field 4" name="custom_field4"  value="{{$contact->custom_field4}}" type="text" id="custom_field4">
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

@endsection
	
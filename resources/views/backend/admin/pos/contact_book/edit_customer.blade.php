@extends('backend.master')
@section('title',"Edit Customer")
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
            <form action="{{route('backend.admin.pos.contact_book.customer.update',$contact->id)}}" method="post">
				{{csrf_field()}}
               <div class="row" >
                  <div class="col-lg-6 ">
                     <h5>Contact type<strong class="text-danger">*</strong></h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon wb-user" aria-hidden="true"></span>
                           </span>
                           <select class="form-control valid" id="contact_type"  name="type" aria-required="true" aria-invalid="false" required >
                              <option value="">--Select--</option>
                              <option value="supplier" {{$contact->type == 'supplier' ? 'selected' : ''}}>Suppliers</option>
                              <option value="customer" {{$contact->type == 'customer' ? 'selected' : ''}} >Customers</option>
                              <option value="both" {{$contact->type == 'both' ? 'selected' : ''}} >Both (Supplier &amp; Customer)</option>
                           </select>
                        </div>
						<span class="text-danger">{{$errors->first('type')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-6 ">
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
                  <div class="col-lg-6 ">
                     <h5>Contact ID:<strong class="text-danger">*</strong></h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon oi-clippy" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" placeholder="Contact ID" name="contact_id" value="{{$contact->contact_id}}" type="text" id="contact_id" required />
                        </div>
						<span class="text-danger">{{$errors->first('contact_id')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-6 ">
                     <h5>Tax number:</h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon oi-info" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" placeholder="Tax number" value="{{$contact->tax_number}}" name="tax_number" type="text" id="tax_number">
                        </div>
						<span class="text-danger">{{$errors->first('tax_number')}}</span>
                     </div>
                  </div>
               </div>
               <!-- End Panel Basic -->
               <div class="row" >
                  <div class="col-lg-4 ">
                     <h5>Opening Balance:</h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon oi-bookmark" aria-hidden="true"></span>
                           </span>
                           <input class="form-control input_number" name="opening_balance" value="{{$opening_balance}}" type="text" value="0" id="opening_balance">
                        </div>
						<span class="text-danger">{{$errors->first('opening_balance')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-4 ">
                     <h5>Credit Limit:</h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon fa-cc-paypal" aria-hidden="true"></span>
                           </span>
                           <input class="form-control input_number" name="credit_limit" value="{{$contact->credit_limit}}" type="text" id="credit_limit">
                        </div>
						<small class="text-success">Keep blank for no limit</small>
						<span class="text-danger">{{$errors->first('credit_limit')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-4 ">
                     <h5>Customer Group:</h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon fa-calendar" aria-hidden="true"></span>
                           </span>
                           <select class="form-control valid" id="customer_group_id" name="customer_group_id" aria-invalid="false">
                              <option value="" selected="selected">None</option>
                              <option value="1" {{$contact->customer_group_id == '1' ? 'selected' : ''}}>asd</option>
                           </select>
                        </div>
						<span class="text-danger">{{$errors->first('customer_group_id')}}</span>
                     </div>
                  </div>
               </div>
               <div class="row" >
                  <div class="col-lg-3 ">
                     <h5>Email:<strong class="text-danger">*</strong></h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon wb-envelope" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" placeholder="Email" name="email" value="{{$contact->email}}" type="email" id="email" required />
                        </div>
						<span class="text-danger">{{$errors->first('email')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-3 ">
                     <h5>Mobile<strong class="text-danger">*</strong></h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon fa-mobile" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" value="{{$contact->mobile}}" placeholder="Mobile" name="mobile" type="text" id="mobile" aria-required="true" required />                    
                        </div>
						<span class="text-danger">{{$errors->first('mobile')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-3 ">
                     <h5>Alternate contact number:</h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon glyphicon glyphicon-earphone" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" placeholder="Alternate contact number" value="{{$contact->alternate_number}}" name="alternate_number" type="text" id="alternate_number">                    
                        </div>
						<span class="text-danger">{{$errors->first('alternate_number')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-3 ">
                     <h5>Landline:</h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon glyphicon glyphicon-earphone" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" placeholder="Landline" name="landline" value="{{$contact->landline}}" type="text" id="landline">
                        </div>
						<span class="text-danger">{{$errors->first('landline')}}</span>
                     </div>
                  </div>
               </div>
               <div class="row" >
                  <div class="col-lg-3 ">
                     <h5>City:<strong class="text-danger">*</strong></h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="form-control-icon wb-map" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" placeholder="City" name="city" type="text" value="{{$contact->city}}" id="city" required />           
                        </div>
						<span class="text-danger">{{$errors->first('city')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-3 ">
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
                  <div class="col-lg-3 ">
                     <h5>Country:<strong class="text-danger">*</strong></h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="form-control-icon wb-map" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" placeholder="Country" name="country" value="{{$contact->country}}" type="text" id="country" required />
                        </div>
						<span class="text-danger">{{$errors->first('country')}}</span>
                     </div>
                  </div>
                  <div class="col-lg-3 ">
                     <h5>Landmark:</h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="form-control-icon wb-map" aria-hidden="true"></span>
                           </span>
                           <input class="form-control" placeholder="Landmark" name="landmark" value="{{$contact->landmark}}" type="text" id="landmark">
                        </div>
						<span class="text-danger">{{$errors->first('landmark')}}</span>
                     </div>
                  </div>
               </div>
               <div class="row" >
                  <div class="col-lg-3 ">
                     <h5>Custom Field 1:</h5>
                     <input class="form-control" placeholder="Custom Field 1" name="custom_field1" value="{{$contact->custom_field1}}" type="text" id="custom_field1">
                  </div>
                  <div class="col-lg-3 ">
                     <h5>Custom Field 2:</h5>
                     <input class="form-control" placeholder="Custom Field 2" name="custom_field2" value="{{$contact->custom_field2}}" type="text" id="custom_field2">
                  </div>
                  <div class="col-lg-3 ">
                     <h5>Custom Field 3:</h5>
                     <input class="form-control" placeholder="Custom Field 3" name="custom_field3" value="{{$contact->custom_field3}}" type="text" id="custom_field3">
                  </div>
                  <div class="col-lg-3 ">
                     <h5>Custom Field 4:</h5>
                     <input class="form-control" placeholder="Custom Field 4" name="custom_field4" type="text"  value="{{$contact->custom_field4}}" id="custom_field4">
                  </div>
               </div>
               <br>
               <div class="row" >
                  <div class="col-md-9">
                     <button type="submit" class="btn btn-primary">Update </button>
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
	
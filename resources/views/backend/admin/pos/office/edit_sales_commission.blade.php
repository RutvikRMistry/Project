@extends('backend.master')
@section('title',"Edit Sales Commission")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
 @include('backend.partials.leftbar.shortcuts')
 <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Edit sales commission agent</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <form action="{{route('backend.admin.pos.office.sales_commission.update',$user->id)}}" method="post">
				{{csrf_field()}}
            <div class="row">
               <div class="col-lg-4">
                  <h5>Prefix:<strong class="text-danger">*</strong></h5>
                  <input class="form-control" placeholder="Mr / Mrs / Miss" name="surname" type="text" id="surname" value="{{$user->surname}}" required />
				  <span class="text-danger">{{$errors->first('surname')}}</span>
               </div>
               <div class="col-lg-4">
                  <h5>First Name<strong class="text-danger">*</strong></h5>
                  <input class="form-control" placeholder="First Name" name="first_name" type="text" id="first_name" aria-required="true" value="{{$user->first_name}}" required />
					<span class="text-danger">{{$errors->first('first_name')}}</span>
			   </div>
               <div class="col-lg-4">
                  <h5>Last Name<strong class="text-danger">*</strong></h5>
                  <input class="form-control" placeholder="Last Name" name="last_name" type="text" id="last_name" value="{{$user->last_name}}" required />
					 <span class="text-danger">{{$errors->first('last_name')}}</span>
			   </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-6">
                  <h5>Email:<strong class="text-danger">*</strong></h5>
                  <input class="form-control" placeholder="Email" name="email" type="text" id="email" value="{{$user->email}}" required />
					 <span class="text-danger">{{$errors->first('email')}}</span>
			   </div>
               <div class="col-lg-6">
                  <h5>PhoneNo:<strong class="text-danger">*</strong></h5>
                  <input class="form-control" placeholder="Contact No." name="contact_no" type="text" id="contact_no" value="{{$user->contact_no}}" required />
					 <span class="text-danger">{{$errors->first('contact_no')}}</span>
				</div>
            </div>
            <br>         
            <!-- End Panel Basic -->
            <div class="row">
               <div class="col-md-12">
                  <h5> Address:<strong class="text-danger">*</strong></h5>
                  <textarea class="form-control" placeholder="Address" rows="3" name="address" cols="50" id="address" required>{{$user->address}}</textarea>
				 <span class="text-danger">{{$errors->first('address')}}<br/></span>
				 
			   </div>
            </div>
            <div class="row">
               <div class="col-lg-4">
                  <h5>Sales Commission Percentage (%):<strong class="text-danger">*</strong></h5>
                  <input class="form-control" placeholder="Sales Commission Percentage (%)" step="0.01" name="cmmsn_percent" value="{{$user->cmmsn_percent}}" type="number" id="cmmsn_percent" aria-required="true" required />
					 <span class="text-danger">{{$errors->first('cmmsn_percent')}}</span>
			   </div>
            </div>
            <br>
            <div class="row">
               <div class="col-md-9">
                  <button type="submit" class="btn btn-primary">Update </button>
               </div>
            </div>
         </div>
      </div>
          
   </div>
</div>
</div>
</div>
 </div>

@endsection
	
@extends('backend.master')
@section('title',"View Contact")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Contact  Details</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <div class="row">
               <div class="col-sm-3 col-md-12 col-lg-12">
                  <div data-provides="fileinput" class="fileinput fileinput-new">
                     <div data-trigger="fileinput" class="fileinput-preview thumbnail form_Blade" style="width: 180px;"><img src="https://saas.banquetcrm.com/uploads/avatar/thumb_sepqzk6Zfl.jpeg" alt="Image" width="300" class="ima-responsive"></div>
                  </div>
               </div>
            </div>
            <br>
            <div class="row form-panel-view">
               <div class="col-sm-3 col-md-3 col-lg-3">
                  <div class="form-group">
                     <label for="last_name" class="control-label">Full name</label> 
                     <div>{{$cust->first_name}} {{$cust->last_name}}</div>
                  </div>
               </div>
               <div class="col-sm-3 col-md-3 col-lg-3">
                  <div class="form-group">
                     <label for="email" class="control-label">Email</label> 
                     <div>{{$cust->fax}}</div>
                  </div>
               </div>
               <div class="col-sm-4 col-lg-3">
                  <div class="form-group">
                     <label for="mobile" class="control-label">Mobile</label> 
                     <div>{{$cust->mobile}}</div>
                  </div>
               </div>
               <div class="col-sm-3 col-md-3 col-lg-3">
                  <div class="form-group">
                     <label for="additional_info" class="control-label">Address</label> 
                     <div>{{$cust->address}}</div>
                  </div>
               </div>
            </div>
            <div class="row form-panel-view">
               <div class="col-sm-4 col-lg-3">
                  <div class="form-group">
                     <label for="job_position" class="control-label">Job Position</label>
                     <div>{{$cust->job_position}}</div>
                  </div>
               </div>
               <!-- <div class="col-sm-4 col-lg-3">
                  <div class="form-group">
                     <label for="company_id" class="control-label">Company Name</label> 
                     <div>Toll Brothers</div>
                  </div>
               </div>
               <div class="col-sm-4 col-lg-3">
                  <div class="form-group">
                     <label for="company_id" class="control-label">Sales Team</label> 
                     <div>Mike's Sales Team</div>
                  </div>
               </div> -->
            </div>
            <div class="row">
               <div class="col-md-9">
                  <button type="button" class="btn btn-primary">Back </button>
               </div>
            </div>
         </div>
      </div>
      
   </div>
</div>
</div>
 </div>

@endsection
	
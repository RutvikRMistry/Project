@extends('backend.master')
@section('title',"Customers")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Customer  Details</h1>
	   </div>
	<div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <div class="row">
               <div class="col-sm-3 col-md-12 col-lg-12">
                  <div data-provides="fileinput" class="fileinput fileinput-new">
                     <div data-trigger="fileinput" class="fileinput-preview thumbnail form_Blade" style="width: 180px;"><img src="https://saas.banquetcrm.com/uploads/company/thumb_uGME5JC4xv.png" alt="Image" width="300" class="ima-responsive"></div>
                  </div>
               </div>
            </div>
            <div class="row form-panel-view">
               <div class="col-sm-3 col-md-3 col-lg-3">
                  <div class="form-group">
                     <label for="last_name" class="control-label">Customer Name</label> 
                     <div>California Cartage Express</div>
                  </div>
               </div>
               <div class="col-sm-3 col-md-3 col-lg-3">
                  <div class="form-group">
                     <label for="email" class="control-label">Email</label> 
                     <div></div>
                  </div>
               </div>
               <div class="col-sm-3 col-md-3 col-lg-3">
                  <div class="form-group">
                     <label for="website" class="control-label">Customer Website</label> 
                     <div>http://www.calcartage.com/</div>
                  </div>
               </div>
               <div class="col-sm-4 col-lg-3">
                  <div class="form-group">
                     <label for="phone" class="control-label">Phone</label> 
                     <div>1234567891</div>
                  </div>
               </div>
               <div class="col-sm-4 col-lg-3">
                  <div class="form-group">
                     <label for="mobile" class="control-label">Mobile</label> 
                     <div>9876543210</div>
                  </div>
               </div>
               <div class="col-sm-3 col-md-3 col-lg-3">
                  <div class="form-group">
                     <label for="additional_info" class="control-label">Address</label> 
                     <div>2401 E Pacific Coast Hwy, Wilmington, CA 90744, USA</div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-9">
                  <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Back </button>
               </div>
            </div>
         </div>
      </div>     
   </div>
</div>
</div>
 </div>

@endsection
	